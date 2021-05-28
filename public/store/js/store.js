let modal = document.getElementById("popup");
let knowMore = document.getElementsByClassName("text");
let addToCart = document.getElementsByClassName("btn");
let currentDiv = document.getElementById("cartEnd");
let sidenav = document.getElementById("cartContain");

/* Add event listener on every "En savoir plus" button in the store
   Change display on click 
*/
for ( let i = 0; i < knowMore.length; i++) {
    knowMore[i].addEventListener("click", function() {
        modal.style.display = "block";
    });
}

/* Add event listener on every "Ajouter au panier" button in the store
   For prototyping we add divs to our cart container

*/
for ( i = 0; i < addToCart.length; i++) {
    addToCart[i].addEventListener("click", function() {
        var elem = document.createElement("img");
        elem.setAttribute("src", "wineImg/wine.webp");
        elem.setAttribute('width', '250px');
        elem.setAttribute('height', '250px');


        var newDiv = document.createElement("a");
        // et lui donne un peu de contenu
        var newContent = document.createTextNode('demi bouteille tradition brut');
        // ajoute le nœud texte au nouveau div créé
        newDiv.appendChild(newContent);

        // ajoute le nouvel élément créé et son contenu dans le DOM
        sidenav.insertBefore(elem, currentDiv);
        sidenav.insertBefore(newDiv, currentDiv);
        //blured navbar
        document.getElementById("mySidenav").style.width = "25%";
        document.getElementById("sidenavBlur").style.width = "75%";
    });
}
//To hide cart div when we click on the right navbar button
document.getElementById("popupBtn").addEventListener("click", function() {
    modal.style.display = "none";
});


/**
 * Functions to modify our navbar styling, we will use them with a onlick event in order to get our cart popup effect
 */
function openNav() {
    document.getElementById("mySidenav").style.width = "20%";
    document.getElementById("sidenavBlur").style.width = "80%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("sidenavBlur").style.width = "0px";
}