<h1>CART</h1>

@foreach ($cart as $item)
    <p>Name: {{$item->book->title}}</p> 
    <p>Book ID: {{$item->book_id}}</p> 
    <p>Publisher: {{$item->book->publisher->title}}</p> 
    <p>Quantity: {{$item->count}}</p>
@endforeach