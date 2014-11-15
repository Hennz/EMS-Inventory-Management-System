/*
 * Documentation:
 * 
 * Purpose: Send data to php to process and send updates to database.
 * How: AJAX
 * Resource Link: http://stackoverflow.com/questions/14220321/how-to-return-the-response-from-an-ajax-call
 * 
 * 1.) Use Jquery to grab final values of CartIn or CartOut.php
 * 2.) Store the final values and their respective IDs into arrays.
 * 3.) Call postData() which executes ajax to pass information in JSON format.
 * 4.) Since AJAX is asynchronous, we need to use callbacks to gurantee that
 * everything has succeeded.
 */

var id = [];
var quantity = [];
var display = "display";
var i = -1; // this is to avoid the table heads. We skip in the loop.

$(document).ready(function() {

    $('.sub').click(function() {
        console.log("click");

        $('.table').children().children().each(function() {

            //children1=tbody
            //children2=tr
            var q = $(this).children('.finalVal').children().val();
            if (i == -1) {
                i++;
                console.log("skip");
            }

            else {
                console.log(" No skip");

                var strID = $(this).children('.finalVal').children().attr('name');
                id[i] = strID;
                quantity[i] = q;
                console.log("ID : " + id[i]);
                console.log(" quantity: " + quantity[i]);
                i++;

            }




        });

        console.log("before ajax call");
        postData();
        console.log("end of ajax call");

        postData().done(function(result) {
            window.location.href = "home.html";
        });

    });


});


function postData() {

    return $.ajax({
        url: 'index.php',
        type: 'post',
        data: {'id': id, 'quantity': quantity, 'add': "add"},
        success: function(data, status) {

            console.log("Successful ajax call data . Status : " + status);
            window.location.href = "home.html";
        },
        error: function(xhr, desc, err) {
            console.log("Not Successful ajax call");
        }

    });

}

