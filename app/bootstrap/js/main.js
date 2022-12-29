(function($){
"use strict";
$('.contar').counterUp({
    time:1000,
    delay:10
});


// deixa lento qdo clicar nos links , perceiros, cursos 
var $doc = $('html,body');
$('.scroll-page').click(function(){
    $doc.animate({
        scrollTop: $($.attr(this,'href')).offset().top

},1000); // tempo em ms 
return false;

})


})(jQuery);