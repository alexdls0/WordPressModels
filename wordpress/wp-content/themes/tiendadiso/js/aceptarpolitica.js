jQuery(document).ready(function( $ ) {
    var midiv = document.getElementById("formulariocomentarios");
    if ( $("#texto-consent").length > 0 ) {
        if(midiv){
            $("#submit").attr("disabled", true);
            $("#consent").on("change", function(e){
                if($("#consent").attr("checked")){
                    $('#submit').attr("disabled", false);
                } else {
                    $("#submit").attr("disabled", true);
                }
            })
        }
    }
    
    //MASONRY
    var msnry = new Masonry(  document.querySelector('.grid'), {
      itemSelector: '.grid-item',
      isFitWidth: true
    });
    
    //SCROLL SUAVE
    $('a.smooth').live('click', function(e) {  
        e.preventDefault();
        var link = $(this);  
        var anchor  = link.attr('href');  
        $('html, body').stop().animate({  
            scrollTop: $(anchor).offset().top - ($('#menu').height())
        }, 1000, 'easeOutBack');  
    });  
});