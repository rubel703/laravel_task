<!doctype html>
<html lang="en" class="light-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS files -->
    <link href="{{ asset('/') }}frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/assets/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}frontend/assets/plugins/slick/slick-theme.css" />

    <link href="{{ asset('/') }}frontend/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}frontend/assets/css/dark-theme.css" rel="stylesheet">

    <title>Laravel Task</title>
</head>

<body>


    <!--page loader-->
    <div class="loader-wrapper">
        <div
            class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
            <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <!--end loader-->

    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand-xl w-100 navbar-dark container gap-3">
            <a class="mobile-menu-btn d-inline d-xl-none" href="javascript:;" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar">
                <i class="bi bi-list"></i>
            </a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-body primary-menu">
                    <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="tv-shows.html"
                                data-bs-toggle="dropdown">
                                Categories
                            </a>
                            <div class="dropdown-menu dropdown-large-menu">
                                <div class="row">
                                    <div class="col-12 col-xl-4">
                                        <ul class="list-unstyled">
                                            @foreach ($categories as $category)
                                                <li><a href="{{ route('home') }}">{{ $category->category_name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--end top header-->


    <!--start page content-->
    <div class="page-content">

        <!--start carousel-->
        <section class="slider-section">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></button>
                </div>

            </div>
        </section>
        <!--end carousel-->


        <!--start Featured Products slider-->
        <section class="section-padding">
            <div class="container">
                <div class="text-center pb-3">
                    <h3 class="mb-0 h3 fw-bold">Products</h3>
                </div>
                <div class="product-thumbs">
                    @foreach ($products as $product)
                        <div class="card">
                            <div class="position-relative overflow-hidden">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset($product->image) }}" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="product-info text-center">
                                    <h6 class="mb-1 fw-bold product-name">{{ $product->name }}</h6>
                                    <div class="ratings mb-1 h6">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <p class="mb-0 h6 fw-bold product-price">TK.{{ $product->price }}</p>
                                    {{-- <h6 class="mb-1 fw-bold product-name">Available Product:{{$product->quantity}}</h6> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--end Featured Products slider-->



        <!--start features-->
        <section class="product-thumb-slider section-padding">
            <div class="container">
                <div class="text-center pb-3">
                    <h3 class="mb-0 h3 fw-bold">What We Offer!</h3>
                    <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 g-4">
                    <div class="col d-flex">
                        <div class="card depth border-0 rounded-0 border-bottom border-primary border-3 w-100">
                            <div class="card-body text-center">
                                <div class="h1 fw-bold my-2 text-primary">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h5 class="fw-bold">Free Delivery</h5>
                                <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain
                                    pain of itself.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card depth border-0 rounded-0 border-bottom border-danger border-3 w-100">
                            <div class="card-body text-center">
                                <div class="h1 fw-bold my-2 text-danger">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <h5 class="fw-bold">Secure Payment</h5>
                                <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain
                                    pain of itself.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card depth border-0 rounded-0 border-bottom border-success border-3 w-100">
                            <div class="card-body text-center">
                                <div class="h1 fw-bold my-2 text-success">
                                    <i class="bi bi-minecart-loaded"></i>
                                </div>
                                <h5 class="fw-bold">Free Returns</h5>
                                <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain
                                    pain of itself.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="card depth border-0 rounded-0 border-bottom border-warning border-3 w-100">
                            <div class="card-body text-center">
                                <div class="h1 fw-bold my-2 text-warning">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h5 class="fw-bold">24/7 Support</h5>
                                <p class="mb-0">Nor again is there anyone who loves or pursues or desires to obtain
                                    pain of itself.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--end features-->


        <!--subscribe banner-->
        <section class="product-thumb-slider subscribe-banner p-5">
            <div class="row">
                <div class="col-12 col-lg-6 mx-auto">
                    <div class="text-center">
                        <h3 class="mb-0 fw-bold text-white">Get Latest Update by <br> Subscribe Our Newslater</h3>
                        <div class="mt-3">
                            <input type="text"
                                class="form-control form-control-lg bubscribe-control rounded-0 px-5 py-3"
                                placeholder="Enter your email">
                        </div>
                        <div class="mt-3 d-grid">
                            <button type="button"
                                class="btn btn-lg btn-ecomm bubscribe-button px-5 py-3">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--subscribe banner-->


    </div>
    <!--end page content-->

    <footer class="footer-strip text-center py-3 bg-section-2 border-top positon-absolute bottom-0">
        <p class="mb-0 text-muted">© 2024 dev.rubel | All rights reserved.</p>
    </footer>


    <!--start cart-->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header bg-section-2">
            <h5 class="mb-0 fw-bold" id="offcanvasRightLabel">8 items in the cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="cart-list">

                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/01.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/02.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/03.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/04.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/05.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/06.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/07.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/08.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/09.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center gap-3">
                    <div class="bottom-product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('/') }}frontend/assets/images/new-arrival/10.webp" width="60"
                                alt="">
                        </a>
                    </div>
                    <div class="">
                        <h6 class="mb-0 fw-light mb-1">Product Name</h6>
                        <p class="mb-0"><strong>1 X $59.00</strong>
                        </p>
                    </div>
                    <div class="ms-auto fs-5">
                        <a href="javascript:" class="link-dark"><i class="bi bi-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer p-3 border-top">
            <div class="d-grid">
                <button type="button" class="btn btn-lg btn-dark btn-ecomm px-5 py-3">Checkout</button>
            </div>
        </div>

    </div>
    <!--end cat-->


    <!--start quick view-->

    <!-- Modal -->
    <div class="modal fade" id="QuickViewModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-0">

                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12 col-xl-6">

                            <div class="wrap-modal-slider">

                                <div class="slider-for">
                                    <div>
                                        <img src="{{ asset('/') }}frontend/assets/images/product-images/01.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('/') }}frontend/assets/images/product-images/02.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('/') }}frontend/assets/images/product-images/03.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('/') }}frontend/assets/images/product-images/04.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div class="slider-nav mt-3">
                                    <div>
                                        <img src="{{ asset('/') }}frontend/assets/images/product-images/01.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('/') }}frontend/assets/images/product-images/02.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('/') }}frontend/assets/images/product-images/03.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div>
                                        <img src="{{ asset('/') }}frontend/assets/images/product-images/04.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="product-info">
                                <h4 class="product-title fw-bold mb-1">Check Pink Kurta</h4>
                                <p class="mb-0">Women Pink & Off-White Printed Kurta with Palazzos</p>
                                <div class="product-rating">
                                    <div class="hstack gap-2 border p-1 mt-3 width-content">
                                        <div><span class="rating-number">4.8</span><i
                                                class="bi bi-star-fill ms-1 text-success"></i></div>
                                        <div class="vr"></div>
                                        <div>162 Ratings</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="product-price d-flex align-items-center gap-3">
                                    <div class="h4 fw-bold">$458</div>
                                    <div class="h5 fw-light text-muted text-decoration-line-through">$2089</div>
                                    <div class="h4 fw-bold text-danger">(70% off)</div>
                                </div>
                                <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>

                                <div class="more-colors mt-3">
                                    <h6 class="fw-bold mb-3">More Colors</h6>
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <div class="color-box bg-red"></div>
                                        <div class="color-box bg-primary"></div>
                                        <div class="color-box bg-yellow"></div>
                                        <div class="color-box bg-purple"></div>
                                        <div class="color-box bg-green"></div>
                                    </div>
                                </div>

                                <div class="size-chart mt-3">
                                    <h6 class="fw-bold mb-3">Select Size</h6>
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <div class="">
                                            <button type="button" class="rounded-0">XS</button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="rounded-0">S</button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="rounded-0">M</button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="rounded-0">L</button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="rounded-0">XL</button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="rounded-0">XXL</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-buttons mt-3">
                                    <div class="buttons d-flex flex-column gap-3 mt-4">
                                        <a href="javascript:;"
                                            class="btn btn-lg btn-dark btn-ecomm px-5 py-3 flex-grow-1"><i
                                                class="bi bi-basket2 me-2"></i>Add to Bag</a>
                                        <a href="javascript:;"
                                            class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i
                                                class="bi bi-suit-heart me-2"></i>Wishlist</a>
                                    </div>
                                </div>
                                <hr class="my-3">
                                <div class="product-share">
                                    <h6 class="fw-bold mb-3">Share This Product</h6>
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <div class="">
                                            <button type="button" class="btn-social bg-twitter"><i
                                                    class="bi bi-twitter"></i></button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="btn-social bg-facebook"><i
                                                    class="bi bi-facebook"></i></button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="btn-social bg-linkden"><i
                                                    class="bi bi-linkedin"></i></button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="btn-social bg-youtube"><i
                                                    class="bi bi-youtube"></i></button>
                                        </div>
                                        <div class="">
                                            <button type="button" class="btn-social bg-pinterest"><i
                                                    class="bi bi-pinterest"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>

            </div>
        </div>
    </div>
    <!--end quick view-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!--End Back To Top Button-->


    <!-- JavaScript files -->
    <script src="{{ asset('/') }}frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/plugins/slick/slick.min.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/main.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/index.js"></script>
    <script src="{{ asset('/') }}frontend/assets/js/loader.js"></script>

</body>

</html>
