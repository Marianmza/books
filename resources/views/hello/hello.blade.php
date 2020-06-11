<h1>Hello <?= $whatever?> </h1>
<h1>Hello {{  $whatever }}</h1>
<P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, facilis maxime minima velit nisi aspernatur necessitatibus rem, beatae corrupti atque sit obcaecati illum perspiciatis autem. Asperiores earum laboriosam eum fuga facere totam repellendus tempore tenetur, cupiditate fugiat sed dolor error vel praesentium ipsa maxime commodi. Mollitia, laudantium. Architecto quis, culpa aut optio labore ipsam alias!</P>
<P>Your age is <?= $age?></P>
{{-- <p> <?php echo $comment?> </p> --}}
<p> {{$comment}} </p>
<!-- THIS IS HTML COMMENT -->
{{-- THIS IS BLADE COMMENT  --}}
<p>{!! $description !!}</p>


{{-- how to put logic --}}
<p>Your age is <?php echo $age ?></p>
<?php if($age >=18) :?>
<p>Ok, you are old enough!</p>
<?php else: ?>
<p>Go home, you are too young!</p>
<?php endif; ?>


@if($age >= 18)
<p>Ok, you are old enough!</p>
@else
<p>Go home, you are too young!</p>
@endif

{{-- foreach shortcut --}}

@foreach($fruits as $value)
<p>{{$value}}</p>
@endforeach


