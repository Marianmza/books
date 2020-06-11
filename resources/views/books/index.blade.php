<h1>Books index</h1>

@foreach ($books as $book)
<div>
<h2>{{ $book->title }}</h2>
<p>{{ $book->authors }}</p>
@if($book->publisher)
<p>Publisher: {{$book->publisher->title}}</p>
@endif
<a href="books/{{$book->id}}">Read more ..</a>
<button>Add to Cart</button>
</div>
@endforeach