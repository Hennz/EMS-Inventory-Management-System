

var id = [];
var title = [];
var quantity = [];
var display = "display";
var download = "download";
var i = -1; // this is to avoid the table heads. We skip in the loop.

$(document).ready(function() {
    console.log('hi');
    $('#download').click(function() {

        i = -1;
        $('.table').children().children().each(function() {

            var q = $(this).children('.currentVal').text();

            if (i == -1) {
                i++;
            }

            else {

                var strTitle = $(this).children().first().text();
                title[i] = strTitle;
                quantity[i] = q;
                console.log(q);
                console.log(strTitle);
                // alert(q);
                //alert(strTitle);
                i++;

            }
        });

        startDownload().done(function(result) {
            window.location.href = "\\wwwroot\\Presentation\\DownloadConfirmation.php";
        });

    });

    function startDownload() {

        return $.ajax({
            url: '\\wwwroot\\index.php',
            type: 'post',
            data: {'quantity': quantity, 'title': title, 'download': download},
            success: function(data, status) {
                //console.log(data);
                console.log("Successful ajax call data . Status : " + data);
                window.location.href = "DownloadConfirmation.php";
            },
            error: function(xhr, desc, err) {
                console.log("Not Successful ajax call");
            }

        });

    }



});

