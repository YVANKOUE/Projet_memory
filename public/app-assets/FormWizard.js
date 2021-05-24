  $(document).ready(function(){
    let OUI = $('#OUI');
    let NON = $('#NON');
    let form1 = $('#forme1');
    let form2 = $('#forme2');
    let form3 = $('#forme3');
    let submit1 = $('#submit1');
    let BACK1 = $('#BACK1');
    let BACK2 = $('#BACK2');
    let submit2 = $('#submit2');
    let lien = $('#lien');

    $(form1).show();
    $(form2).hide();
    $(form3).hide();

    $(NON).click(function (e) {
      e.preventDefault();
         $(form1).hide();
          $(form2).hide();
          $(form3).show();
          
        });
        
    $(OUI).click(function (e) {
      e.preventDefault();
         $(form1).hide();
          $(form2).show();
          $(form3).hide();
          
        });
        $(BACK1).click(function (e) {
          e.preventDefault();
             $(form1).show();
              $(form2).hide();
              $(form3).hide();
              
            });
            $(BACK2).click(function (e) {
              e.preventDefault();
                 $(form1).show();
                  $(form2).hide();
                  $(form3).hide();
                  
                });
            $(lien).click(function (e) {
              e.preventDefault();
                 $(form1).hide();
                  $(form2).hide();
                  $(form3).show();
                  
                });
        // $(non).click(function (e) {
        // e.preventDefault();
        // $(step1).show();
        // $(step0).hide();
        // $(no).hide();
        // $(dontno).show();
        // $(dontno1).show();
        // $(dontno2).show();
        // $(dontno3).show();
        // $(step3).hide();
        // $(prev).hide();
//         $(Prev).show();
//         $(Next).show();
// });
// $(oui).click(function (e){
//   e.preventDefault();
//   $(step1).show();
//   $(step0).hide();
//   $(no).show();
//   $(dontno).hide();
//   $(dontno1).hide();
//   $(dontno2).hide();
//   $(dontno3).hide();
  // $(step3).hide();
  // $(prev).hide();
//   $(Prev).show();
//   $(Next).show();
// });
//   $(Next).click(function (e) {
//     e.preventDefault();
//     $(step1).hide();
//     $(step2).show();
//     $(no).hide();
//     // $(step3).hide();
//     // $(prev).hide();
//     $(prev).show();
//     $(Prev).hide();
//     $(Next).hide();
//     $(save).show();
// });

//   $(prev).click(function (e) {
//     e.preventDefault();
//     $(step2).hide();
//     $(no).hide();
//     $(step1).show();
//     $(Prev).show();
//     // $(step3).hide();
//     // $(prev).hide();
//     $(save).hide();
//     $(Next).show();
// });
// $(Prev).click(function (e) {
//   e.preventDefault();
//   $(step0).show();
//   $(step1).hide();
//   // $(step3).hide();
//   $(no).hide();
//   // $(prev).hide();
//   $(Prev).hide();
//   $(save).hide();
// });

  // });
});
