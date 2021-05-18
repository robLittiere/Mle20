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

function dropdownDisplay(element) {
    let children = element.children;

    for (let index = 0; index < children.length; index++) {
        children[index].style.display = "block"
    }
}

function dropdownHide(element) {
    let children = element.children;

    for (let index = 0; index < children.length; index++) {
        children[index].style.display = "none"
    }
}