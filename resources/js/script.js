/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/*$(document).ready(function(){
    $("#complete-dropdown").click(function(e){
        alert('Shutup Meg!');
        e.preventDefault();
    });
});*/

function work(e,f,oid){
    $('#'+f).removeClass('fa-files-o');
    $('#'+f).addClass('fa-spinner fa-pulse');
    $('#'+e).prop('disabled',true);
    $('#'+e).prop('value','Please Wait...');
    processorder(oid);
    $('#'+f).removeClass('fa-spinner fa-pulse');
    $('#'+f).addClass('fa fa-check');
    $('#'+e).prop('value','Order Taken');
    $('#'+e).removeClass('btn btn-info');
    $('#'+e).addClass('btn btn-success');
}



function complete(oid,baseid){
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        xmlhttp.open("POST",baseid+"/index.php/orders/complete/"+oid,true);
        xmlhttp.send();
        setTimeout( function() {
            window.location = baseid+"/index.php/orders/history";
        }, 1000 );



    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
}

function incomplete(oid,baseid){
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
        xmlhttp.open("POST",baseid+"/index.php/orders/incomplete/"+oid,true);
        xmlhttp.send();
        setTimeout( function() {
            window.location = baseid+"/index.php/orders/history";
        }, 1000 );

    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
}



