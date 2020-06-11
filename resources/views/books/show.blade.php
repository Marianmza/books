<h1>{{$book->title}}</h1>
<p>{{$book->authors}}</p>
<img src="{{$book->image}}" alt="{{$book->title}}">

<form action="/add-to-cart" method="post">
    @csrf
<input type="hidden" name="book_id" value="{{$book->id}}">
    <input type="number" name="count">
<button>Add to Cart</button>
</form>