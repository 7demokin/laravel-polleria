@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('content')
    <section class="section">
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

        <div class="section-title pb-50">
            <h2>Ubicación:</h2>
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

    </section>
@endsection
