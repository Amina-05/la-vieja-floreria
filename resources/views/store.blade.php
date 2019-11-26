@extends('layout.base')

@section('title','store')

@section ('contenido')
    <header>@yield('navs.navbar')</header>
    <div class="row">
        <!-- SECCION DE FILTRO -->
        <div class="buscador ml-3 col-md-6 col-lg-2">
            <div class="col-12"><h3>FILTRO</h3></div>
            <div class="mb-3 col-12">
                <button class="col-12" type="button" data-toggle="collapse" data-target="#precio" aria-expanded="false" aria-controls="collapseExample">
                    Precio
                </button>
                <div class="collapse" id="precio">
                    <ul style="list-style:none; padding:0;">
                        <li>$0 a $100</li>
                        <li>$100 a $300</li>
                        <li>$300 a $500</li>
                        <li>$500 a $700</li>
                        <li>$700 a $1000</li>
                    </ul>
                </div>
            </div>
            <div class="mb-3 col-12">
                <button class="col-12" type="button" data-toggle="collapse" data-target="#marca" aria-expanded="false" aria-controls="collapseExample">
                    Marca
                </button>
                <div class="collapse" id="marca">
                    <ul style="list-style:none; padding:0;">
                        <li>Juguetes Perdidos</li>
                        <li>Bierful</li>
                        <li>Berlina</li>
                        <li>Eliot-Ness</li>                
                    </ul>
                </div>
            </div>
            <div class="mb-3 col-12">
                <button class="col-12" type="button" data-toggle="collapse" data-target="#tipo" aria-expanded="false" aria-controls="collapseExample">
                    Tipo
                </button>
                <div class="collapse" id="tipo">
                    <ul style="list-style:none; padding:0;">
                        <li>Stout</li>
                        <li>Ipa</li>
                        <li>Roja</li>
                        <li>Rubia</li>     
                    </ul>
                </div>
            </div>
        </div>
        <!-- SECCION DE CERVEZAS -->
        <div class="row cont-prod col-md-6 col-lg-10" name="fila1"><!--CONTENEDOR FILA-->
            <div class="producto col-12 col-lg-3" name="producto-1"><!--CONTENEDOR PRODUCTO-->
                <div class="my-2 col-12" name="name">
                    <h2><a href=""><span>NOMBRE DE CERVEZA</span></a></h2>
                </div>
                <div class="my-2 col-12" name="image">
                    <img class="img-prod" src="img/botellon-muestra-1.png" alt="">
                </div>
                    <div class="my-2" name="data">
                        <div class="mt-2" name="marca">
                            <h2><a href=""><span>Marca: Nombre de Marca</span></a></h2>
                        </div>
                        <div class="my-2" name="precio">
                            <span>PRECIO</span>
                        </div>
                        <div class="mb-2">
                            <button>COMPRAR</button>
                        </div>
                    </div>
                </div>
                    <div class="producto col-lg-3" name="producto-1"><!--CONTENEDOR PRODUCTO-->
                    <div class="my-2 col-12" name="name">
                        <h2><a href=""><span>NOMBRE DE CERVEZA</span></a></h2>
                    </div>
                    <div class="my-2 col-12" name="image">
                        <img class="img-prod" src="img/botellon-muestra-1.png" alt="">
                    </div>
                    <div class="my-2" name="data">
                        <div class="mt-2" name="marca">
                            <h2><a href=""><span>Marca: Nombre de Marca</span></a></h2>
                        </div>
                        <div class="my-2" name="precio">
                            <span>PRECIO</span>
                        </div>
                        <div class="mb-2">
                            <button>COMPRAR</button>
                        </div>
                    </div>
                </div>
                    <div class="producto col-lg-3" name="producto-1"><!--CONTENEDOR PRODUCTO-->
                    <div class="my-2 col-12" name="name">
                        <h2><a href=""><span>NOMBRE DE CERVEZA</span></a></h2>
                    </div>
                    <div class="my-2 col-12" name="image">
                        <img class="img-prod" src="img/botellon-muestra-1.png" alt="">
                    </div>
                    <div class="my-2" name="data">
                        <div class="mt-2" name="marca">
                            <h2><a href=""><span>Marca: Nombre de Marca</span></a></h2>
                        </div>
                        <div class="my-2" name="precio">
                            <span>PRECIO</span>
                        </div>
                        <div class="mb-2">
                            <button>COMPRAR</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection