$('.lightbox_trigger').click(function(e) {

    //prevent default action (hyperlink)
    e.preventDefault();

    //Get clicked link href
    var _href = $(this).attr("href");

    /* 	
     If the lightbox window HTML already exists in document, 
     change the img src to to match the href of whatever link was clicked
     
     If the lightbox window HTML doesn't exists, create it and insert it.
     (This will only happen the first time around)
     */

    if ($('#lightbox').length > 0) { // #lightbox exists

        //place href as img src value
        $('#content').html('<img src="' + _href + '" />');

        //show lightbox window - you could use .show('fast') for a transition
        $('#lightbox').show();
    }

    else { //#lightbox does not exist - create and insert (runs 1st time only)

        //create HTML markup for lightbox window
        var lightbox =
                '<div id="lightbox">' +
                '<div id="content">' + //insert clicked link's href into img src
                '<p id="x_close">X</p>' +
                '<img src="' + _href + '" />' +
                '</div>' +
                '</div>';

        //insert lightbox HTML into page
        $('body').append(lightbox);
    }

});

//Click anywhere on the page to get rid of lightbox window
$('#lightbox').live('click', function() { //must use live, as the lightbox element is inserted into the DOM
    $('#lightbox').hide();
});


//
////$(document).ready(function (){
//    $('.lightbox').click(function (){
//        $('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
//        $('.box').animate({'opacity':'1.00'}, 300, 'linear');
//        $('.backdrop, .box').css('display', 'block');
//    });
//    
//    $('.close').click(function (){
//       close_box(); 
//    });
//    
//    $('.backdrop').click(function (){
//        close_box();
//    });
//});
//
//function close_box()
//{
//    $('.backdrop, .box').animate({'opacity':'.0'}, 300, 'linear', function (){
//        $('.backdrop, .box').css('display', 'none');
//    });
//}