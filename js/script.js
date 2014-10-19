/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('.minus').on( "click", function() {
    var obj=$(this).closest("tr");
    var id=obj.attr('id');
    
    //console.log("id  "+$(this).closest("tr").attr('id'));
    var current=parseInt(obj.children().eq(2).children().eq(0).attr('value'));
    console.log(current);   
    if(current<1){
        console.log("Warning You cannot have a quantity < 0");
    }else{
       $(this).closest("tr").children().eq(2).children().eq(0).attr('value',current-1);
    }
 
});

$('.plus').on("click", function() {
    var obj=$(this).closest("tr");
    var id=obj.attr('id');
    
    //console.log("id  "+$(this).closest("tr").attr('id'));
    var current=parseInt(obj.children().eq(2).children().eq(0).attr('value'));
    console.log(current);   
    if(current<0){
        console.log("Warning You cannot have a quantity < 0");
    }else{
       $(this).closest("tr").children().eq(2).children().eq(0).attr('value',current+1);
    }
});


function item(id,title,quantity) {
    this.id=id;
    this.title=title;
    this.quantity=quantity;
   
}

// create object Item with id,title,id.
// grab the div id- use it as an id.
// grab the quantity
/*
 * For each <TR>
 * 
 * 
 */
var itemList=[];
var counter=0;
$("tr").each(function() {
    var trID=$(this).attr('id');
    var trValue="";
    // new object
    
    
    $("td").each(function() {
        if($(this).children().hasClass('plus')||$(this).children().hasClass('minus')){
            
        }
        else{
            if($(this).children().hasClass('quantity')){
                trValue=$(this).children().attr('value');
                var item1= new item(trID,"",trValue);
                itemList[counter]=item1; 
                counter++;
            }
        }
        
    });



    // compare id to what you want
});


/*
var jsonString = JSON.stringify(dataArray);
function postData()
{   
    $.ajax({ type: "POST",
             url: "Action_Add.php",
             data: {data:jsonString},//no need to call JSON.stringify etc... jQ does this for you
             cache: false,
             success: function(response)
             {//check response: it's always good to check server output when developing...
                 console.log(response);
                 alert('You will redirect in 10 seconds');
                 setTimeout(function()
                 {
                     //just added timeout to give you some time to check console
                    window.location = 'Action_Add.php';
                 },10000);
             }
    });

}*/