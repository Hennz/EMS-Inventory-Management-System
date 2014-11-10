function add(display){
    document.getElementById('db1').value = parseFloat(document.getElementById('db1').value) + 1;
      document.getElementById('1').value = parseFloat(document.getElementById('1').value) + 1;
    alert(display);
    var displayString = "db" + display;
    alert(displayString);
    document.getElementById(displayString).value = parseFloat(document.getElementById(displayString).value) + 1;
}

function sub(display){
    var displayString = "db" + display;
    if (parseFloat(document.getElementById(displayString).value) === 0){
        document.getElementById(displayString).value = "0";
    }
    else {
    document.getElementById(displayString).value = parseFloat(document.getElementById(displayString).value) - 1;
}
}
