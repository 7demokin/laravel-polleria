<header>
    <nav class="navbar">
        <div class="navbar-wrapper">

            <a href="{{ route('home') }}">
                <img src="{{ asset('Assets/img/' . $logo) }}" alt="logo" height="50">
            </a>

            <ul class="navbar-nav">
                <li>
                    <a href="{{ route('home') }}" class="nav-link">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="nav-link">Nosotros</a>
                </li>
                <li>
                    <a href="{{ route('menu') }}" class="nav-link">Carta</a>
                </li>
                <li>
                    <a href="{{ route('promotions') }}" class="nav-link">Promociones</a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}" class="nav-link">Galeria</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="nav-link">Contacto</a>
                </li>
            </ul>

            <div class="navbar-btn-group">
                <span>
                    @if (@Auth::user() && @Auth::user()->hasRole('cliente'))
                        <div class="dropdown">
                            <button class="dropdown-btn">{{ @Auth::user()->nombre }}<img height="18" src="{{ asset('Assets/img/dropdown-menu.png')}}"/></button>
                            <div class="dropdown-options">
                                <a href="#">Mi cuenta</a>
                                <a href="{{ route('logout') }}">Salir</a>
                            </div>
                        </div>
                        
                    @else
                        <a href="#!" class="nav-link-login cd-login">Ingresar</a>
                        /
                        <a href="#!" class="nav-link-login cd-signup">Registrar</a>
                    @endif

                </span>

                <button class="shopping-cart-btn">
                    <img src="{{ asset('/Assets/img/cart.svg') }}" alt="shopping cart icon" width="18">
                    <span id="total-carrito" class="count">0</span>
                </button>


                <button class="menu-toggle-btn">
                    <span class="line one"></span>
                    <span class="line two"></span>
                    <span class="line three"></span>
                </button>
            </div>
        </div>
    </nav>

    <div class="cart-box">

        <ul class="cart-box-ul">

            <h4 class="cart-h4">Carrito de compras</h4>

            <div id="div-carrito">
                <!--
                <li>
                    <a href="#" class="cart-item">
                        <div class="img-box">
                            <img src="./Assets/img/brasa-pollo-entero-sin-gaseosa-300x300.jpg.webp" alt="product image"
                                class="product-img" width="50" height="50" loading="lazy">
                        </div>
    
                        <h5 class="product-name">Pollo a la Brasa</h5>
                        <p class="product-price">
                            <span class="small">S/</span>59.5
                        </p>
                    </a>
                </li>
    
                <li>
                    <a href="#" class="cart-item">
                        <div class="img-box">
                            <img src="./Assets/img/brasa-medio-pollo-300x300.webp" alt="product image" class="product-img"
                                width="50" height="50" loading="lazy">
                        </div>
    
                        <h5 class="product-name">1/2 Pollo a la Brasa</h5>
                        <p class="product-price">
                            <span class="small">S/</span>37
                        </p>
                    </a>
                </li>
    
                <li>
                    <a href="#" class="cart-item">
                        <div class="img-box">
                            <img src="./Assets/img/brasa-cuarto-de-pollo-300x300.jpg.webp" alt="product image"
                                class="product-img" width="50" height="50" loading="lazy">
                        </div>
    
                        <h5 class="product-name">1/4 Pollo a la Brasa</h5>
                        <p class="product-price">
                            <span class="small">S/</span>20
                        </p>
                    </a>
                </li>
    
                <li>
                    <a href="#" class="cart-item">
                        <div class="img-box">
                            <img src="./Assets/img/parrilla-trio-mix-300x300.jpg.webp" alt="product image"
                                class="product-img" width="50" height="50" loading="lazy">
                        </div>
    
                        <h5 class="product-name">Parrilla Trio Mix</h5>
                        <p class="product-price">
                            <span class="small">S/</span>89.5
                        </p>
                    </a>
                </li>
    
                <li>
                    <a href="#" class="cart-item">
                        <div class="img-box">
                            <img src="./Assets/img/parrilla-para-dos-300x300.jpg.webp" alt="product image"
                                class="product-img" width="50" height="50" loading="lazy">
                        </div>
    
                        <h5 class="product-name">Parrilla para 2</h5>
                        <p class="product-price">
                            <span class="small">S/</span>66.5
                        </p>
                    </a>
                </li>
            -->
            </div>
        </ul>

        <div class="cart-btn-group">
            <a href="{{ route('cart') }}"><button class="btn btn-secondary">Revisar</button></a>
            <a href="{{ route('checkout') }}"><button class="btn btn-primary">Realizar pedido</button></a>
            
        </div>

    </div>

</header>
