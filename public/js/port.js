/*
* Here is how you use it
*/
$(function(){
    $('#full_resume').on('click',function(){
      $('#full_R').bPopup({
            easing: 'easeOutBack', //uses jQuery easing plugin
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('#single_resume').on('click',function(){
      $('#single_R').bPopup({
            easing: 'easeOutBack', //uses jQuery easing plugin
            speed: 450,
            transition: 'slideDown'
        });
    });
})
