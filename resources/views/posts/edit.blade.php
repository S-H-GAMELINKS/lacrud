<form action="/posts/{{$post->id}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="title" value="{{ $post->title }}">
    <textarea type="text" name="content">{{ $post->content }}</textarea>
    <button type="submit">Update</button>
</form>