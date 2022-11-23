@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('content')
    <section class="section">
        <div class="align-items-center pt-50 pb-50">
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

        <div class="section-title pb-50">
            <h2>Ubicación:</h2>
            <div class="section-text">
                <a class="direccion-link" href="https://goo.gl/maps/An2Jv9rsgH9b6VqEA" target="_blank"
                    rel="noopener noreferrer">Av. Canta Callao Mz. A. RI Lt. 19 Urb. Virgen del Rosario - SMP</a>
            </div>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/d/embed?mid=12nNOk7khhSzJ_f-y-HqERVY1R5M&ehbc=2E312F" width="100%"
                height="500"></iframe>
        </div>

    </section>
@endsection
