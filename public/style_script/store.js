let modal = document.getElementById("popup");
let knowMore = document.getElementsByClassName("text");

for ( let i = 0; i < knowMore.length; i++) {
    knowMore[i].addEventListener("click", function() {
        modal.style.display = "block";
    });
}

document.getElementById("popupBtn").addEventListener("click", function() {
    modal.style.display = "none";
});


