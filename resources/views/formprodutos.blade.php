@extends('base')
@section('container-principal')
<form action="{{route('produto.store')}}" method="POST" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" name="nome"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Descricao</label>
        <input type="text" name="descricao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
