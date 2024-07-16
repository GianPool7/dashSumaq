@include('home.header')

<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<body>

    @include('home.cards')

    <!-- Seccion de caracteristicas inicio -->
     <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle mb-5 mx-auto" style="background-color: #30657B;">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Delivery</h5>
                            <p class="mb-0">Gratis a partir de S/300</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle mb-5 mx-auto" style="background-color: #30657B;">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Seguridad de Pagos</h5>
                            <p class="mb-0">100% seguridad</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle mb-5 mx-auto" style="background-color: #30657B;">
                            <i class="fa-solid fa-money-bill-1-wave fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Calidad y Precio</h5>
                            <p class="mb-0">Ahorra y disfruta </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle mb-5 mx-auto" style="background-color: #30657B;">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Soporte 24/7</h5>
                            <p class="mb-0">Atencion todo el dia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

    <!-- Seccion de caracteristicas Fin -->



    <!-- Productos en descuento inicio-->

    @include('home.productos')

     @include('home.catalogo')

    <!-- Vista de catalogos Fin-->


    <!-- Estandarte Inicio-->
     <div class="container-fluid banner bg-secondary my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-white">Fruta exotica </h1>
                        <p class="fw-normal display-3 text-dark mb-4">¡Solicitalo ya!</p>
                        <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                        <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Comprar</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/baner-1.png" class="img-fluid w-100 rounded" alt="">
                        <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                            <h1 style="font-size: 100px;">1</h1>
                            <div class="d-flex flex-column">
                                <span class="h2" style="height: 60px;">50</span>
                                <!-- <span class="h4 text-muted mb-0">kg</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- Estandarte Fin-->

     @include('home.footer')

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('https://kit.fontawesome.com/5e5c568579.js')}}" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/search_navbar.js')}}"></script>
</body>
</html>
