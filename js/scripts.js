function add(display){
    document.getElementByName('db1').value = parseFloat(document.getElementByName('db1').value) + 1;
      document.getElementByName('1').value = parseFloat(document.getElementByName('1').value) + 1;
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
