<h1> Disciplinas </h1>

<ul>
@foreach($disciplinas as $disciplina)
<li>  {{$disciplina->titulo}} <a href="/disciplinas/{{$disciplina->id}}">  mostrrar </a> </li>
@endforeach
</ul>

