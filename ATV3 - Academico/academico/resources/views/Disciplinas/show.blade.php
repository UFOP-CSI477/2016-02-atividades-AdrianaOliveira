@extends('layout.master')

@section('conteudo')

      <h1>Exibir disciplina</h1>

      <form method="post" action="/disciplinas/{{ $disciplina->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        Nome:  {{ $disciplina->nome }}<br>
        Código: {{ $disciplina->codigo }}<br>
        Carga Horária: {{ $disciplina->carga }}<br>
<br>    
        <button href="/disciplinas/{{ $disciplina->id }}/edit" class="btn btn-primary"> editar</button>
        
        <button type="submit" class="btn btn-danger" value="Excluir" >Excluir</button>
        <a href="/disciplinas" class="btn btn-primary" >Voltar</a> 
              
          
      </form>

@endsection
