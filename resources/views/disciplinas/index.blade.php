<h1> Disciplinas </h1>

<ul>
@foreach($disciplinas as $disciplina)
<li> {{$disciplina->titulo}} </li>
@endforeach
</ul>

