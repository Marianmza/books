<h1>Publishers Index</h1>

@foreach($publishers as $item)
    <div>
        <h2>{{ $item->title }}</h2>
        <ul>
           @foreach($item->books as $b)
        <li>{{$b->title}}</li>
        @endforeach
        </ul>
        <a href="publishers/{{ $item->id }}">Read more...</a>
    </div>
@endforeach
