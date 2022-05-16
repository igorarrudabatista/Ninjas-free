<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Ninja awesome2</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset ('/css/style.css')}}">
  <link rel="stylesheet" href="{{asset ('/css/upload-style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="app-container">
  <section class="navigation">
    <a href="#" class="app-link">Ninjas awesome</a>
    <div class="navigation-links">
      <a href="#" class="nav-link ">Destinations</a>
      <a href="#" class="nav-link ">Destinations</a>
      <a href="#" class="nav-link active">Hotels</a>
      <a href="#" class="nav-link">Camping</a>
      <a href="#" class="nav-link">Car Rent</a>
      <a href="#" class="nav-link active">Hotels</a>
    </div>
    <div class="nav-right-side">
      <button class="mode-switch">
       <svg class="sun" fill="none" stroke="#fbb046" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-sun" viewBox="0 0 24 24"><defs/><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
  <svg class="moon" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-moon" viewBox="0 0 24 24"><defs/><path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
     </button>
      <button class="profile-btn">
      <span>{{ Auth::user()->name }} </span>
       <img src="{{Auth::user()->profile_photo_url}}">  

    </button>
    </div>  
  </section>
  <section class="app-actions">
    <div class="app-actions-line">
      <div class="search-wrapper">
      
        <span> <h3> Cadastro </h3> <h5> Finalize o seu cadastro </h5> </span>
        
       
      </div>
   
    
  </section>


  @yield('content')

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script> 
  let ini= document.querySelector('#modal-window');
  ini.classList.add("hideModal");
</script>
<!-- partial -->
  <script  src="{{asset ('/js/script.js')}}"></script>
  <script  src="{{asset ('/js/upload-script.js')}}"></script>