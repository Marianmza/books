<h1>EDIT</h1>

<form action="/books/{{$book->id}}" method="post">
    @csrf
<div>
    <label for="title">Title</label>
<input type="text" name='title' value="{{ $book->title }}">
</div>
<div>
    <label for="title">Authors</label>
    <input type="text" name='authors' value="{{ $book->authors }}">
</div>
<div>
    <label for="image">Image</label>
    <input type="text" name='image' value="{{ $book->image }}">
</div>
<button type="submit">Save my edited book!</button>

</form>