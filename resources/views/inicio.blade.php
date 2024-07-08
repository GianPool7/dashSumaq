{{-- <?php // include_once("templates/navegacion.php")?> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Iconos Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Librerias Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Bootstrap  -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo de plantilla  -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/Search_navbar.css" rel="stylesheet">
    <title>Sumaq Choque</title>
</head>
<body>
    <!-- Hero Inicio -->
     <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <!-- <h4 class="mb-3 text-secondary">(PRODUCTO)</h4> -->
                    <h1 class="mb-5 display-3" style="color: #30657B;">Sumaq Choque</h1>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill">
                        <button type="submit" class="btn  border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style=" background-color: #30657B; top: 0; right: 25%;">Buscar</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="img/hero-img-1.png" class="img-fluid w-100 h-100 bg-dark rounded" alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Frutas</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="img/hero-img-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Vegetales</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev btn-dark" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next btn-dark" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden ">Siguiente</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
     </div>

    <!-- Hero Fin -->

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
    <!-- Cambiar los nombres del div a (Products) -->
     <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1 class="me-2" style="color: #30657B;">Nuestro descuentos</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 150px;">Todos</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 130px;">Abarrotes</span>
                                    </a>
                                </li>
                            </li>

                            <li class="nav-item">
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 150px;">Bebidas/Alcohol</span>
                                    </a>
                                </li>
                            </li>

                            <li class="nav-item">
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                        <span class="text-dark" style="width: 150px;">Lacteos</span>
                                    </a>
                                </li>
                            </li>

                            <li class="nav-item">
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                        <span class="text-dark" style="width: 150px;">Dulces</span>
                                    </a>
                                </li>
                            </li>

                            <li class="nav-item">
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                        <span class="text-dark" style="width: 150px;">Hingiene</span>
                                    </a>
                                </li>
                            </li>

                            <li class="nav-item">
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                        <span class="text-dark" style="width: 150px;">Automedicacion</span>
                                    </a>
                                </li>
                            </li>
<!--  -->
                            <!-- <li class="nav-item">
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                        <span class="text-dark" style="width: 150px;">Domestico</span>
                                    </a>
                                </li>
                            </li> -->

                            <li class="nav-item">
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-6">
                                        <span class="text-dark" style="width: 150px;">Limpíeza</span>
                                    </a>
                                </li>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Uvas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 4.11</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Uvas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 4.11</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Frambuesas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 4.11</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Albaricoque</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 4.11</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Banana</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 3.99</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Naranja</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 3.99</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Frambuesas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 4.11</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Uvas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 4.11</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--Fin del tab 1 -->

                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Uvas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 4.11</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div><br>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Frambuesas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-danger text-decoration-line-through fs-5 mb-0" style="left: 100px; height: 35px;">S/ 4.11</p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 3.00</p>
                                                </div>
                                                <br><a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--Fin del tab 2-->

                </div> <!--  Fin del tab content -->
            </div>
        </div>
     </div>

    <!-- Productos en descuento Fin-->

    <!-- Vista de catalogos Inicio-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h1 class="mb-0" style="color: #30657B;">Catalogos Disponibles</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                <div class="border border-secondary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/prueba.jpeg" class="img-fluid w-100 rounded-top" alt="" >
                    </div>
                    <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; right: 10px;">Comestibles</div>
                    <div class="p-4 rounded-bottom">
                        <h4>Catalogo de Verduras</h4>
                        <a style="color: #022230;" href="shop.html">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</a>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <!-- <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                        </div>
                    </div>
                </div>

                <div class="border border-secondary rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/prueba2.jpeg" class="img-fluid w-100 rounded-top" alt="" >
                    </div>
                    <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; right: 10px;">Abarrotes</div>
                    <div class="p-4 rounded-bottom">
                        <h4>Catalogo de Abarrotes</h4>
                        <a style="color: #022230;" href="shop.html">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</a>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <!-- <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <footer>
        {{-- <?php //include_once("templates/piepagina.php")?> --}}
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/5e5c568579.js" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/search_navbar.js"></script>
</body>
</html>
