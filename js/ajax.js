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
var title = [];
var quantity = [];
var display = "display";
var download = "download";
var i = -1; // this is to avoid the table heads. We skip in the loop.

$(document).ready(function() {
    console.log('hi');
    $('.sub').click(function() {
        i = -1;
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
        postData().done(function(result) {
          // window.location.href = "/cse-216-project/Presentation/home.php";
          window.location.href = "\\wwwroot\\Presentation\\home.php";
        });

    });




    function postData() {
        console.log("test");
        return $.ajax({
            url: '\\wwwroot\\index.php',
            type: 'post',
            data: {'id': id, 'quantity': quantity, 'update': "update"},
            success: function(data, status) {

                //console.log("Successful ajax call data . Status : " + status);
                console.log("Successful ajax call data . Status : " + data);
                //window.location.href = "/cse-216-project/Presentation/home.php";
            },
            error: function(xhr, desc, err) {
                console.log("Not Successful ajax call");
            }

        });

    }

   



});
