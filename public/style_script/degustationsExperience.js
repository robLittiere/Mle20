function showIt(element) {
    var parentDOM = document.getElementsByClassName("pageContent");

    for(var i = 0; i < parentDOM.length; i++){
        parentDOM[i].style.display = "none";
    }

    var elem = element.id;
    var divId = elem + "Div";
    let div = document.getElementById(divId);

    div.style.display = "block";
}