/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[5].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[5].oneOf[1].use[2]!./public/Assets/css/foodhub.css":
/*!*************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[5].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[5].oneOf[1].use[2]!./public/Assets/css/foodhub.css ***!
  \*************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "/*-----------------------------------*\\ \n  #foodhub.css\n\\*-----------------------------------*/\n\n/**\n * copyright 2022 @codewithsadee \n */\n\n\n\n\n\n/*-----------------------------------*\\ \n  #CUSTOM PROPERTY\n\\*-----------------------------------*/\n\n:root {\n\n  /**\n   * colors \n   */\n\n  --red-orange-crayola: hsl(0, 100%, 66%);\n  --space-cadet: hsl(249, 37%, 19%);\n  --pistachio: hsl(88, 50%, 60%);\n  --cultured: hsl(220, 13%, 95%);\n  --saffron: hsl(45, 91%, 58%);\n  --rhythm: hsl(240, 9%, 51%);\n  --white: hsl(0, 0%, 100%);\n\n  /**\n   * typography \n   */\n\n  --fs-1: 46px;\n  --fs-2: 28px;\n  --fs-3: 24px;\n  --fs-4: 20px;\n  --fs-5: 18px;\n\n  /**\n   * spacing \n   */\n\n  --px: 30px;\n  --py: 60px;\n\n  /**\n   * others \n   */\n\n  --default-transition: 0.75s ease;\n\n}\n\n\n\n\n\n/*-----------------------------------*\\ \n  #RESET\n\\*-----------------------------------*/\n\n*, *::before, *::after {\n  margin:  0;\n  padding: 0;\n  box-sizing: border-box;\n  outline-offset: 5px;\n}\n\nli { list-style: none; }\n\na {\n  font: inherit;\n  text-decoration: none;\n}\n\nbutton {\n  font: inherit;\n  border: none;\n  background: none;\n  cursor: pointer;\n}\n\nimg, svg, ion-icon, span, button { display: block; }\n\nhtml {\n  font-family: \"Rubik\", sans-serif;\n  scroll-behavior: smooth;\n  background-color: #000;\n}\n\nbody {\n  background-color: #000;\n}\n\n::-webkit-scrollbar { width: 5px; }\n\n::-webkit-scrollbar-track { background: var(--cultured); }\n\n::-webkit-scrollbar-thumb {\n  border-radius: 5px;\n  background: var(--saffron);\n}\n\n::-webkit-scrollbar-thumb:hover { background: var(--space-cadet); }\n\n\n\n\n\n/*-----------------------------------*\\ \n  #REUSED STYLE\n\\*-----------------------------------*/\n\n.btn {\n  height: 55px;\n  padding: 0 25px;\n  color: var(--space-cadet);\n  font-size: 14px;\n  font-weight: 500;\n  transition: var(--default-transition);\n}\n\n.btn:hover { filter: saturate(1.05) brightness(1.05); }\n\n.btn-primary { background: var(--saffron); }\n\n.btn-secondary { background: var(--cultured); }\n\n.btn-icon {\n  display:     flex;\n  align-items: center;\n  gap: 10px;\n}\n\n.section-title {\n  max-width: 420px;\n  color: var(--white);\n  font-size: var(--fs-2);\n  font-weight: 600;\n}\n\n.section-text {\n  max-width: 320px;\n  color: var(--white);\n  font-size: var(--fs-4);\n  line-height: 1.4;\n  letter-spacing: 0.5px;\n}\n\n\n\n\n\n/*-----------------------------------*\\ \n  #MAIN CONTAINER\n\\*-----------------------------------*/\n\n.container {\n  position: relative;\n  max-width: 1440px;\n  margin: auto;\n  background: #00;\n  overflow: hidden;\n}\n\n\n\n\n\n/*-----------------------------------*\\ \n  #HEADER\n\\*-----------------------------------*/\n\n.navbar {\n  position: fixed;\n  top:   0;\n  left: 50%;\n  transform: translateX(-50%);\n  width: 100%;\n  padding: 20px 30px;\n  background: hsla(0, 0%, 100%, 0.99);\n  border-bottom: 1px solid hsla(0, 0%, 0%, 0.05);\n  box-shadow: 0 0 10px hsla(0, 0%, 0%, 0.05);\n  z-index: 5;\n}\n\n.navbar-wrapper {\n  display:         flex;\n  justify-content: space-between;\n  align-items:     center;\n}\n\n.navbar-nav {\n  background: hsla(0, 0%, 100%, 0.9);\n  position: absolute;\n  top: 91px;\n  left: 0;\n  width: 100%;\n  height: calc(100vh - 91px);\n  display:        flex;\n  flex-direction: column;\n  align-items:    center;\n  gap: 30px;\n  padding: 35px;\n  -webkit-backdrop-filter: blur(10px);\n          backdrop-filter: blur(10px);\n  transform: translateY(50px);\n  opacity: 0;\n  visibility: hidden;\n  pointer-events: none;\n  transition: 0.3s ease-in-out;\n}\n\n.navbar-nav.active {\n  transform: translateY(0);\n  opacity: 1;\n  visibility: visible;\n  pointer-events: all;\n}\n\n.nav-link {\n  color: var(--space-cadet);\n  font-size: var(--fs-5);\n  transition: 0.25s ease;\n}\n\n.nav-link:hover { color: var(--saffron); }\n\n.navbar-btn-group {\n  display:     flex;\n  align-items: center;\n  gap: 25px;\n}\n\n.shopping-cart-btn {\n  position: relative;\n  background: var(--cultured);\n  width:  50px;\n  height: 50px;\n  border-radius: 50%;\n  display:         flex;\n  justify-content: center;\n  align-items:     center;\n  border: 2px solid var(--white);\n}\n\n.shopping-cart-btn .count {\n  background: var(--saffron);\n  position: absolute;\n  top:   -2px;\n  right: -2px;\n  height:    20px;\n  min-width: 20px;\n  display:     flex;\n  align-items: center;\n  padding: 0 7px;\n  border-radius: 20px;\n  color: var(--space-cadet);\n  font-size: 12px;\n  font-weight: 500;\n}\n\n.menu-toggle-btn {\n  display:        flex;\n  flex-direction: column;\n  width: 20px;\n  gap: 5px;\n}\n\n.menu-toggle-btn .line {\n  background: var(--space-cadet);\n  width: 20px;\n  height: 2px;\n  border-radius: 2px;\n  transition: 0.25s ease;\n}\n\n.menu-toggle-btn.active .one { transform: translateY(7px) rotate(-45deg); }\n\n.menu-toggle-btn.active .two { transform: rotate(45deg); }\n\n.menu-toggle-btn.active .three { transform: translateY(-7px) rotate(-45deg); }\n\n.cart-box {\n  position: fixed;\n  bottom: 0;\n  right:  0;\n  max-width: 400px;\n  width: 100%;\n  height: calc(100vh - 91px);\n  background: hsla(0, 0%, 100%, 0.9);\n  box-shadow: -1px 1px 3px 0 hsla(0, 0%, 0%, 0.05);\n  -webkit-backdrop-filter: blur(10px);\n          backdrop-filter: blur(10px);\n  transform: translateX(100%);\n  visibility: hidden;\n  z-index: 10;\n  transition: 0.5s ease-in-out;\n}\n\n.cart-box.active {\n  transform: translateX(0);\n  visibility: visible;\n}\n\n.cart-box-ul {\n  height: 100%;\n  padding: 30px;\n  padding-bottom: 120px;\n  overflow-y: auto;\n}\n\n.cart-box-ul::-webkit-scrollbar { display: none; }\n\n.cart-h4 {\n  color: var(--space-cadet);\n  margin-bottom: 30px;\n  font-weight: 600;\n}\n\n.cart-item {\n  background: var(--cultured);\n  display:     flex;\n  align-items: center;\n  margin-bottom: 30px;\n}\n\n.cart-item .img-box {\n  width:  60px;\n  height: 60px;\n  margin-right: 15px;\n  overflow: hidden;\n}\n\n.cart-item .product-img {\n  width:  100%;\n  height: 100%;\n  -o-object-fit: cover;\n     object-fit: cover;\n  transition: var(--default-transition);\n}\n\n.cart-item:hover .product-img { transform: scale(1.05); }\n\n.cart-item .product-name {\n  color: var(--space-cadet);\n  font-size: var(--fs-5);\n  font-weight: 600;\n  width: calc(100% - 135px);\n}\n\n.cart-item .product-price {\n  background: var(--saffron);\n  color: var(--space-cadet);\n  font-weight: 500;\n  width:  60px;\n  height: 60px;\n  display:         flex;\n  justify-content: center;\n  align-items:     center;\n}\n\n.cart-item .product-price .small {\n  display: inline-block;\n  font-size: 10px;\n  font-weight: 400;\n  margin-top: 5px;\n}\n\n.cart-btn-group {\n  background: var(--white);\n  position: fixed;\n  bottom: 0;\n  left:   0;\n  right:  0;\n  display:         flex;\n  justify-content: space-between;\n  align-items:     center;\n  gap: 20px;\n  padding: 30px;\n  border-top: 1px solid hsla(0, 0%, 0%, 0.1);\n  z-index: 15;\n}\n\n\n\n\n\n/*-----------------------------------*\\ \n  #HOME\n\\*-----------------------------------*/\n\n.home {\n  display: grid;\n  grid-template-columns: 1fr;\n  gap: 50px;\n  padding: 150px var(--px) var(--py);\n}\n\n.home-left { text-align: center; }\n\n.home-subtext {\n  background: var(--red-orange-crayola);\n  color: var(--cultured);\n  font-size: 20px;\n  display: inline-block;\n  padding: 3px;\n  margin-bottom: 30px;\n}\n\n.main-heading {\n  color: var(--saffron);\n  font-size: var(--fs-1);\n  font-weight: 600;\n  line-height: 1.1;\n  letter-spacing: -2px;\n  margin-bottom: 30px;\n}\n\n.home-text {\n  color: var(--cultured);\n  margin-bottom: 30px;\n  line-height: 1.6;\n  font-size: 20px\n}\n\n.home .btn-group {\n  display:        flex;\n  flex-direction: column;\n  align-items:    center;\n  gap: 15px;\n}\n\n.home-right {\n  position: relative;\n  aspect-ratio: 10 / 11;\n  padding-top: 110%;\n}\n\n.food-img {\n  position: absolute;\n  width: 60%;\n}\n\n.food-1 {\n  top: 0;\n  width: 100%;\n  left: 0;\n  animation: scaleUp 3s ease-in-out infinite;\n}\n\n.food-2 {\n  top:    0;\n  right: -4%;\n  animation: scaleUp 2s ease-in-out infinite;\n}\n\n.food-3 {\n  bottom: -4%;\n  right:  -4%;\n  animation: scaleUp 4s ease-in-out infinite;\n}\n\n.dialog {\n  position: absolute;\n  filter: drop-shadow(0px 2px 46px hsla(0, 0%, 0%, 0.4));\n}\n\n.dialog-1 {\n  top:   10%;\n  right: 15%;\n}\n\n.dialog-2 {\n  bottom: 20%;\n  right:   5%;\n}\n\n.shape {\n  position: absolute;\n  filter: drop-shadow(0px 3px 6px hsla(0, 0%, 0%, 0.1));\n}\n\n.shape-1 {\n  top:  0;\n  left: 5%;\n  animation: scaleUp 2s 3s ease-in-out infinite;\n}\n\n.shape-2 {\n  right: 0;\n  top:  55%;\n  animation: scaleUp 3s 4s ease-in-out infinite;\n}\n\n.shape-3 {\n  bottom: 5%;\n  left:   5%;\n  animation: scaleUp 3s 1s ease-in-out infinite;\n}\n\n.shape-4 {\n  top:  35%;\n  right: 0;\n  animation: moveUp 3s 1s ease-in-out infinite;\n}\n\n.shape-5 {\n  top: 60%;\n  left: 0;\n  animation: moveUp 3s ease-in-out infinite;\n}\n\n\n@keyframes scaleUp {\n\n  0%,\n  100% { transform: translateY(0) scale(1); }\n\n  50% { transform: translateY(-5px) scale(1.05);}\n\n}\n\n\n@keyframes moveUp {\n\n  0%,\n  100% { transform: translateY(0); }\n  20%  { transform: translateY(-3px); }\n  50%  { transform: translateY(-8px); }\n\n}\n\n\n\n\n\n/*-----------------------------------*\\ \n  #ABOUT\n\\*-----------------------------------*/\n\n.about {\n  padding: var(--py) var(--px);\n  display: grid;\n  grid-template-columns: 1fr;\n  gap: 60px;\n}\n\n.about-left { position: relative; }\n\n.about-left .img-box {\n  aspect-ratio: 1 / 1;\n  overflow: hidden;\n}\n\n.about-img {\n  width:  100%;\n  height: 100%;\n  -o-object-fit: cover;\n     object-fit: cover;\n  animation: lazy-scaleUp 30s linear infinite;\n}\n\n\n@keyframes lazy-scaleUp {\n\n  0%,\n  100% { transform: scale(1); }\n  50%  { transform: scale(1.2); }\n\n}\n\n\n.abs-content-box {\n  background: var(--white);\n  position: absolute;\n  bottom: -20px;\n  right:  -20px;\n  padding: 30px;\n  text-align: center;\n  box-shadow: 2px 2px 10px hsla(0, 0%, 0%, 0.1);\n}\n\n.dotted-border {\n  border: 3px dotted var(--cultured);\n  padding: 10px;\n}\n\n.number-lg {\n  font-size: var(--fs-1);\n  font-family: \"Monoton\", cursive;\n  color: var(--space-cadet);\n}\n\n.text-md {\n  font-size: var(--fs-3);\n  font-weight: 600;\n  color: var(--space-cadet);\n}\n\n.shape-6 {\n  right: -9px;\n  top:   35%;\n  animation: scaleUp 2s 3s ease-in-out infinite;\n}\n\n.shape-7 {\n  top:   50%;\n  left: -15px;\n  animation: scaleUp 3s ease-in-out infinite;\n}\n\n.shape-8 {\n  top: -10px;\n  left: 15%;\n  animation: moveUp 3s 1s ease-in-out infinite;\n}\n\n.shape-9 {\n  bottom: -20px;\n  left:     5%;\n  animation: moveUp 3s ease-in-out infinite;\n}\n\n.about-right .section-title { margin-bottom: 30px; }\n\n.about-right p {\n  max-width: 100%;\n  margin-bottom: 30px;\n}\n\n\n\n\n\n/*-----------------------------------*\\ \n  #SERVICE SECTION\n\\*-----------------------------------*/\n\n.services {\n  padding: var(--py) var(--px);\n  display: grid;\n  grid-template-columns: 1fr;\n  gap: 40px;\n}\n\n.service-card .card-number {\n  font-size: 42px;\n  font-family: \"Monoton\", cursive;\n  color: var(--saffron);\n}\n\n.service-card .card-heading {\n  color: var(--space-cadet);\n  font-size: var(--fs-3);\n  font-weight: 600;\n  letter-spacing: -1px;\n  margin-bottom: 20px;\n}\n\n.service-card .card-text {\n  color: var(--rhythm);\n  font-size: var(--fs-4);\n  line-height: 1.5;\n}\n\n\n\n\n\n/*-----------------------------------*\\ \n  #PRODUCT SECTION\n\\*-----------------------------------*/\n\n.product { padding: var(--py) var(--px); }\n\n.product .section-title { margin-bottom: 30px; }\n\n.product .section-text { margin-bottom: 60px; }\n\n.products-grid {\n  display: grid;\n  grid-template-columns: 1fr;\n  gap: 40px;\n  margin-bottom: 50px;\n}\n\n.product-card .img-box {\n  position: relative;\n  overflow: hidden;\n}\n\n.product-img {\n  width:  100%;\n  height: 100%;\n  -o-object-fit: cover;\n     object-fit: cover;\n  transition: var(--default-transition);\n}\n\n.product-card:hover .product-img { transform: scale(1.05); }\n\n.card-badge {\n  position: absolute;\n  top:  15px;\n  left: 15px;\n  display:     flex;\n  align-items: center;\n  gap: 5px;\n  padding: 5px 8px;\n  font-size: 14px;\n}\n\n.card-badge ion-icon { font-size: 13px; }\n\n.card-badge.green {\n  background: var(--pistachio);\n  color: var(--space-cadet);\n}\n\n.card-badge.red {\n  background: var(--red-orange-crayola);\n  color: var(--space-cadet);\n}\n\n.product-card .wrapper {\n  display:         flex;\n  justify-content: space-between;\n  align-items:     center;\n  gap: 15px;\n  background: var(--cultured);\n  margin-bottom: 15px;\n}\n\n.product-card .product-name {\n  color: var(--space-cadet);\n  font-size: var(--fs-3);\n  font-weight: 600;\n  padding-left: 15px;\n}\n\n.product-card .product-price {\n  background: var(--saffron);\n  height: 60px;\n  width:  60px;\n  display:         flex;\n  justify-content: center;\n  align-items:     center;\n  color: var(--space-cadet);\n  font-size: 16px;\n  font-weight: 500;\n}\n\n.product-card .small {\n  font-size: 12px;\n  font-weight: 400;\n  margin-top: 5px;\n}\n\n.product-card .product-text {\n  font-size: var(--fs-4);\n  color: var(--white);\n  line-height: 1.6;\n  letter-spacing: 0.4px;\n  margin-bottom: 15px;\n}\n\n.product-card .product-rating {\n  display:     flex;\n  align-items: center;\n  gap: 5px;\n  color: var(--white);\n}\n\n.product .btn-primary { margin-inline: auto; }\n\n\n\n\n\n/*-----------------------------------*\\ \n  #TESTIMONIALS SECTION\n\\*-----------------------------------*/\n\n.testimonials { padding: var(--py) var(--px) 120px; }\n\n.testimonials .section-title { margin-bottom: 15px; }\n\n.testimonials .section-text { margin-bottom: 50px; }\n\n.testimonials-grid {\n  display: grid;\n  grid-template-columns: 1fr;\n  gap: 50px;\n}\n\n.testimonials-card .card-title {\n  color: var(--space-cadet);\n  font-weight: 600;\n  margin-bottom: 15px;\n}\n\n.testimonials-rating {\n  display:     flex;\n  align-items: center;\n  gap: 5px;\n  margin-bottom: 15px;\n}\n\n.testimonials-rating ion-icon { color: var(--saffron); }\n\n.testimonials-text {\n  font-size: var(--fs-4);\n  color: var(--rhythm);\n  line-height: 1.4;\n  letter-spacing: 0.5px;\n  margin-bottom: 15px;\n}\n\n.customer-info {\n  display:     flex;\n  align-items: center;\n  gap: 15px;\n}\n\n.customer-img-box {\n  width:  50px;\n  height: 50px;\n  border-radius: 50%;\n  overflow: hidden;\n}\n\n.customer-img {\n  width:  100%;\n  height: 100%;\n  -o-object-fit: cover;\n     object-fit: cover;\n}\n\n.customer-name {\n  font-size: 14px;\n  color: var(--space-cadet);\n  font-weight: 600;\n}\n\n\n\n\n\n/*-----------------------------------*\\ \n  #FOOTER\n\\*-----------------------------------*/\n\nfooter {\n  background: var(--space-cadet);\n  padding: 50px var(--px);\n}\n\n.footer-wrapper {\n  display:        flex;\n  flex-direction: column;\n  align-items:    center;\n  gap: 30px;\n}\n\n.social-link {\n  display: flex;\n  gap: 15px;\n}\n\n.social-link ion-icon {\n  color: var(--cultured);\n  font-size: 25px;\n  transition: 0.25s ease;\n}\n\n.social-link ion-icon:hover { color: var(--saffron); }\n\n.copyright {\n  margin-top: 100px;\n  font-size: 16px;\n  color: var(--white);\n  text-align: center;\n  letter-spacing: 0.5px;\n}", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/api.js":
/*!*****************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/api.js ***!
  \*****************************************************/
/***/ ((module) => {



/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
// eslint-disable-next-line func-names
module.exports = function (cssWithMappingToString) {
  var list = []; // return the list of modules as css string

  list.toString = function toString() {
    return this.map(function (item) {
      var content = cssWithMappingToString(item);

      if (item[2]) {
        return "@media ".concat(item[2], " {").concat(content, "}");
      }

      return content;
    }).join("");
  }; // import a list of modules into the list
  // eslint-disable-next-line func-names


  list.i = function (modules, mediaQuery, dedupe) {
    if (typeof modules === "string") {
      // eslint-disable-next-line no-param-reassign
      modules = [[null, modules, ""]];
    }

    var alreadyImportedModules = {};

    if (dedupe) {
      for (var i = 0; i < this.length; i++) {
        // eslint-disable-next-line prefer-destructuring
        var id = this[i][0];

        if (id != null) {
          alreadyImportedModules[id] = true;
        }
      }
    }

    for (var _i = 0; _i < modules.length; _i++) {
      var item = [].concat(modules[_i]);

      if (dedupe && alreadyImportedModules[item[0]]) {
        // eslint-disable-next-line no-continue
        continue;
      }

      if (mediaQuery) {
        if (!item[2]) {
          item[2] = mediaQuery;
        } else {
          item[2] = "".concat(mediaQuery, " and ").concat(item[2]);
        }
      }

      list.push(item);
    }
  };

  return list;
};

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js":
/*!****************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js ***!
  \****************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {



var isOldIE = function isOldIE() {
  var memo;
  return function memorize() {
    if (typeof memo === 'undefined') {
      // Test for IE <= 9 as proposed by Browserhacks
      // @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
      // Tests for existence of standard globals is to allow style-loader
      // to operate correctly into non-standard environments
      // @see https://github.com/webpack-contrib/style-loader/issues/177
      memo = Boolean(window && document && document.all && !window.atob);
    }

    return memo;
  };
}();

var getTarget = function getTarget() {
  var memo = {};
  return function memorize(target) {
    if (typeof memo[target] === 'undefined') {
      var styleTarget = document.querySelector(target); // Special case to return head of iframe instead of iframe itself

      if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
        try {
          // This will throw an exception if access to iframe is blocked
          // due to cross-origin restrictions
          styleTarget = styleTarget.contentDocument.head;
        } catch (e) {
          // istanbul ignore next
          styleTarget = null;
        }
      }

      memo[target] = styleTarget;
    }

    return memo[target];
  };
}();

var stylesInDom = [];

function getIndexByIdentifier(identifier) {
  var result = -1;

  for (var i = 0; i < stylesInDom.length; i++) {
    if (stylesInDom[i].identifier === identifier) {
      result = i;
      break;
    }
  }

  return result;
}

function modulesToDom(list, options) {
  var idCountMap = {};
  var identifiers = [];

  for (var i = 0; i < list.length; i++) {
    var item = list[i];
    var id = options.base ? item[0] + options.base : item[0];
    var count = idCountMap[id] || 0;
    var identifier = "".concat(id, " ").concat(count);
    idCountMap[id] = count + 1;
    var index = getIndexByIdentifier(identifier);
    var obj = {
      css: item[1],
      media: item[2],
      sourceMap: item[3]
    };

    if (index !== -1) {
      stylesInDom[index].references++;
      stylesInDom[index].updater(obj);
    } else {
      stylesInDom.push({
        identifier: identifier,
        updater: addStyle(obj, options),
        references: 1
      });
    }

    identifiers.push(identifier);
  }

  return identifiers;
}

function insertStyleElement(options) {
  var style = document.createElement('style');
  var attributes = options.attributes || {};

  if (typeof attributes.nonce === 'undefined') {
    var nonce =  true ? __webpack_require__.nc : 0;

    if (nonce) {
      attributes.nonce = nonce;
    }
  }

  Object.keys(attributes).forEach(function (key) {
    style.setAttribute(key, attributes[key]);
  });

  if (typeof options.insert === 'function') {
    options.insert(style);
  } else {
    var target = getTarget(options.insert || 'head');

    if (!target) {
      throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
    }

    target.appendChild(style);
  }

  return style;
}

function removeStyleElement(style) {
  // istanbul ignore if
  if (style.parentNode === null) {
    return false;
  }

  style.parentNode.removeChild(style);
}
/* istanbul ignore next  */


var replaceText = function replaceText() {
  var textStore = [];
  return function replace(index, replacement) {
    textStore[index] = replacement;
    return textStore.filter(Boolean).join('\n');
  };
}();

function applyToSingletonTag(style, index, remove, obj) {
  var css = remove ? '' : obj.media ? "@media ".concat(obj.media, " {").concat(obj.css, "}") : obj.css; // For old IE

  /* istanbul ignore if  */

  if (style.styleSheet) {
    style.styleSheet.cssText = replaceText(index, css);
  } else {
    var cssNode = document.createTextNode(css);
    var childNodes = style.childNodes;

    if (childNodes[index]) {
      style.removeChild(childNodes[index]);
    }

    if (childNodes.length) {
      style.insertBefore(cssNode, childNodes[index]);
    } else {
      style.appendChild(cssNode);
    }
  }
}

function applyToTag(style, options, obj) {
  var css = obj.css;
  var media = obj.media;
  var sourceMap = obj.sourceMap;

  if (media) {
    style.setAttribute('media', media);
  } else {
    style.removeAttribute('media');
  }

  if (sourceMap && typeof btoa !== 'undefined') {
    css += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))), " */");
  } // For old IE

  /* istanbul ignore if  */


  if (style.styleSheet) {
    style.styleSheet.cssText = css;
  } else {
    while (style.firstChild) {
      style.removeChild(style.firstChild);
    }

    style.appendChild(document.createTextNode(css));
  }
}

var singleton = null;
var singletonCounter = 0;

function addStyle(obj, options) {
  var style;
  var update;
  var remove;

  if (options.singleton) {
    var styleIndex = singletonCounter++;
    style = singleton || (singleton = insertStyleElement(options));
    update = applyToSingletonTag.bind(null, style, styleIndex, false);
    remove = applyToSingletonTag.bind(null, style, styleIndex, true);
  } else {
    style = insertStyleElement(options);
    update = applyToTag.bind(null, style, options);

    remove = function remove() {
      removeStyleElement(style);
    };
  }

  update(obj);
  return function updateStyle(newObj) {
    if (newObj) {
      if (newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap) {
        return;
      }

      update(obj = newObj);
    } else {
      remove();
    }
  };
}

module.exports = function (list, options) {
  options = options || {}; // Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
  // tags it will allow on a page

  if (!options.singleton && typeof options.singleton !== 'boolean') {
    options.singleton = isOldIE();
  }

  list = list || [];
  var lastIdentifiers = modulesToDom(list, options);
  return function update(newList) {
    newList = newList || [];

    if (Object.prototype.toString.call(newList) !== '[object Array]') {
      return;
    }

    for (var i = 0; i < lastIdentifiers.length; i++) {
      var identifier = lastIdentifiers[i];
      var index = getIndexByIdentifier(identifier);
      stylesInDom[index].references--;
    }

    var newLastIdentifiers = modulesToDom(newList, options);

    for (var _i = 0; _i < lastIdentifiers.length; _i++) {
      var _identifier = lastIdentifiers[_i];

      var _index = getIndexByIdentifier(_identifier);

      if (stylesInDom[_index].references === 0) {
        stylesInDom[_index].updater();

        stylesInDom.splice(_index, 1);
      }
    }

    lastIdentifiers = newLastIdentifiers;
  };
};

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/nonce */
/******/ 	(() => {
/******/ 		__webpack_require__.nc = undefined;
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!***************************************!*\
  !*** ./public/Assets/css/foodhub.css ***!
  \***************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_ruleSet_1_rules_5_oneOf_1_use_1_node_modules_postcss_loader_dist_cjs_js_ruleSet_1_rules_5_oneOf_1_use_2_foodhub_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[5].oneOf[1].use[1]!../../../node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[5].oneOf[1].use[2]!./foodhub.css */ "./node_modules/css-loader/dist/cjs.js??ruleSet[1].rules[5].oneOf[1].use[1]!./node_modules/postcss-loader/dist/cjs.js??ruleSet[1].rules[5].oneOf[1].use[2]!./public/Assets/css/foodhub.css");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_ruleSet_1_rules_5_oneOf_1_use_1_node_modules_postcss_loader_dist_cjs_js_ruleSet_1_rules_5_oneOf_1_use_2_foodhub_css__WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_ruleSet_1_rules_5_oneOf_1_use_1_node_modules_postcss_loader_dist_cjs_js_ruleSet_1_rules_5_oneOf_1_use_2_foodhub_css__WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});
})();

/******/ })()
;