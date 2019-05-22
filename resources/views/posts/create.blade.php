<form action="/posts" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="title">
    <textarea type="text" name="content"></textarea>
    <button type="submit">Create</button>
</form>