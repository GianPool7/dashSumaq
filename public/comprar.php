<?php include_once("templates/navegacion.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo de plantilla  -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/Search_navbar.css" rel="stylesheet">
    <title>Sumaq Choque</title>
</head>
<body>

    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Productos</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Shop</li> -->
        </ol>
    </div>    

    <!-- Inicio de Busqueda en la tienda -->
     <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4" style="color: #30657B;">Mercado</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4"> 
                        <div class="col-xl-3">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="Buscar" aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-xl-3">
                            <div class="bg-light px-3 py-3 rounded d-flex justify-content-between mb-4">
                                <label for="fruits">Clasificacion</label>
                                <select name="fruitlist" id="fruits" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                    <option value="nada">Nada</option>
                                    <option value="popular">Populares</option>
                                    <option value="descuento">Bajo precio</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Categorias -->
                     <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4 style="color: #30657B;">Categorias</h4>
                                        <ul class="list-unstyled fruite-categorie">
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#cat-1" data-bs-toggle="pill"><i class="fa-solid fa-bag-shopping me-2"></i>Todos</a>
                                                    <span>(3)</span>
                                                </div>
                                            </li>

                                            <!-- <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#cat-1" data-bs-toggle="pill"><i class="fa-solid fa-bag-shopping me-2"></i>Abarrotes</a>
                                                    <span>(3)</span>
                                                </div>
                                            </li> -->

                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fa-solid fa-bag-shopping me-2"></i>Bebidas/Alcohol</a>
                                                    <span>(5)</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fa-solid fa-bag-shopping me-2"></i>Lacteos</a>
                                                    <span>(12)</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fa-solid fa-bag-shopping me-2"></i>Dulces</a>
                                                    <span>(10)</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fa-solid fa-bag-shopping me-2"></i>Hingiene</a>
                                                    <span>(2)</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fa-solid fa-bag-shopping me-2"></i>Automedicacion</a>
                                                    <span>(6)</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fa-solid fa-bag-shopping me-2"></i>Limpieza</a> 
                                                    <span>(3)</span>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4 class="mb-2">Price</h4>
                                            <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">
                                            <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0</output>
                                        </div>
                                    </div> -->
                                    <hr>
                                    <div class="col-lg-12">
                                        <div class="mv-3">
                                            <h4>Adicionales</h4>
                                            <div class="mv-2">
                                                <input type="radio" class="me-2" id="categoria-1" name="categoria-1" value="Beverages">
                                                <label for="categoria-1">Ofertas</label>
                                            </div>
                                            <div class="mv-2">
                                                <input type="radio" class="me-2" id="categoria-2" name="categoria-1" value="Beverages">
                                                <label for="categoria-2">Descuentos</label>
                                            </div>
                                        </div>
                                    </div>  
                                    <hr>
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                            <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                                <h3 class="text-secondary fw-bold">Propaganda <br> de <br> prueba</h3>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                            <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                                <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                            </div>
                                        </div>
                                    </div>  
                                 </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Uvas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Uvas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Frambuesas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Albaricoques</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Banana</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Naranjas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Frambuesas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Uvas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white px-3 py-1 rounded position-absolute" style="background-color: #30657B; top: 10px; left: 10px;">Frutas</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4>Frambuesas</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">S/ 4.99</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Añadir</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="pagination d-flex justify-content-center mt-5">
                                            <a href="#" class="rounded">&laquo;</a>
                                            <a href="#" class="active rounded">1</a>
                                            <a href="#" class="rounded">2</a>
                                            <a href="#" class="rounded">3</a>
                                            <a href="#" class="rounded">4</a>
                                            <a href="#" class="rounded">5</a>
                                            <a href="#" class="rounded">6</a>
                                            <a href="#" class="rounded">&raquo;</a>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    

    <footer>
        <?php include_once("templates/piepagina.php")?>
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