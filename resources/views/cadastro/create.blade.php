@extends('base/base')

@section('content')



<section class="app-actions">
    <div class="app-actions-line">
      <div class="search-wrapper">
     
        <h3> Finalize o seu Perfil</h3>
      </div>
      
  
    <div class="app-actions-line filter-line">
      <div class="filter-action-buttons">
        <button class="filter-btn">
        <div class="filter-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        </div>
        <span class="filter-text">Sat,Nov 10-Fri,Nov 22</span>
      </button>
      <button class="filter-btn">
        <div class="filter-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
        </div>
        <span class="filter-text">Rooms - 2</span>
      </button>
      <button class="filter-btn">
        <div class="filter-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <span class="filter-text">Adults - 2</span>
      </button>
      <button class="filter-btn">
        <div class="filter-icon">
            <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <span class="filter-text">Child - 1</span>
      </button>
      <button class="filter-btn more">
        <div class="filter-icon">
          <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders" viewBox="0 0 24 24">
            <path d="M4 21v-7M4 10V3M12 21v-9M12 8V3M20 21v-5M20 12V3M1 14h6M9 8h6M17 16h6"/>
          </svg>
        </div>
        <span class="filter-text">More</span>
      </button>
      </div>
    </div>
  </section>



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
  <button class="btn btn-primary" type="submit">Cadastrar Produto</button>
</form>

@endsection