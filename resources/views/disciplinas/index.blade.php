<ul>
@foreach($disciplinas as $disciplina)
<li>  {{$disciplina->titulo}} <a href="/disciplinas/{{$disciplina->id}}">  mostrar </a> </li>
@endforeach
</ul>
<a href="/disciplinas/create"> Cadasrar disiciplina </a>
