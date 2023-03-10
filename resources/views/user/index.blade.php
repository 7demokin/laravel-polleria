@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('scripts')
    <script>
        var swiper = new Swiper(".swiper-carrusel", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            autoplay: {
                delay: 5000,
            },
        });
    </script>
@endsection
@section('content')
    <main>

        <!-- Swiper -->

        <section class="carrusel">
            <div class="swiper swiper-carrusel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('Assets/img/banner/banner1.png') }}" alt="{{ $marca }}"
                            class="swiper-carrusel-image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('Assets/img/banner/banner2.jpeg') }}" alt="{{ $marca }}"
                            class="swiper-carrusel-image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('Assets/img/banner/banner3.jpg') }}" alt="{{ $marca }}"
                            class="swiper-carrusel-image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('Assets/img/banner/banner4.jpeg') }}" alt="{{ $marca }}"
                            class="swiper-carrusel-image">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!--
                                                                                                      - #HOME SECTION
                                                                                                    -->

        <section id="Inicio">
            <div class="title-div">
                <h1 class="title-text">Bienvenido a Pollos y Parrillas Edualdo y Familia!</h1>
            </div>

            <div class="home">
                <div class="home-left">

                    <p class="main-heading">Ven y disfruta con toda la familia!</p>

                    <p class="home-text">
                        Somos Pollos y Parrilas Edualdo y Familia, y nos distinguimos por brindar el Mejor Pollo a la Brasa,
                        Parrillas y Chifas. El ??xito esta en el Delicioso Sabor de nuestro platos, lo cual nos ha permitido
                        seguir creciendo y ser la preferencia de miles de clientes.
                    </p>

                    <div class="btn-group">

                        <a href="{{ route('menu') }}">
                            <button class="btn btn-primary btn-icon">
                                <img src="{{ asset('/Assets/img/menu.svg') }}" alt="carta icon">
                                Nuestra Carta
                            </button>
                        </a>

                        <a href="{{ route('about') }}">
                            <button class="btn btn-secondary btn-icon">
                                <img src="{{ asset('/Assets/img/arrow.svg') }}" alt="flecha icon">
                                Con??cenos
                            </button>
                        </a>

                    </div>

                </div>

                <div class="home-right">

                    <img src="{{ asset('Assets/img/logo.jpeg') }}" alt="{{ $marca }}" class="food-img food-1"
                        width="200" loading="lazy">
                    <img src="{{ asset('Assets/img/circle.svg') }}" class="shape shape-2" width="15">
                    <img src="{{ asset('Assets/img/circle.svg') }}" class="shape shape-3" width="30">
                    <img src="{{ asset('Assets/img/ring.svg') }}" class="shape shape-4" width="60">
                    <img src="{{ asset('Assets/img/ring.svg') }}" class="shape shape-5" width="40">
                    <img src="{{ asset('Assets/img/circle.svg') }}" class="shape shape-1" width="25">

                </div>
            </div>


        </section>





        <!--
                                                                                                      - #ABOUT SECTION
                                                                                                    -->

        <section class="about" id="Nosotros">

            <div class="about-left">

                <div class="img-box">
                    <img src="{{ asset('Assets/img/gallery/img-1.jpeg') }}" alt="{{ $marca }}" class="about-img"
                        width="250">
                </div>
                <!--
                                                                                                        <div class="abs-content-box">
                                                                                                          <div class="dotted-border">
                                                                                                            <p class="number-lg">17</p>
                                                                                                            <p class="text-md">Years <br> Experiense</p>
                                                                                                          </div>
                                                                                                        </div>
                                                                                                -->

                <img src="{{ asset('Assets/img/circle.svg') }}"class="shape shape-6" width="20">
                <img src="{{ asset('Assets/img/circle.svg') }}"class="shape shape-7" width="30">
                <img src="{{ asset('Assets/img/ring.svg') }}" alt="ring shape" class="shape shape-8" width="35">
                <img src="{{ asset('Assets/img/ring.svg') }}" alt="ring shape" class="shape shape-9" width="80">

            </div>

            <div class="about-right">

                <h2 class="section-title">Sobre Nostros</h2>

                <p class="section-text">
                    Somos Pollos y Parrilas Edualdo y Familia, y nos distinguimos por brindar el Mejor Pollo a la Brasa,
                    Parrillas y Chifas. El ??xito esta en el Delicioso Sabor de nuestro platos, lo cual nos ha permitido
                    seguir creciendo y ser la preferencia de miles de clientes.
                </p>

                <div class="btn-group">
                    <a href="{{ route('about') }}">
                        <button class="btn btn-primary btn-icon">
                            <img src="{{ asset('Assets/img/arrow.svg') }}" alt="flecha icon">
                            Con??cenos
                        </button>
                    </a>
                    <a href="{{ route('gallery') }}">
                        <button class="btn btn-secondary btn-icon">
                            <img src="{{ asset('Assets/img/gallery.png') }}" height="26" alt="galeria icon">
                            Galeria
                        </button>
                    </a>

                </div>
                <!--
                                                                                                        <img src="./Assets/img/signature.png" alt="signature" class="signature" width="150">
                                                                                                -->
            </div>

        </section>





        <!--
                                                                                                      - #SERVICES SECTION
                                                                                                    -->
        <!--
                                                                                                    <section class="services" id="services">

                                                                                                      <div class="service-card">

                                                                                                        <p class="card-number">01</p>

                                                                                                        <h3 class="card-heading">We are located in the city center</h3>

                                                                                                        <p class="card-text">
                                                                                                          Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                                                                                                        </p>

                                                                                                      </div>

                                                                                                      <div class="service-card">

                                                                                                        <p class="card-number">02</p>

                                                                                                        <h3 class="card-heading">Fresh ingredients from organic farms</h3>

                                                                                                        <p class="card-text">
                                                                                                          Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                                                                                                        </p>

                                                                                                      </div>

                                                                                                      <div class="service-card">

                                                                                                        <p class="card-number">03</p>

                                                                                                        <h3 class="card-heading">Own fast delivery. 30 min Maximum</h3>

                                                                                                        <p class="card-text">
                                                                                                          Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                                                                                                        </p>

                                                                                                      </div>

                                                                                                      <div class="service-card">

                                                                                                        <p class="card-number">04</p>

                                                                                                        <h3 class="card-heading">Professional, experienced chefs</h3>

                                                                                                        <p class="card-text">
                                                                                                          Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                                                                                                        </p>

                                                                                                      </div>

                                                                                                      <div class="service-card">

                                                                                                        <p class="card-number">05</p>

                                                                                                        <h3 class="card-heading">The highest standards of service</h3>

                                                                                                        <p class="card-text">
                                                                                                          Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.
                                                                                                        </p>

                                                                                                      </div>

                                                                                                    </section>
                                                                                                -->




        <!--
                                                                                                      - #PRODUCT SECTION
                                                                                                    -->

        <section class="product" id="Carta">

            <h2 class="section-title">Platillos m??s populares</h2>

            <p class="section-text">
                NADA MEJOR QUE DISFRUTAR COMPARTIENDO POLLOS A LA BRASA Y PARRILLAS CON MUCHO SABOR
            </p>

            <div class="products-grid">

                @foreach ($productos as $producto)
                    <a href="#">
                        <div class="product-card">
                            <div class="img-box">
                                <img src="{{ $producto->imagen != null ? asset('Assets/img/products/' . $producto->imagen) : asset('Assets/img/no-pictures.png') }}"
                                    class="product-img" loading="lazy" alt="{{ $producto->nombre }}">
                            </div>
                            <div class="product-content">
                                <div class="wrapper">
                                    <h3 class="product-name">{{ $producto->categoria->nombre }}</h3>
                                    <p class="product-price">
                                        <span class="small">S/</span>{{ $producto->precio }}
                                    </p>
                                </div>
                                <p class="product-text">
                                    {{ $producto->nombre }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach




            </div>
            <div class="btn-group-center">
                <a href="{{ route('menu') }}">
                    <button class="btn btn-primary btn-icon">
                        <img src="{{ asset('Assets/img/menu.svg') }}" alt="menu icon">
                        Ver toda la carta
                    </button>
                </a>
                <a href="{{ route('promotions') }}">
                    <button class="btn btn-secondary btn-icon">
                        <img src="{{ asset('Assets/img/discount.png') }}" height="26" alt="descuento icon">
                        Ver Promociones
                    </button>
                </a>
            </div>


        </section>

        <section>
            <div class="about">
                <div class="section-title">
                    <h2>Ubicaci??n:</h2>
                    <div class="section-text">
                        <a class="direccion-link" href="https://goo.gl/maps/98rR9n4cdLpVE5yW9" target="_blank"
                            rel="noopener noreferrer">Av. Canta Callao Mz. A. RI Lt. 19 Urb. Virgen del Rosario - SMP</a>
                    </div>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d975.737886763336!2d-77.09450430203026!3d-11.977854638038103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d-11.9778548!2d-77.09401129999999!5e0!3m2!1ses!2spe!4v1669923550551!5m2!1ses!2spe"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="align-items-center pt-50">
                <a href="https://web.facebook.com/people/Pollos-y-Parrilas-Edualdo-y-Familia/100088419427118/" target="_blank">
                    <div class="vertical-card">
                        <div class="img-box">
                            <img src="{{ asset('Assets/img/facebook.png') }}" class="filter-invert" loading="lazy">
                        </div>
                        <p class="text text-center">
                            Facebook
                        </p>
                    </div>
                </a>
                <a href="https://web.facebook.com/people/Pollos-y-Parrilas-Edualdo-y-Familia/100088419427118/" target="_blank">
                    <div class="vertical-card">
                        <div class="img-box">
                            <img src="{{ asset('Assets/img/tiktok.png') }}" class="filter-invert" loading="lazy">
                        </div>
                        <p class="text text-center">
                            Tiktok
                        </p>
                    </div>
                </a>
                
            </div>
    
            <div class="align-items-center pb-50">
                
                <a href="tel:+51016934157" target="_blank">
                    <div class="vertical-card">
                        <div class="img-box">
                            <img src="{{ asset('Assets/img/phone.png') }}" class="filter-invert" loading="lazy">
                        </div>
                        <p class="text text-center">
                            (01) 693 4157
                        </p>
                    </div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=51928307609" target="_blank">
                    <div class="vertical-card">
                        <div class="img-box">
                            <img src="{{ asset('Assets/img/whatsapp.png') }}" class="filter-invert" loading="lazy">
                        </div>
                        <p class="text text-center">
                            928 307 609
                        </p>
                    </div>
                </a>
    
                <a href="https://api.whatsapp.com/send?phone=51921700282" target="_blank">
                    <div class="vertical-card">
                        <div class="img-box">
                            <img src="{{ asset('Assets/img/whatsapp.png') }}" class="filter-invert" loading="lazy">
                        </div>
                        <p class="text text-center">
                            921 700 282
                        </p>
                    </div>
                </a>
            </div>
        </section>





        <!--
                                                                                                      - #TESTIMONIALS SECTION
                                                                                                    -->
        <!--
                                                                                                    <section class="testimonials" id="testimonials">

                                                                                                      <h2 class="section-title">What our customers say?</h2>

                                                                                                      <p class="section-text">
                                                                                                        Consectetur numquam poro nemo veniam
                                                                                                        eligendi rem adipisci quo modi.
                                                                                                      </p>

                                                                                                      <div class="testimonials-grid">

                                                                                                        <div class="testimonials-card">

                                                                                                          <h4 class="card-title">Very tasty</h4>

                                                                                                          <div class="testimonials-rating">
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                          </div>

                                                                                                          <p class="testimonials-text">
                                                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi
                                                                                                            inventore possimus
                                                                                                            laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                                                                                                            tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam
                                                                                                            labore,
                                                                                                            aliquam dolor harum!
                                                                                                          </p>

                                                                                                          <div class="customer-info">
                                                                                                            <div class="customer-img-box">
                                                                                                              <img src="./Assets/img/testimonials1.jpg" alt="customer image" class="customer-img" width="100"
                                                                                                                loading="lazy">
                                                                                                            </div>

                                                                                                            <h5 class="customer-name">Emma Newman</h5>
                                                                                                          </div>

                                                                                                        </div>

                                                                                                        <div class="testimonials-card">

                                                                                                          <h4 class="card-title">I have lunch here every day</h4>

                                                                                                          <div class="testimonials-rating">
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                            <ion-icon name="star"></ion-icon>
                                                                                                          </div>

                                                                                                          <p class="testimonials-text">
                                                                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi
                                                                                                            inventore possimus
                                                                                                            laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                                                                                                            tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam
                                                                                                            labore,
                                                                                                            aliquam dolor harum!
                                                                                                          </p>

                                                                                                          <div class="customer-info">
                                                                                                            <div class="customer-img-box">
                                                                                                              <img src="./Assets/img/testimonials2.jpg" alt="customer image" class="customer-img" width="100"
                                                                                                                loading="lazy">
                                                                                                            </div>

                                                                                                            <h5 class="customer-name">Paul Trueman</h5>
                                                                                                          </div>

                                                                                                        </div>

                                                                                                      </div>

                                                                                                    </section>
                                                                                                -->
    </main>
@endsection
