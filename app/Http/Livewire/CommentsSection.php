<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class CommentsSection extends Component
{
    public $post;
    public $comment;
    protected $rules=[
        "comment"=>"required|min:4"
    ];
    public function postComment()
    {
        $this->validate();
        Comment::create([
            "post_id"=>$this->post->id,
            "comment"=>$this->comment
        ]);
        $this->comment="";
        $this->post = Post::find($this->post->id);
        session()->flash("success", "Comment Sent");
    }
    public function render()
    {
        return view('livewire.comments-section');
    }
}
