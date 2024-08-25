<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesories - Markly Collections</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

@include('componentes.header')

<body>
    <main class="mainAccesorios">
        <section>
            <div class="container-fluid row col-10 justify-content:center ">

                <div class="card tarjAccesorio" style="width: 18rem;">
                    <img src="{{ asset('assets/images/carteraReflejo.png') }}" class="card-img-top" alt="carteraReflejo">
                    <div class="card-body text-start">
                        <h5 class="card-title">Styling Your Markly Bag for season</h5>
                        <p class="card-text small">Explore the beauty of simplicity and learn how to make a statement
                            with minimalistic styling featuring Markly bags</p><br>
                        <p><strong><a href="home" class="text-black">Read More</a></strong></p>
                    </div>
                </div>

                <div class="card tarjAccesorio" style="width: 18rem;">
                    <img src="{{ asset('assets/images/texturaCartera.png') }}" class="card-img-top" alt="texturaCartera">
                    <div class="card-body text-start">
                        <h5 class="card-title">Must-Have Bags for the Season</h5>
                        <p class="card-text small">Lorem Ipsum has been the industry's standard dummy text ever since
                            the 1500s, when an unknown printer took a galley </p><br>
                        <p><strong><a href="home" class="text-black">Read More</a></strong></p>
                    </div>
                </div>

                <div class="card tarjAccesorio" style="width: 18rem;">
                    <img src="{{ asset('assets/images/carteraManos.png') }}" class="card-img-top" alt="carteraManos">
                    <div class="card-body text-start">
                        <h5 class="card-title">Travel Essentials for Jet-Setters</h5>
                        <p class="card-text small">Embark on a journey with us as we explore travel tips and essential
                            accessories for the modern jet-setter.</p><br>
                        <p><strong><a href="home" class="text-black">Read More</a></strong></p>
                    </div>
                </div>

            </div>
        </section>
        <section class="vidYT">
            <div class="container-fluid row col-9 justify-content:center">
                <iframe width="72%" height="250" src="https://www.youtube.com/embed/9lQwkSbLSUY?si=c1_TBEwN-z_U14aM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
    </main>

</body>

@include('componentes.footer')

</html>