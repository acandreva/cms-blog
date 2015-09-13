$(document).ready( function () {

//BACKSTRETCH
    $('#masthead').backstretch("http://www.allisoncandreva.com/wp/wp-content/themes/blog-template-allisonlogan/images/background.jpg");

//SEARCH FORM
    $('#search_image').on("click", function( event ) {
        event.preventDefault();
        $('#search_image').hide();
        $('#search_tool').show('slow');
    });

});