<h1>{{$publisher->title}}</h1>

@foreach ($books as $item)
<p>{{$item->title}}</p>
@endforeach