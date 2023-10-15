

// form repeater
$(document).ready(function(){
    $('.repeater').repeater({
        initEmpty: false,
        defaultValues: {
            'text-input': ''
        },
        show:function(){
            $(this).slideDown();
        },
        hide: function(deleteElement){
            $(this).slideUp(deleteElement);
            setTimeout(() => {
                generateCV();
            }, 500);
        },
        isFirstItemUndeletable: true
    })
})

// function myFunction() {
//     const element = document.getElementById("fullname_dsp");
//     element.remove();
//   }

// firstnameElem.addEventListener('keyup',()=>{
//       myFunction();
//   });