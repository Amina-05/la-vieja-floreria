@extends('layout.base')

@section('title', 'Preguntas frecuentes')

@section('contenido')
  <header>@yield('navs.navbar')</header>
  <section class="container">
    <div class="wrap mr-auto ml-auto col-12 col-sm-10 col-lg-6 box">
      <h1>Acceso y uso al Sitio Web</h1>
      <details>
        <summary>¿Cuales son los requisitos para registrarme?</summary>
        <p>
        Ud. debe tener 18 años de edad o más para acceder al Sitio Web. Y completar el formulario de registro.
        <br>
        Al operar con nosotros por este medio usted deberá brindar información veraz, completa y precisa.
        <br>
        Usted será el único responsable por la información proporcionada, por la actividad que se desarrolle en el Sitio Web y
        deberá mantener seguro el acceso al mismo.
        <br>
        <a href="/register"><strong>Registrate aqui</strong></a>
        </p>
      </details>
      <details>
        <summary> Protección de datos personales</summary>
        <p>
        La vieja floreria S.A. ha implementado todos los procesos requeridos a los efectos
        de Protección de los Datos Personales de los Usuarios, con el objeto de evitar
        el mal uso, alteración, acceso no autorizado y/o robo de los Datos Personales suministrados
        por el Usuario a Dulmes S.A. Sin perjuicio de lo expresado en el presente, el Usuario acepta y
        reconoce que las medidas de seguridad en Internet no son inviolables.
        <br>
        Toda información suministrada será tratada por La vieja floreria S.A. conforme términos previstos en la Ley Nacional
        de Protección de Datos Personales Nª 25.326. Ud. tiene la facultad de ejercer el derecho de acceso a sus datos
        personales en forma gratuita a intervalos no inferiores a seis (6) meses, salvo que se acredite un interés legítimo al efecto, conforme lo establecido en el artículo 14,
        inciso 3 de la Ley 25.326 (Disposición 10/2008, artículo 1°, B.O. 18/09/2008) y a solicitar su actualización, rectificación o
        supresión de sus datos personales. A tal fin, deberá enviar un e-mail a ventasweb@laviejafloreria.com o comunicarse
        telefónicamente 0810-345-0276.
        <br>
        Se le hace saber que la Dirección Nacional de Protección de Datos Personales, órgano de control de la ley 25.326,
        tiene la atribución de atender las denuncias y reclamos que se interpongan con relación al incumplimiento de las normas sobre
        protección de datos personales.
        </p>
      </details>

      <h1>Compra</h1>
      <details>
        <summary>¿Cómo efectuar una compra?</summary>
        <p>
        Para poder realizar compras el usuario interesado deberá registrarse en el Sitio Web consignando
        la totalidad de información personal que se requiera.
        <br>
        Al registrarte, el Sitio Web ha sido diseñado para que
        cualquier consumidor pueda realizar en él compras de los productos que en el mismo se ofrecen sujeto al stock disponible al momento
        de la compra. agregas los productos que desees al carrito, seleccionas la cantidad y por ultimo inicias el pago.
        </p>
      </details>
      <details>
        <summary>¿Cuáles son los medios de pago para este servicio?</summary>
        <p>
        Podés abonar tu pedido con una amplia cantidad de Tarjetas de Crédito
        (deben estar emitidas dentro de la Republica Argentina) o con Todo Pago, incluyendo Tarjeta de Débito.
        <br>
        Efectivo
        En centros de Pago Fácil, Rapipago
        </p>
        <br>
        <img src="../images/mediosdepago.png" alt="Tarjetas de credito permitidas" width="500" height="100">
      </details>
      <details>
        <summary>¿Este servicio es para todo el país?</summary>
        <p>Podés comprar desde cualquier lugar del país y las entregas se realizan en todas las provincias</p>
      </details>
      <details>
        <summary>¿Cuáles son los horarios y plazos de entrega?</summary>
        <p>ENTREGA EN CAGA/GBA Los horarios de entrega para envío a domicilio, a partir de la realización de tu pedido, son en 48 hs.
        En las siguientes bandas horarias:
        <br>
        Dias	Bandas Horarias
        Lunes a Sabados	8:00 a 19:00 hs	8:00 a 13:00 hs	13:00 a 19:00 hs
        Feriados	8:00 a 13:00 hs
        <br>
        Si indicaste que tu pedido lo retirás en alguna de nuestras sucursales, podés hacerlo a partir de las 48 hs de Lunes a Domingo en el horario de 9 a 22 hs.
        <br>
        Te enviaremos un mail avisándote la disponibilidad en la sucursal seleccionada.
        ENTREGA RESTO DEL PAIS Los plazos varían según la localidad de entrega.
        Cuando el pedido esté listo para ser entregado a domicilio o disponible en la sucursal recibirás un correo electrónico informándote al respecto.
        </p>
      </details>
      <details>
        <summary>¿Debe estar presente el titular de la tarjeta al momento de la entrega?</summary>
        <p>Debe estar presente la persona que realizó la compra con el N° de pedido o en su defecto el autorizado a recibir la compra,
        junto con su DNI y el N° de pedido. Quien reciba el pedido debe ser mayor a 18 años presentando DNI</p>
      </details>
      <details>
        <summary>¿Dónde puedo consultar el seguimiento de mi pedido?</summary>
        <p>Podés ingresar en MIS PEDIDOS o comunicarte con nosotros al 0800-444-6666 opción 2 para que te podamos ayudar.</p>
      </details>
      <details>
        <summary>¿Puedo anular una compra?</summary>
        <p>Podés ingresar en MIS PEDIDOS o comunicarte con nosotros al 0800-444-6666 opción 1 para que te podamos ayudar.</p>
      </details>

      <h1>Stock</h1>
      <details>
        <summary>¿Qué pasa si en el momento de efectuar la compra no hay mas stock?</summary>
        <p>
        El consumidor declara conocer que en virtud del dinamismo del Sitio Web y que en el mismo pueden estar efectuando
        operaciones muchos consumidores a la vez, puede suceder que al momento de concretar la operación el producto ya no
        se encuentre disponible. Asimismo, una compra podrá no ser concretada en función del stock de mercadería disponible
        y/o por no haber sido aprobada la operación por la entidad emisora de la tarjeta de crédito con la que el consumidor
        opere y/o por no obtener el sitio la aprobación empresa contratada a tal efecto a los fines de evaluar el riesgo
        crediticio del usuario, etc. Las razones referidas, han sido enumeradas al mero título ejemplificativo.
        <br>
        Asimismo, el consumidor reconoce aceptar que el Sitio Web podrá requerirle datos adicionales con el objeto de poder
        concretar la operación. En caso de no confirmarse la operación, el sitio comunicará al usuario de dicha circunstancia
        mediante el envío de un correo electrónico que será cursado por el Sitio Web
        </p>
      </details>

      <h1>Cookies</h1>
      <details>
        <summary>¿Qué son las cookies?</summary>
        <p>
        El Usuario del Sitio conoce y acepta que La vieja floreria S.A. podrá utilizar un sistema de seguimiento
        mediante la utilización de cookies (las "Cookies").
        <br>
        Las Cookies son pequeños archivos que se instalan en el disco rígido, con una duración limitada en
        el tiempo que ayudan a personalizar los servicios. También ofrecemos ciertas funcionalidades que
        sólo están disponibles mediante el empleo de Cookies. Se utilizan con el fin de conocer los intereses,
        el comportamiento y la demografía de quienes visitan o son Usuarios de nuestro Sitio y de esa forma,
        comprender mejor sus necesidades e intereses y darles un mejor servicio o proveerle información relacionada.
        <br>
        También usaremos la información obtenida por intermedio de las Cookies para analizar las páginas navegadas por el Usuario,
        las búsquedas realizadas, mejorar nuestras iniciativas comerciales y promocionales, mostrar publicidad o promociones,
        banners de interés, noticias sobre La vieja floreria S.A., perfeccionar nuestra oferta de contenidos y artículos,
        personalizar dichos contenidos, presentación y servicios; también podremos utilizar Cookies para promover y
        hacer cumplir las reglas y seguridad del sitio. La vieja floreria S.A. podrá agregar Cookies en los e-mails que
        envíe para medir la efectividad de las promociones.
        <br>
        Utilizamos adicionalmente las Cookies para que el Usuario no tenga que introducir su clave tan frecuentemente durante
        una sesión de navegación, también para contabilizar y corroborar las registraciones, siempre teniendo como
        objetivo de la instalación de las Cookies, el beneficio del Usuario que la recibe, y no será usado con otros
        fines ajenos a Dulmes S.A.Se aclara expresamente que estas políticas cubre la utilización de Cookies por este sitio y
        no la utilización de Cookies por parte de anunciantes. Nosotros no controlamos el uso de Cookies por terceros.
        <br>
        Ud. puede impedir que su navegador acepte las "cookies", en cuyo caso La vieja floreria S.A. no garantiza el
        correcto funcionamiento de los servicios y contenidos ofrecidos a través del Sitio Web.
        </p>
      </details>
    </div>
  </section>
@endsection
