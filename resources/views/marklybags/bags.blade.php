<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bags - Markly Collections</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">   
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

@include('componentes.header')

<body>

    <main class="mainBlogBag">
        <section>
            <div class="container-fluid row col-9 justify-content:center">

                <div id="carouselBagsCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselBagsCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselBagsCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselBagsCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselBagsCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active ajCarrusel">
                            <br><br><br>
                            <img src="{{ asset('assets/images/carteraAzulRey2.png') }}" class="rd-block w-50 h-50"
                                alt="Cartera Azul Rey">
                            <div class="carousel-caption d-none d-sm-block">
                                <h5 class="display-6 text-black">Moderna cartera en Cuero Azul</h5>
                                <p class="text-black">Explore our collections, embrace quality craftsmanship, and make a
                                    statement with Markly. Your perfect bag is just a click away.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/carteraCueroVerde.png') }}" class="rd-block w-50 h-50"
                                alt="Cartera Verde"><br><br><br><br><br>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="display-6 text-black">Moderna cartera en Cuero verde</h5>
                                <p class="text-black">Explore our collections, embrace quality craftsmanship, and make a
                                    statement with Markly. Your perfect bag is just a click away.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/carteraCueroBeige.png') }}" class="rd-block w-50 h-50"
                                alt="Cartera Beige"><br><br><br><br><br>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="display-6 text-black">Moderna cartera en Cuero Beige</h5>
                                <p class="text-black">Explore our collections, embrace quality craftsmanship, and make a
                                    statement with Markly. Your perfect bag is just a click away.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/images/carteraCueroNegro.png') }}" class="rd-block w-50 h-50"
                                alt="Cartera Negra"><br><br><br><br><br>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="display-6 text-black">Moderna cartera en Cuero Negro</h5>
                                <p class="text-black">Explore our collections, embrace quality craftsmanship, and make a
                                    statement with Markly. Your perfect bag is just a click away.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev btn-md" type="button" data-bs-target="#carouselBagsCaptions"
                        data-bs-slide="prev">
                        <img src="{{ asset('assets/images/flechaIzquierda.png') }}" alt="Anterior slide">
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselBagsCaptions"
                        data-bs-slide="next">
                        <img src="{{ asset('assets/images/flechaDerecha.png') }}" alt="Siguiente slide">
                    </button>
                </div>
            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

@include('componentes.footer')

</html>