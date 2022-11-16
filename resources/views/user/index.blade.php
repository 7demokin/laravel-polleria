@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('scripts')
    <script>
        var swiper = new Swiper(".swiper-carrusel", {
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                loop: true,
            },
            autoplay: {
                delay: 5000,
            },
        });
    </script>
@endsection
@section('content')
    <main>


        <section class="carrusel">
            <!-- Swiper -->
            <div class="swiper swiper-carrusel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('Assets/img/banner/banner1.jpg') }}" alt="{{ $marca }}"
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
                        <img src="{{ asset('Assets/img/banner/banner4.jpg') }}" alt="{{ $marca }}"
                            class="swiper-carrusel-image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('Assets/img/banner/banner5.jpg') }}" alt="{{ $marca }}"
                            class="swiper-carrusel-image">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('Assets/img/banner/banner6.jpeg') }}" alt="{{ $marca }}"
                            class="swiper-carrusel-image">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!--
                                                  - #HOME SECTION
                                                -->

        <section class="home" id="Inicio">

            <div class="home-left">

                <p class="home-subtext">Bienvenido a Pollos y Parrillas Edualdo y Familia!</p>

                <h1 class="main-heading">Ven y disfruta con toda la familia!</h1>

                <p class="home-text">
                    Echa un vistazo a los contundentes pollos a la brasa, parrillas, piqueos, platos a la carta, menús,
                    guarniciones y refrescantes bebidas para acompañar. Haz tu pedido para disfrutar el sabor de siempre a
                    un simple clic.
                </p>

                <div class="btn-group">

                    <button class="btn btn-primary btn-icon">
                        <img src="{{ asset('/Assets/img/menu.svg')}}" alt="menu icon">
                        Nuestro Menu
                    </button>

                    <button class="btn btn-secondary btn-icon">
                        <img src="{{ asset('/Assets/img/arrow.svg')}}" alt="menu icon">
                        Conócenos
                    </button>

                </div>

            </div>

            <div class="home-right">

                <img src="{{ asset('Assets/img/logo.jpeg') }}" alt="food image" class="food-img food-1" width="200"
                    loading="lazy">
                <img src="./Assets/img/circle.svg" alt="circle shape" class="shape shape-1" width="25">
                <img src="./Assets/img/circle.svg" alt="circle shape" class="shape shape-2" width="15">
                <img src="./Assets/img/circle.svg" alt="circle shape" class="shape shape-3" width="30">
                <img src="./Assets/img/ring.svg" alt="ring shape" class="shape shape-4" width="60">
                <img src="./Assets/img/ring.svg" alt="ring shape" class="shape shape-5" width="40">

            </div>

        </section>





        <!--
                                                  - #ABOUT SECTION
                                                -->

        <section class="about" id="Nosotros">

            <div class="about-left">

                <div class="img-box">
                    <img src="{{ asset('Assets/img/gallery/img-1.jpeg')}}" alt="about image" class="about-img" width="250">
                </div>
                <!--
                                                    <div class="abs-content-box">
                                                      <div class="dotted-border">
                                                        <p class="number-lg">17</p>
                                                        <p class="text-md">Years <br> Experiense</p>
                                                      </div>
                                                    </div>
                                            -->

                <img src="./Assets/img/circle.svg" alt="circle shape" class="shape shape-6" width="20">
                <img src="./Assets/img/circle.svg" alt="circle shape" class="shape shape-7" width="30">
                <img src="./Assets/img/ring.svg" alt="ring shape" class="shape shape-8" width="35">
                <img src="./Assets/img/ring.svg" alt="ring shape" class="shape shape-9" width="80">

            </div>

            <div class="about-right">

                <h2 class="section-title">Lorem Ipsum</h2>

                <p class="section-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed feugiat nibh, vel tincidunt sem.
                    Pellentesque convallis, leo quis tempus ullamcorper, lorem justo egestas quam, consectetur imperdiet
                    quam metus nec nisi. Maecenas varius faucibus erat, non congue libero. Nullam fringilla ultrices quam id
                    tincidunt. Mauris et tortor varius, congue leo sed, consequat mi. Vivamus vitae urna arcu. Vivamus
                    fringilla dictum consequat. Quisque tristique varius urna ac volutpat. Aenean gravida dolor et mi
                    pulvinar pretium.
                </p>

                <p class="section-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed feugiat nibh, vel tincidunt sem.
                    Pellentesque convallis, leo quis tempus ullamcorper, lorem justo egestas quam, consectetur imperdiet
                    quam metus nec nisi.
                </p>
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

            <h2 class="section-title">Platillos más populares</h2>

            <p class="section-text">
                NADA MEJOR QUE DISFRUTAR COMPARTIENDO POLLOS A LA BRASA Y PARRILLAS CON MUCHO SABOR
            </p>

            <div class="products-grid">

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="./Assets/img/brasa-pollo-entero-sin-gaseosa-300x300.jpg.webp" alt="product image"
                                class="product-img" width="200" loading="lazy">
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Pollo a la Brasa</h3>

                                <p class="product-price">
                                    <span class="small">S/</span>59.5
                                </p>
                            </div>

                            <p class="product-text">
                                01 Pollo a la brasa, Papas fritas y Ensalada
                            </p>
                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="./Assets/img/brasa-medio-pollo-300x300.webp" alt="product image"
                                class="product-img" width="200" loading="lazy">
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">1/2 Pollo a la Brasa</h3>

                                <p class="product-price">
                                    <span class="small">S/</span>37
                                </p>
                            </div>

                            <p class="product-text">
                                1/2 Pollo a la brasa, Papas fritas y Ensalada
                            </p>

                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="./Assets/img/brasa-cuarto-de-pollo-300x300.jpg.webp" alt="product image"
                                class="product-img" width="200" loading="lazy">
                            <!--
                                                          <div class="card-badge green">
                                                            <ion-icon name="leaf"></ion-icon>
                                                            <p>Vegan</p>
                                                          </div>
                                            -->
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">1/4 Pollo a la Brasa</h3>

                                <p class="product-price">
                                    <span class="small">S/</span>20
                                </p>
                            </div>

                            <p class="product-text">
                                1/4 Pollo a la brasa, Papas fritas y Ensalada
                            </p>

                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="./Assets/img/parrilla-trio-mix-300x300.jpg.webp" alt="product image"
                                class="product-img" width="200" loading="lazy">
                            <!--
                                                          <div class="card-badge red">
                                                            <ion-icon name="flame"></ion-icon>
                                                            <p>Hot</p>
                                                          </div>
                                            -->
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Parrilla Trio Mix</h3>

                                <p class="product-price">
                                    <span class="small">S/</span>89.5
                                </p>
                            </div>

                            <p class="product-text">
                                03 Anticuchos de corazón, 03 Brochetas de pollo, 01 Chorizo parrillero, 01 Bife, ¼ Pollo a
                                la Brasa, ¼ Pollo a la, Parrilla, Papas fritas y Ensalada
                            </p>

                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="./Assets/img/parrilla-para-dos-300x300.jpg.webp" alt="product image"
                                class="product-img" width="200" loading="lazy">
                            <!--
                                                          <div class="card-badge green">
                                                            <ion-icon name="leaf"></ion-icon>
                                                            <p>Vegan</p>
                                                          </div>
                                            -->
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Parrilla para 2</h3>

                                <p class="product-price">
                                    <span class="small">S/</span>66.5
                                </p>
                            </div>

                            <p class="product-text">
                                02 Brochetas de pollo, 02 Anticuchos de corazón, Chuleta de cerdo, ¼ Pollo a la parrilla y ¼
                                Pollo a la brasa
                            </p>


                        </div>

                    </div>

                </a>

                <a href="#">

                    <div class="product-card">

                        <div class="img-box">
                            <img src="./Assets/img/parrilla-clasica-familiar-300x300.jpg.webp" alt="product image"
                                class="product-img" width="200" loading="lazy">
                        </div>

                        <div class="product-content">

                            <div class="wrapper">
                                <h3 class="product-name">Parrilla Clásica Familiar</h3>

                                <p class="product-price">
                                    <span class="small">S/</span>100.5
                                </p>
                            </div>

                            <p class="product-text">
                                01 Chuleta con bife, ¼ Pollo a la Parrilla, ¼ Pollo a la Brasa, 02 Chorizos parrilleros, 02
                                Anticuchos de corazón, Papas fritas y Ensalada
                            </p>


                        </div>

                    </div>

                </a>

            </div>

            <button class="btn btn-primary btn-icon">
                <img src="./Assets/img/menu.svg" alt="menu icon">
                Ver toda la carta
            </button>

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
