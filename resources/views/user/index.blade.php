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

        <section  id="Inicio">
          <div class="title-div">
            <h1 class="title-text">Bienvenido a Pollos y Parrillas Edualdo y Familia!</h1>
          </div>
          
          <div class="home">
            <div class="home-left">

            <p class="main-heading">Ven y disfruta con toda la familia!</p>

            <p class="home-text">
              Somos Pollos y Parrilas Edualdo y Familia, y nos distinguimos por brindar el Mejor Pollo a la Brasa, Parrillas y Chifas. El éxito esta en el Delicioso Sabor de nuestro platos, lo cual nos ha permitido seguir creciendo y ser la preferencia de miles de clientes.
            </p>

            <div class="btn-group">

                <button class="btn btn-primary btn-icon">
                    <img src="{{ asset('/Assets/img/menu.svg')}}" alt="menu icon">
                    Nuestra Carta
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

        </div></div>
            

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

                <h2 class="section-title">Sobre Nostros</h2>

                <p class="section-text">
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed feugiat nibh, vel tincidunt sem.
                    Pellentesque convallis, leo quis tempus ullamcorper, lorem justo egestas quam, consectetur imperdiet
                    quam metus nec nisi. Maecenas varius faucibus erat, non congue libero. Nullam fringilla ultrices quam id
                    tincidunt. Mauris et tortor varius, congue leo sed, consequat mi. Vivamus vitae urna arcu. Vivamus
                    fringilla dictum consequat. Quisque tristique varius urna ac volutpat. Aenean gravida dolor et mi
                    pulvinar pretium.
                </p>
                <button class="btn btn-secondary btn-icon">
                  <img src="{{ asset('/Assets/img/arrow.svg')}}" alt="menu icon">
                  Conócenos
              </button>
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

                @foreach ($productos as $producto)
                <a href="#">
                    <div class="product-card">
                        <div class="img-box">
                          <img src="{{ $producto->imagen != null ? asset('Assets/img/products/'.$producto->imagen)  : asset('Assets/img/no-pictures.png') }}"
                          class="product-img" loading="lazy"
                          alt="{{ $producto->nombre }}">
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

            <button class="btn btn-primary btn-icon">
                <img src="./Assets/img/menu.svg" alt="menu icon">
                Ver toda la carta
            </button>

        </section>

        <section class="about">
          <div class="section-title">
            <h2>Ubicación:</h2>
            <div class="section-text">
              <a class="direccion-link" href="https://goo.gl/maps/An2Jv9rsgH9b6VqEA" target="_blank" rel="noopener noreferrer">Av. Canta Callao Mz. A. RI Lt. 19 Urb. Virgen del Rosario - SMP</a>
              </div>
          </div>
          <div>
            <iframe src="https://www.google.com/maps/d/embed?mid=12nNOk7khhSzJ_f-y-HqERVY1R5M&ehbc=2E312F" width="100%" height="500"></iframe>
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
