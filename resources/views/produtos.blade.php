@extends('base')
@section('container-principal')
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">descrição</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @forelse ( $produtos as $produto )
        <th scope="row">{{$produto->id}}</th>
        <td>{{$produto->nome}}</td>
        <td>{{$produto->descricao}}</td>
        <td>@mdo</td>
      </tr>
      @empty
      <th>
          <td  colspan="2" >não ha cidades relacionadas</td>
      </th>
   @endforelse


    </tbody>
  </table>
@endsection
