@extends('views.home')

@section ('navbar')
     <nav class="navbar navbar-expand-md navbar-light">
       <a class="navbar-brand" href="/home">
       <h1>La Vieja Floreria</h1>
       <p>brewbery online</p>
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <!--items de barra-->
       <div class="collapse navbar-collapse" >
         <ul class="navbar-nav ml-auto">
           <li class="nav-item active">
               <a class="nav-link" href="/register">
                 <h4>Registrarse</h4>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="/login">
                 <h4>Iniciar Sesion</h4>
               </a>
           </li>
           <li class="nav-item active">
               <a class="nav-link" href="/faq">
                 <h4>Faq</h4>
               </a>
           </li>
         </ul>
         <!--buscador-->
         <!--<form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>-->
       </div>
@endsection
