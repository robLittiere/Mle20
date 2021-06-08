let account = document.getElementById("account");
let account_slider = document.getElementById("account_slider");
account.addEventListener("click", sliderAccount_display);

function sliderAccount_display() {
    account_slider.style.width = "30%";
    account_slider.style.padding = "1% 0% 0% 0%";
}

function sliderAccount_hide() {
    account_slider.style.width = "0";
    account_slider.style.padding = "0";
}