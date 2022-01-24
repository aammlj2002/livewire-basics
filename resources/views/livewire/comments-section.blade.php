<div>
    @if (Session("success"))
    <p>{{Session("success")}}</p>
    @endif
    <form wire:submit.prevent="postComment" action="">
        <input wire:model.defer="comment" type="text">
        @error('comment')
        <p>{{$message}}</p>
        @enderror
        <input type="submit" value="submit">
    </form>

    @foreach ($post->comments as $comment)
    <p>time- {{$comment->created_at->diffForHumans()}}</p>
    <p>comment- {{$comment->comment}}</p>
    @endforeach
</div>