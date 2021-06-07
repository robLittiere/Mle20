// Get the modal
let modal = document.getElementById("myModal");

//Get buttons 
let buttonUnder = document.getElementById("under18Years")

let buttonOver = document.getElementById("over18Years")

// When the user load the page, open the modal 
window.onload = function () {
  modal.style.display = "block";
  disableScroll();
}

// When the user clicks on over18Years button, close the modal
buttonOver.onclick = function () {
  modal.style.display = "none";
  enableScroll();
}

//When the user clicks on under18Years button, leave the page
buttonUnder.onclick = function () {
    window.open("https://www.google.com")
}

//Function to disable scrolling
function disableScroll() { 
  // Get the current page scroll position 
  scrollTop = window.pageYOffset || document.documentElement.scrollTop; 
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft, 

      // if any scroll is attempted, set this to the previous value 
      window.onscroll = function() { 
        window.scrollTo(scrollLeft, scrollTop); 
      }; 
} 
//Function to enable scrolling
function enableScroll() { 
  window.onscroll = function() {fix_navbar()}; 
} 

}