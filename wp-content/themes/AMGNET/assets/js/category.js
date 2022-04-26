$(document).ready(function(){
    var url_home = $( "#url-home" ).val();
    $paged = 2;
    $( "#btnViewmore" ).click(function() {
          var name = $.trim($('#input-news').val());
          var category = $.trim($('#input-category').val());
          var offset = $.trim($('#offset').val());

          $.ajax({
             type : "GET", 
             dataType : "json", 
             contentType: "application/json; charset=utf-8",
             url : url_home+"/wp-admin/admin-ajax.php",
             data : {
                action: "news", 
                slug: name,
                category: category,
                offset: offset,
                paged: $paged,
             },
             beforeSend: function(){

             },
             success: function(response) {
               //  alert(response.data.test);
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