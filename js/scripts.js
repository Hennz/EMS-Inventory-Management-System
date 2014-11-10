function add(display){
    alert(display);
    var displayString = "db" + display;
    alert(displayString);
    document.getElementByName(displayString).value = parseFloat(document.getElementByName(displayString).value) + 1;
}

function sub(display){
    var displayString = "db" + display;
    if (parseFloat(document.getElementByName(displayString).value) === 0){
        document.getElementByName(displayString).value = "0";
    }
    else {
    document.getElementByName(displayString).value = parseFloat(document.getElementByName(displayString).value) - 1;
}
}
