<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;
    public $title;
    public $content;
    public $photo;
    protected $rules = [
        "title"=>"required|max:255",
        "content"=>"required",
        "photo"=>"nullable|sometimes|image|max:5000",
    ];
    public function updatedPhoto()
    {
        $this->validate();
    }
    public function submitForm()
    {
        // dd($this->photo);
        $this->validate();
        Post::create([
            "title"=>$this->title,
            "content"=>$this->content,
            "image"=>$this->photo ? $this->photo->store("photos", "public") : null
        ]);
        session()->flash("success", "posted");
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
