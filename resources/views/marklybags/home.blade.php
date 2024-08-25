<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <title>Markly</title>
</head>

@include('componentes.header')

<body>
  <main>
    <!--sección 1-->
    <section>
      <article>
        <div class="seccion1">
          <img src="{{ asset('assets/images/Rectangle.png') }}" alt="Rectangulo de sombra" width="50%" />
          <img class="img-bolso" src="{{ asset('assets/images/carteraCobrePpal.png') }}" alt="Imagen de bolso" />
          <img class="img-tittle" src="{{ asset('assets/images/Group.png') }}" alt="Titulo" />
          <p class="texto">We believe in the power of a well-crafted bag to enhance your lifestyle. <br>
            Explore our curated collection of premium bags that seamlessly blend style,<br>
            functionality, and durability.</p>
          <a href="#encabezado"><button class="boton">Shop Now!</button></a>
        </div>
        <div class="pieSeccion">
          <span>Elevate Your Style with Exceptional Bags!</span>
          <span>SCROLL</span>
        </div>
      </article>
    </section>

    <!--sección 2-->
    <section class="secciong">
      <div class="seccionFlex2">
        <article class="contenedors2">
          <div class="centrado">
            <div class="pequeno">
              <span>YOUR PERFECT FIT</span>
            </div>
            <h2 class="negrita-grande">We believe in fashion that cares for the planet. Our commitment to sustainability
              goes
              beyond creating
              stylish bags – it's about making a positive impact</h2>
            <p class="pequeno-opaco">Choosing the right size is crucial when it comes to bags. Use our comprehensive
              size guide to ensure your
              Markly bag is not only stylish but also perfectly suited to your needs. From compact crossbodies to
              spacious
              totes, we've got the right size for every occasion.</p>
          </div>
        </article>
        <article>
          <img src="{{ asset('assets/images/bolsoNegro.png') }}" alt="Bolso Negro" width="450px" />
        </article>
      </div>
    </section>

    <!--sección 3-->
    <section class="secciong">
      <div class="seccionFlex3">
        <article>
          <img src="{{ asset('assets/images/piedrasColores.png') }}" alt="Piedras de Colores" width="450px" />
        </article>
        <article class="contenedors3">
          <div class="centrado">
            <h2 class="negrita-grande">Adventure collection is designed to keep up with your dynamic lifestyle, offering
              durability without
              compromising on style.</h2>
            <p class="pequeno-opaco">At Markly, we believe in the power of a well-crafted bag to enhance your lifestyle.
              Explore our curated
              collection of premium bags that seamlessly blend style, functionality, and durability.</p>
              <a href="#encabezado"><button class="button-s3">Shop Now!</button></a>
          </div>
        </article>
      </div>
    </section>

    <!--sección 4-->
    <section class="secciong">
      <div class="seccionFlex4">
        <article>
          <img src="{{ asset('assets/images/carteraRosada.png') }}" alt="Cartera Rosada" width="700px;" />
        </article>
        <article>
          <div>
            <div class="h1s4">
              <strong>
                Whether you're seeking classic sophistication, urban chic, or a companion for you, Markly has the
                perfect bag
                for every occasion.</strong>
            </div>
            <div class="ps4">
              <p>Discover our current best-sellers and customer favorites. Each product is a testament to Markly's
                commitment to
                combining style, durability, and functionality.</p>
              <a href="#encabezado"><button class="btns4">Shop Now!</button></a>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!--sección 8-->
    <section>
      <section class="seccion8">
        <div class="seccionFlex8">
          <img src="{{ asset('assets/images/carteraMiel.png') }}" alt="carteraMiel" width="100%" />
          </article>
          <article class="h1s8">
            <article>
              <h2 class="sec8" name=" contacto" id="contacto">Join the Markly Community ⎯ Subscribe to Our Newsletter
              </h2>
            </article>
            <article class="ps8">
              <p>Be the first to know about new arrivals, exclusive promotions, and the latest trends in the world of
                bags.
                Sign up for our newsletter and stay connected with the Markly lifestyle.</p>
            </article>
            <article class="secciong3">
              <input class="input8" type="text" placeholder="Email">
              <button class="btns8">Submit</button>
            </article>
          </article>
        </div>
      </section>
  </main>
</body>

@include('componentes.footer')

</html>