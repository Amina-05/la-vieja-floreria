@extends('layout.base')

@section('title','Index')

@section('contenido')
  <header>@yield('navs.navbarlogin')</header>
  <section class="container">
    <h1 class="title">¿Cómo diferenciar los tipos de cerveza? ¡Conocelos!</h1>
      <div class="row">
        <div class="col box">
          <h2>Lager</h2>
          <p>Elaboradas a baja temperatura(0° a 4°) y de baja fermentación</p>
          <ul>
            <li> <strong>Pilsen:</strong> de color claro y contenido alcoholico que varia entre 4,5% y 5,5%</li>
            <li><strong>Bock:</strong> de sabor fuerte, de diferentes tonalidades pero con mucho cuerpo y su contenido alcoholico que varia entre 7% y 9%</li>
          </ul>
        </div>
        <div class="col box">
          <h2>Ale</h2>
          <p>De sabor complejo y alta fermentación(25°)</p>
          <ul>
            <li><strong>Ipa:</strong> de color cobrizo con mucho cuerpo, matices afrutados, alto contenido de lúpulos y malta y su contenido alcoholico que varia ente 5,5% y 8%</li>
            <li><strong>Brown Ale:</strong> de color marrron, con mucho sabor a malta, son afrutadas y secas, y su contenido alcoholico que varia entre 4,5% y 5%</li>
            <li><strong>Stout:</strong> de color oscura, posee un excelente aroma, sabores robustos y malteados, y su contenido alcoholico que varia entre 4% y 5% </li>
            <li><strong>Porter:</strong> de color oscuro, posee un sabor malteado con esencia tostada y achocolatada, y su contenido alcoholico que varia entre 8% y 10% </li>
          </ul>
        </div>
      </div>
  </section>
@endsection
