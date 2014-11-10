function add(display){
    display = "db" + display;
    document.getElementByName(display).value = parseFloat(document.getElementByName(display).value) + 1;
}

function sub(display){
    display = "db" + display;
    if (parseFloat(document.getElementByName(display).value) === 0){
        document.getElementByName(display).value = "0";
    }
    else {
    document.getElementByName(display).value = parseFloat(document.getElementByName(display).value) - 1;
}
}
