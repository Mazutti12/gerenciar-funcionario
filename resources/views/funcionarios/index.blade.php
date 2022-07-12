<a href="/funcionarios/create">Novo registro</a>
{{-- @if (count($pessoas) == 0)
    nenhuma pessoa
@else
    total de pessoas: {{count($pessoas)}}
<ul> --}}
    @foreach ($funcionarios as $funcionario)
        <li>
            {{$funcionario->nome}}  {{$funcionario->cargo}} {{$funcionario->dtnasc}}
            <a href="/funcionarios/edit/{{$funcionario->id}}">Editar</a>
            <a href="/funcionarios/show/{{$funcionario->id}}">Ver</a>
            <a href="/funcionarios/destroy/{{$funcionario->id}}">Excluir</a>
        </li>
    @endforeach
</ul>
{{-- @endif --}}
