@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('styles')
    <style>
        /* Carta */
        /* Style the tab */
        .carta .tab {
            overflow: hidden;
            margin-bottom: 25px;
        }

        /* Style the buttons that are used to open the tab content */
        .carta .tab button {
            background-color: var(--saffron);
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            margin: 5px;
        }

        /* Change background color of buttons on hover */
        .carta .tab button:hover {
          background-color: var(--saffron-ligth);
        }

        /* Create an active/current tablink class */
        .carta .tab button.active {
          background-color: var(--saffron-dark);
        }

        /* Style the tab content */
        .carta .tabcontent {
            display: none;
            padding: 6px 12px;
            /*border: 1px solid #ccc;*/
            border-top: none;
            color: white;
        }

        .carta .tabcontent {
            animation: fadeEffect 1s;
            /* Fading effect takes 1 second */
        }

        /* Go from zero to full opacity */
        @keyframes fadeEffect {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
@endsection
@section('content')
    <section class="section">
        <div class="text-center pb-50 w-100 mw-100 pt-50">
            <h1 class="section-title page-title w-100 mw-100">Nuestra Carta</h1>
        </div>

        <div class="carta">
            <!-- Tab links -->
            <div class="tab">
                @foreach ($categorias as $categoria)
                    <button class="tablinks"
                        onclick="openCartaContent(event, '{{ $categoria->id }}')">{{ $categoria->nombre }}</button>
                @endforeach
            </div>
            <!-- Tab content -->
            @foreach ($categorias as $categoria)
                <div id="categoria-{{ $categoria->id }}" class="tabcontent">
                        <h2 class="d-none">{{ $categoria->nombre }}</h2>
                    <div class="products-grid">
                        @foreach ($categoria->productos as $producto)
                            <a href="#">
                                <div class="product-card">
                                    <div class="img-box">
                                        <img src="{{ $producto->imagen != null ? asset('Assets/img/products/'.$producto->imagen)  : asset('Assets/img/no-pictures.png') }}"
                                            class="product-img" loading="lazy"
                                            alt="{{ $producto->nombre }}">
                                    </div>
                                    <div class="product-content">
                                        <div class="wrapper">
                                            <h3 class="product-name">{{ $categoria->nombre }}</h3>
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
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        function openCartaContent(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById('categoria-' + cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementsByClassName("tablinks")[0].click();
    </script>
@endsection
