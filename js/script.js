$(document).ready(function() {

console.log("before currentval");
$(":input").on("input", function(){

    var obj=$(this);
    //console.log("Object : "+ obj.attr('class'));
    var parent= obj.parent().parent(); // this will be the <tr>
    //console.log("Parent : "+ parent.prop('tagName'));
    
  
    var final= parent.children('.finalVal').children();
    
    

    
    // THIS IS THE DATABASE VALUE
    var currentString=parent.children('.currentVal').text();
    var currentNum= parseInt(currentString);
  
   // CHANGE VALUE THAT USER PUTS IN
    var changeString=parent.children('.change').children().val();
    var change=parseInt(changeString);
    
    // END RESULT
    var result=currentNum-change;
    
    
    if((currentNum-change)>=0)
    {
        final.val(''+(currentNum-change));
        final.css({'background-color':'transparent'});
    }
    else if(changeString==''){
        final.val(currentNum);
         final.css({'background-color':'transparent'});
    }
    else{
      final.val('Insufficient');
      final.css({'background-color':'red'});
    }
   // console.log("Result "+result);
   
});









$('.sub').click(function(){
    console.log("click");   
var id=[];
var quantity=[];
var add="add";
var display="display";
var i=-1; // this is to avoid the table heads. We skip in the loop.

$('.table').children().children().each(function() {
    var q = $(this).children('.finalVal').children().val();
    if (i == -1) {
        i++;
        console.log("skip");
    }

    else {
        console.log(" No skip");
        var q = $(this).children('.finalVal').children().val();
        if (q == 'Insufficient') {
            console.log(" In sufficient");
        }

        else {


            var strID = $(this).children('.finalVal').children().attr('name');
            id[i] = strID;
            quantity[i] = q;
            console.log("ID : " +  id[i]);
            console.log(" quantity: "+ quantity[i]);
            i++;
        }
    }
    
    
    
    
});


console.log("before ajax call");  
$.ajax({
      url: 'index.php',
      type: 'get',
      data: {'id': id, 'quantity': quantity, 'add':add},
      success: function(data, status) {
          
          
          
        console.log("Successful ajax call data :"+data+" status : "+status);  
        
        
        // I want to update the form.
      /*  $.ajax({
    type: "get",
    url: 'index.php',
    data: {'display': display},
    success: function(data, textStatus) {
        console.log("inner success");
    },
    error: function(xhr, textStatus, errorThrown) {
    console.log(xhr+ textStatus);
  }
    
    
});*/
          
    
        
        
        
        
        
      },
      error: function(xhr, desc, err) {
         console.log("Not Successful ajax call");  
      }
      
    }); // end ajax call

});


});