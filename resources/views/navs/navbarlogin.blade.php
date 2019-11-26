@extends('views.home')

@section ('navbarlogin')
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="">
      <a class="navbar-brand" href="/index">
      <h1>La Vieja Floreria</h1>
      <p class="subtitulo">cerveceria online</p>
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
     aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
    <!--items de barra-->
    <div class="collapse navbar-collapse beer" >
        <div class="dropdown mr-auto ml-auto">
           <a class="" data-toggle="dropdown" href="#">
             <p>Lagers</p>
           </a>
           <div class="dropdown-menu">
               <a class="dropdown-item" href="#">Pilsen</a>
               <a class="dropdown-item" href="#">Bock</a>
           </div>
         </div>
         <div class="dropdown mr-auto ml-auto">
           <a class="" data-toggle="dropdown" href="#">
             <p>Ale</p>
           </a>
           <div class="dropdown-menu">
               <a class="dropdown-item" href="#">Ipa</a>
               <a class="dropdown-item" href="#">Brown Ale</a>
               <a class="dropdown-item" href="#">Stout<a>
               <a class="dropdown-item" href="#">Porter</a>
           </div>
         </div>
        </div>
       <!--COOKIE and SESSION-->
         <div class="dropdown cont-user mr-3 auto ml-auto ">
           <a class="" data-toggle="dropdown" href="#">
             @if(isset($_SESSION["logueado"]))
             <h3 class="user">Bienvenido</h3>
             <h3 class="user">{{$_SESSION["logueado"]}} </h3>
             @endif
           </a>
             <div class="dropdown-menu">
               <a class="dropdown-item" href="#">Mi Perfil</a></li>
               <a class="dropdown-item" href="#">Mi Carrito</a></li>
               <form class="" action="" method="post">
                 <a class="dropdown-item" href="/home">Cerrar Sesion</a></li>
               </form>

            </div>
         </div>
@endsection
