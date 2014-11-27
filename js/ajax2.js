

var id = [];
var title= [];
var quantity = [];
var display = "display";
var download= "download";
var i = -1; // this is to avoid the table heads. We skip in the loop.

$(document).ready(function() {
    console.log('hi');
    $('#download').click(function(){
       
        i=-1;
        $('.table').children().children().each(function() {
            
            var q = $(this).children('.currentVal').val();
            
            if (i == -1) {
                i++;
            }
            
            else {

                var strTitle = $(this).children().first().val();
                title[i] = strTitle;
                quantity[i] = q;
                i++;

            }
        
        
        
        
    });
     
    startDownload().done(function(result) {
           //window.location.href = "Action_Download.php";
        });

});

function startDownload() {

    return $.ajax({
        url: 'index.php',
        type: 'post',
        data: {'id': id, 'title': title, 'download': download},
        success: function(data, status) {

            console.log("Successful ajax call data . Status : " + status);
            //window.location.href = "home.html";
        },
        error: function(xhr, desc, err) {
            console.log("Not Successful ajax call");
        }

    });

}



});

