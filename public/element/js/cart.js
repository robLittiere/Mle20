let cart = document.getElementById("cart");
let cart_slider = document.getElementById("cart_slider");
cart.addEventListener("click", sliderCart_display);

function sliderCart_display(){
  cart_slider.style.width = "30%";
  cart_slider.style.padding = "1% 0% 0% 0%";
}

function sliderCart_hide() {
  cart_slider.style.width = "0";
  cart_slider.style.padding = "0";
}
