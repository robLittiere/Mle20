// Get the modal
let modal = document.getElementById("myModal");

//Get buttons 
let buttonUnder = document.getElementById("under18Years")

let buttonOver = document.getElementById("over18Years")

// When the user load the page, open the modal 
window.onload = function () {
  modal.style.display = "block";
}

// When the user clicks on over18Years button, close the modal
buttonOver.onclick = function () {
  modal.style.display = "none";
}

//When the user clicks on under18Years button, leave the page
buttonUnder.onclick = function () {
    window.open("https://www.google.com")
}