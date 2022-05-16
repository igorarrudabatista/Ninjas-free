@extends('base/base')

@section('content')



<section class="app-actions">
    <div class="app-actions-line">
      <div class="search-wrapper">
     
        <h3> Finalize o seu Perfil</h3>
      </div>
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>

    </div></section>  


   


<section class="app-main-area-2 ">
<div class="app-main-left2 cards-area">



<form action="{{asset('/produtos')}}" method="POST" enctype="multipart/form-data">
      @csrf
  <div class="form-row">
    <div class="col-md-5 mb-3">
      <label for="validationDefault01">Nome completo </label>
      <input type="text" class="form-control" id="Nome_Produto" name="Nome_Produto" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">CPF</label>
      <input type="text" class="form-control" id="Categoria_Produto" name="Categoria_Produto" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">E-mail</label>
      <input type="text" class="form-control" id="email" name="Categoria_Produto" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">CNPJ</label>
      <input type="text" class="form-control" id="Categoria_Produto" name="Categoria_Produto" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Telefone</label>
      <input type="text" class="form-control" id="Categoria_Produto" name="Categoria_Produto" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Endereço</label>
      <input type="text" class="form-control" id="Categoria_Produto" name="Categoria_Produto" required>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefaultUsername">Linkedin</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Linkedin.com/</span>
        </div>
        <input type="text" class="form-control" id="Preco_Produto" name="Preco_Produto" onkeypress="$(this).mask('999.990,00')" required>
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefaultUsername">Facebook</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">facebook.com/</span>
        </div>
        <input type="text" class="form-control" id="Preco_Produto" name="Preco_Produto" onkeypress="$(this).mask('999.990,00')" required>
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefaultUsername">Instagram</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Instagram.com/</span>
        </div>
        <input type="text" class="form-control" id="Preco_Produto" name="Preco_Produto" onkeypress="$(this).mask('999.990,00')" required>
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefaultUsername">Twitter</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Twitter.com/</span>
        </div>
        <input type="text" class="form-control" id="Preco_Produto" name="Preco_Produto" onkeypress="$(this).mask('999.990,00')" required>
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefaultUsername">Github</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">Github.com/</span>
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
      <div class="text text-drop">Foto</div>
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
    </div>
  <div class="col-md-6 mb-4">

  <button class="btn btn-primary" type="submit">Cadastrar Produto</button>
</form>

@endsection