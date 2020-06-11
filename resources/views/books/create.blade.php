<form action="/books" method="post">
    @csrf
<div>
    <label for="title">Title</label>
    <input type="text" name='title'>
</div>
<div>
    <label for="title">Authors</label>
    <input type="text" name='authors'>
</div>
<div>
    <label for="image">Image</label>
    <input type="text" name='image'>
</div>
<button type="submit">Save my new book!</button>

</form>