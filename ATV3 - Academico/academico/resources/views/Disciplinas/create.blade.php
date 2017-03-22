@extends('layout.master')

@section('conteudo')

        <h1>Inserir disciplina</h1>

        <form method="post" action="/disciplinas">

          {{ csrf_field() }}
          <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" class="form-control" />
          </div>
           <div class="form-group">
          <label for="codigo">Codigo</label>
          <input type="text" name="codigo" class="form-control" /><br>
          </div>
          <div class="form-group">
          <label for="codigo">Carga horaria</label>
          <input type="text" name="carga"  class="form-control" />
          </div>
          <input type="submit" value="Salvar" class="btn  btn-primary"/>
          <a href="/disciplinas" value="Voltar" class="btn  btn-primary">Voltar</a>

          

@endsection
