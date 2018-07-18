 $(document).ready(function(){
    console.log('ready');


        var button = document.getElementById('nextstep');
        var step1 = document.getElementById('step1');
        var step2 = document.getElementById('step2');
        var step3 = document.getElementById('step3');

         // function name1() {
         //     console.log('Test click');
         //    $(step1).addClass('displaynone');
         // }

     $(button).on('click', function(e){
         e.preventDefault();
         console.log('Start check rules of fields - no fields Test click');
         $(step1).addClass('displaynone');

         $(step2).removeClass('displaynone');

         $('#number1').removeClass('active');

         $('#number2').addClass('active');
         $('#current').text(2);
     });


     $('.lunchStep3').on('click', function(e){
         e.preventDefault();
         console.log('Second event check rules of fields - no fields Test click');
         $(step2).addClass('displaynone');

         $(step3).removeClass('displaynone');

         $('#number2').removeClass('active');

         $('#number3').addClass('active');
         $('#current').text(3);
     });

     $('#endorder').on('click', function(e){
         e.preventDefault();
         alert('Product Send Success to DB');
         console.log('Back to start  - no fields Test click');
         $(step3).addClass('displaynone');

         $(step1).removeClass('displaynone');

         $('#number3').removeClass('active');

         $('#number1').addClass('active');

         $('#current').text(1);
     });







 });
