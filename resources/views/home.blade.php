@extends('layout.base')

@section('title','Home')

@section ('contenido')
<header>@yield('navs.navbar')</header>
<div class="cont-logo">
      <img class="logo col-5 col-sm-3 ml-auto mr-auto" src="../images\logo-1.png" alt="" background-color="white" >
    </div>
    <section class="">
        <div class="box ml-auto mr-auto col-12 ">
            <p>En <strong>La Vieja Floreria</strong> vas a encontrar las mejores y mas variadas calidades y sabores de cervezas.</p>
            <p>Seleccionadas de las fabricas mas artesanales de Buenos Aires
                <br>
                Para que disfrutes esos sabores que no conocias pero te encantan.
            </p>
            <p>
                Nuestro objetivo es que las pequeñas fabricas cerveceras puedan llegar a ese publico que busca
                <br>
                experimentar sabores unicos y que solo ellos saben como lograrlo.
            </p>
            <p>En nuestra tienda online de facil uso e intuitiva vas a encontrar todo eso y mas, como ofertas
                <br>
                accesorios y las soluciones mas deliciosas para tus reuniones.
            </p>   
        </div>
    </section>
@endsection