<h1>Title</h1>
<p>{{ $post->title }}</p>

<h1>Content</h1>
<p>{{ $post->content }}</p>

@foreach($comments as $comment)
    <p>{{ $comment->content }}</p>
@endforeach

<form action="/posts/{{ $post->id }}/comments" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <textarea type="text" name="content"></textarea>
    <button type="submit">Create</button>
</form>

<a href="/posts/{{ $post->id }}/edit">Edit</a>