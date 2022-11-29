"use strict";
// jQuery messages
const msgRequired = "Campo vacío!"
const msgMaxlength = (len) => `Debe ser menor a ${len+1} caracteres!`
const msgMinlength = (len) => `Debe ser mayor a ${len-1} caracteres!`
const msgDigits = "Deben ser solo números!"
const msgEmail = "Deben ser un correo válido!"
// navbar variables
const nav = document.querySelector(".navbar-nav");
const navLinks = document.querySelectorAll(".nav-link");
const cartToggleBtn = document.querySelector(".shopping-cart-btn");
const navToggleBtn = document.querySelector(".menu-toggle-btn");
const shoppingCart = document.querySelector(".cart-box");
const btnWhatsappFloat = document.querySelector(".btn-whatsapp-float");
const btnCantidadMas = document.getElementById("btn-cantidad-mas");

// nav toggle function
const navToggleFunc = function () {
    nav.classList.toggle("active");
    navToggleBtn.classList.toggle("active");
};

// shopping cart toggle function
const cartToggleFunc = function () {
    shoppingCart.classList.toggle("active");
};

// add event on nav-toggle-btn
navToggleBtn.addEventListener("click", function () {
    // If the shopping-cart has an `active` class, it will be removed.
    if (shoppingCart.classList.contains("active")) cartToggleFunc();

    navToggleFunc();
});

// add event on cart-toggle-btn
cartToggleBtn.addEventListener("click", function () {
    // If the navbar-nav has an `active` class, it will be removed.
    if (nav.classList.contains("active")) navToggleFunc();

    cartToggleFunc();
    btnWhatsappFloat.classList.toggle("active");
});

// add event on all nav-link
for (let i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click", navToggleFunc);
}

// -- LOGIN MODAL --

