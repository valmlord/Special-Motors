import './modules/jquery.js';
import './modules/sweetalert.js';
import modals from "./modules/modals";
import tabs from "./modules/tabs";
import timer from "./modules/timer";
import AOS from "aos";
import "./modules/brandsSlider";

window.addEventListener("DOMContentLoaded", () => {
  "use strict";

  //let modalState = {};
  let deadline = "2020-10-31";

  modals();

  tabs(
    ".services__tabs",
    ".services__tab",
    ".services__content",
    "services__tab_active"
  );

  timer(".container1", deadline);

  AOS.init();

  AOS.init({
    once: false,
  });

  //slideshow();
});


jQuery(document).ready(function () {
  jQuery("form").submit(function () { // Событие отправки с формы
    var form_data = jQuery(this).serialize(); // Собираем данные из полей
    jQuery.ajax({
      type: "POST", // Метод отправки
      url: "sendform.php", // Путь к PHP обработчику sendform.php
      data: form_data,
      success: swal({
        title: "Спасибо за заявку!",
        type: "success",
        showConfirmButton: false,
        timer: 2000
      })
    });
    $(this).find('input, textarea').prop('disabled', true);
    event.preventDefault();
  });
});