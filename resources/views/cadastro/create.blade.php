@extends('base/base2')

@section('content')


<section class="app-main-area-2 ">
<div class="app-main-left2 cards-area">



<form action="{{asset('/produtos')}}" method="POST" enctype="multipart/form-data">
      @csrf
  <div class="form-row">
    <div class="col-md-5 mb-3">
      <label for="validationDefault01">Nome do Produto </label>
      <input type="text" class="form-control" id="Nome_Produto" name="Nome_Produto" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Categoria do Produto</label>
      <input type="text" class="form-control" id="Categoria_Produto" name="Categoria_Produto" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefaultUsername">Preço do Produto</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">R$</span>
        </div>
        <input type="text" class="form-control" id="Preco_Produto" name="Preco_Produto" onkeypress="$(this).mask('999.990,00')" required>
      </div>
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-5 mb-3">
      <label for="validationDefault03">Quantidade </label>
      <input type="text" class="form-control" id="Quantidade_Produto" name="Quantidade_Produto"  required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault04"> Produto em Estoque? </label>
      <select name="Estoque_Produto" id="Estoque_Produto" class="form-control">
        <option value="Não"> Não </option>
        <option value="Sim"> Sim </option>
      </select>    
    </div> 

    <div class="col-md-3 mb-4">
      <label for="Status_Produto"> Status do Produto </label>
      <select  id="Status_Produto" name="Status_Produto" class="form-control">
        <option value="0"> Desativado </option>
        <option value="1"> Ativo </option>
      </select>    
    </div> </div>





    <div class="col-md-6 mb-4">
    
    <div class="upload">
      <input type="file" title="" id="image" name="image"  class="drop-here">
      <div class="text text-drop">Imagem</div>
      <div class="text text-upload">Enviando</div>
      <svg class="progress-wrapper" width="300" height="300">
        <circle class="progress" r="115" cx="150" cy="150"></circle>
      </svg>
      <svg class="check-wrapper" width="130" height="130">
        <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
      </svg>
      <div class="shadow"></div>
    </div>



  <div class="form-group">
    <div class="form-check">
   

      
    
  </div>
  <button class="btn btn-primary" type="submit">Cadastrar Produto</button>
</form>

@endsection