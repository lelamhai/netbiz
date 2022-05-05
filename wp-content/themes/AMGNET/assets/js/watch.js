$(document).ready(function(){
    var url_home = $( "#url-home" ).val();
    $paged = 2;
    $( "#btnViewmore" ).click(function() {
          $.ajax({
             type : "GET", 
             dataType : "json", 
             contentType: "application/json; charset=utf-8",
             url : url_home+"/wp-admin/admin-ajax.php",
             data : {
                action: "watch", 
                paged: $paged,
             },
             beforeSend: function(){

             },
             success: function(response) {
                var html = $.parseHTML( response.data.html );
                $( "#h-loadmore" ).append( html );
                if(response.data.isCount)
                {
                   $( "#btnViewmore" ).css("display", "none");
                }
             },
             error: function( jqXHR, textStatus, errorThrown ){
                console.log( 'The following error occured: ' + textStatus, errorThrown );
             }
          });
       $paged ++;
    });
 });