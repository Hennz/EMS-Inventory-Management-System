$(document).ready(function() {

$('.sub').click(function(){
    console.log("click");   
var id=[];
var quantity=[];
var display="display";
var i=-1; // this is to avoid the table heads. We skip in the loop.

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
            console.log("ID : " +  id[i]);
            console.log(" quantity: "+ quantity[i]);
            i++;
        
    }
    
    
    
    
});


console.log("before ajax call");  
$.ajax({
      url: 'index.php',
      type: 'get',
      data: {'id': id, 'quantity': quantity, 'add':"add"},
      success: function(data, status) {
          
       // console.log("Successful ajax call data . Status : "+status);  
       window.location.href = "home.html";
        
       
          
    
        
   
        
        
      },
      error: function(xhr, desc, err) {
         console.log("Not Successful ajax call");  
      }
      
    }); // end ajax call

});


});