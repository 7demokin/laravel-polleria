<footer>
    <!---
    <div class="footer-wrapper">
        
        <a href="#">
            <img src="{{ asset('Assets/img/' . $logo) }}" alt="logo" class="footer-brand" width="130">
        </a>
   
        <div class="social-link">
         -->
    <!--
            Dirección: <a href="https://goo.gl/maps/An2Jv9rsgH9b6VqEA" target="_blanck">Av. Canta Callao Mz. A. RI Lt. 19 Urb. Virgen del Rosario - SMP </a>
            <a href="#">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-youtube"></ion-icon>
            </a>
        </div>

    </div>-->
    <div class="copyright">&copy; Copyright 2022 Pollos y Parrillas Edualdo y Familia. Todos los derechos reservados.
    </div>

</footer>
<a href="https://api.whatsapp.com/send?phone=51928307609" class="btn-whatsapp-float" target="_blank">
    <img src="{{ asset('Assets/img/whatsapp.png') }}" class="filter-invert" loading="lazy">
</a>

<div class="cd-user-modal">
    <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container">
        <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">Ingresar</a></li>
            <li><a href="#0">Registrar</a></li>
        </ul>

        <div id="cd-login">
            <!-- log in form -->
                <form id="signin-form" class="cd-form" action="{{ route('api.login') }}" enctype="multipart/form-data">

                @csrf
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signin-email" name="signin-email"
                        type="email" placeholder="Correo">
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input class="full-width has-padding has-border" id="signin-password" name="signin-password" type="password"
                        placeholder="Contraseña">
                    <a href="#0" class="hide-password">Mostrar</a>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" name="remember-me" checked>
                    <label for="remember-me">Recuerdame</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="submit" value="Ingresar">
                </p>
            </form>

            <!--<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>-->
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup">
            <!-- sign up form -->
            <form id="signup-form" class="cd-form" action="{{ route('api.register') }}" enctype="multipart/form-data">
                @csrf
                <p class="fieldset">
                    <label class="image-replace cd-user" for="signup-firstname">Nombres</label>
                    <input class="full-width has-padding has-border" id="signup-firstname" name="signup-firstname"
                        type="text" placeholder="Nombres">
                    <!--<span class="cd-error-message">Error message here!</span>-->
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-user" for="signup-lastname">Apellidos</label>
                    <input class="full-width has-padding has-border" id="signup-lastname" name="signup-lastname"
                        type="text" placeholder="Apellidos">
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-mobile" for="signup-mobile">Celular</label>
                    <input class="full-width has-padding has-border" id="signup-mobile" name="signup-mobile"
                        type="text" placeholder="Celular">
                </p>
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="signup-email" name="signup-email"
                        type="email" placeholder="Correo">
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input class="full-width has-padding has-border" id="signup-password" name="signup-password"
                        type="password" placeholder="Contraseña">
                    <a href="#0" class="hide-password">Mostrar</a>
                </p>
                <!--
                <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                </p>
            -->
                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Registrar">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <div id="cd-reset-password">
            <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to
                create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email"
                        placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->
