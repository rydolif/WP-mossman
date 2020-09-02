var isopen = false;
var isback=false;
var clickcount=0;
var exit = false;
function initial(){
  
  $('.find').addClass('find--active');
  $('.find__slider').slick({
    
    slidesToShow: 1,
    centerMode: true,
    centerPadding:'0px',
    variableWidth:false,
    adaptiveHeight:true,
    arrows:true,
    dots:false,
    infinite:false,
    autoplay:false,
    speed: 200,
    fade: true,
    cssEase: 'linear',
    draggable: false,
  rows: 0,// удаляет di
  });
  
  $('.find__sub-slider').slick({
  slidesToScroll: 1,
  slidesToShow: 1,
  centerMode: true,
  centerPadding:'0px',
  variableWidth:false,
  adaptiveHeight:false,
  arrows:false,
  dots:true,
  infinite:false,
  autoplay:false,
  speed: 200,
  fade: true,
  cssEase: 'linear',
  draggable: false,
  rows: 0,// удаляет di
  responsive:[
    {
      breakpoint: 768,
      settings:{
        adaptiveHeight:true
      }
    }
  ]
  });
}

$(document).ready(function(){
  $('.modal-free__link').on('click',function(e){
    e.preventDefault();
  });




  $('.top__title').addClass('top__title--active');
  $('.top__subtitle').addClass('top__subtitle--active');
  $('.top__bg').addClass('top__bg--active');
  $('.top__btn').addClass('top__btn--active');
  $('.top__action').addClass('top__action--active');
  $('.top__extra').addClass('top__extra--active');
  $('.top__free').addClass('top__free--active');
  initial();
  $('.contacts__link-moskow').on('click',function(e){
    e.preventDefault();
    $('.contacts__krasnod').fadeOut(300);
    $('.contacts__kasan').fadeOut(300);
    $('.contacts__moskow').fadeIn(300);
  });
  $('.contacts__link-krasnod').on('click',function(e){
    e.preventDefault();
    $('.contacts__moskow').fadeOut(300);
    $('.contacts__kasan').fadeOut(300);
    $('.contacts__krasnod').fadeIn(300);
  });
  $('.contacts__link-kasan').on('click',function(e){
    e.preventDefault();
    $('.contacts__moskow').fadeOut(300);
    $('.contacts__krasnod').fadeOut(300);
    $('.contacts__kasan').fadeIn(300);
  });

  setTimeout(
    function() 
    {
    if (exit == true){
    $('#modal-exit').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
    exit = false;
    }
  }, 5000);


  setTimeout(
    function() 
    {
      exit = true;
    }, 150000);

  $('.modal__phone').mask('+7 (999) 999 99 99');
  $('.modal__phone').on('click', function(){
    
    $(this).prop('selectionStart', 4);
    $(this).prop('selectionEnd', 4);
  })
  function echo_date( date ){
    $('.find__link').removeAttr('href');

    var days = ["воскресение","понедельник","вторник","среда","четверг","пятница","суббота"],
   
        months = ["января","февратя","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря"];
    
        echo_date = function(date){
    
            date = new Date( date );
    
            return {
    
                "date" : date,
    
                "day" : days[ date.getDay() ],
    
                "month" : months[ date.getMonth() ],
    
                "day_num" : date.getDate()
    
            };
    
        }
    
        return echo_date(date);  
    
    };
    
    $(document).on('mouseup', function(e){
      if($('.modal').has(e.target).length === 0){
        $('#modal-consultation').hide();
        $('#modal-download').hide();
        $('#modal-free').hide();
        $('#modal-order').hide();
        $('#modal-exit').hide();
        $('body').removeClass('overflow-hidden');
        $('html').removeClass('overflow-hidden');
      }
    });

    $('.modal-redirect--wrapper').on('mouseup', function(e){
      if($('.modal-redirect').has(e.target).length === 0){
        $('#modal-redirect1').hide();
        $('#modal-redirect2').hide();
        $('#modal-redirect3').hide();
        $('body').removeClass('overflow-hidden');
        $('html').removeClass('overflow-hidden');
      }
    })

    var n=1;
    
    var primer = echo_date( Date.now()+24*n*60*60*1000 );
    
    
    $('.counted__day').text(primer.day_num);
    $('.counted__month').text(primer.month);

    var x=45;
    
    var primerx = echo_date( Date.now()+24*x*60*60*1000 );
    
    
    $('.counted__day--title').text(primerx.day_num);
    $('.counted__month--title').text(primerx.month);
  

    $('.header__burger--wrapper').on('click',function(){
      $(this).toggleClass('header__burger--wrapper--active');
    });

    $('.find__link').on('click', function(event){
      event.preventDefault();
      $('.find').children('.container').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__slide').toggleClass('find__slide--active');
          $('.find__slider').toggleClass('find__slider--active');
          $('.find__sub-slide').toggleClass('find__sub-slide--active');
          $('.find__sub-slider').toggleClass('find__sub-slider--active');
          $('.find__title--wrapper').toggleClass('find__title--wrapper--hidden');
          $('.find__tabs--wrapper').toggleClass('find__tabs--wrapper--hidden');
          $('.models').toggleClass('models--active');
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').slick('refresh');
          if(isback == true)
          {
            $('.find__link').text('Описание');
            isback = false
          }
          else if(isback == false)
          {
            $('.find__link').text('Назад');
            isback = true;
          }
          $('.find').children('.container').removeClass('container--hidden');
        }, 10)

    });

    $('.find__sub-slide').on('click', function(event){
      
      if(isback == false && !($(event.target).is('.find__link')))
          {
            
            event.preventDefault();
      $('.find').children('.container').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__slide').toggleClass('find__slide--active');
          $('.find__slider').toggleClass('find__slider--active');
          $('.find__sub-slide').toggleClass('find__sub-slide--active');
          $('.find__sub-slider').toggleClass('find__sub-slider--active');
          $('.find__title--wrapper').toggleClass('find__title--wrapper--hidden');
          $('.find__tabs--wrapper').toggleClass('find__tabs--wrapper--hidden');
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').slick('refresh');
          if(isback == true)
          {
            $('.find__link').text('Описание');
            isback = false
          }
          else if(isback == false)
          {
            $('.find__link').text('Назад');
            isback = true;
          }
          $('.find').children('.container').removeClass('container--hidden');
        }, 10)
      }
    });


    $('.find__all').on('click', function() {
      
      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      
    });

    
    
    $('.find__tab--classic').on('click', function() {

      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--classic').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.classic');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      
    });

    $('.find__tab--provans').on('click', function() {

      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--provans').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.provans');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      

      
      
    });
    $('.find__tab--modern').on('click', function() {
      
      
      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--modern').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.modern');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      
    });
    $('.find__tab--neoclassic').on('click', function() {
      
      
      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--neoclassic').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.neoclassic');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
    });

    $('.find__tab--scandinavian').on('click', function() {

      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--scandinavian').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.scandinavian');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      
      
    });
    $('.find__tab--loft').on('click', function() {

      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--loft').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.loft');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      
      
      
    });
    $('.find__tab--hi-tech').on('click', function() {
      

      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--hi-tech').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.hi-tech');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      
    });
    $('.find__tab--minimalistic').on('click', function() {
      

      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--minimalistic').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.minimalistic');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      
      
    });
    $('.find__tab--present').on('click', function() {
      

      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--present').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.present');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
      
    });
    $('.find__tab--art-deco').on('click', function() {
      
      $('.find__slider').addClass('container--hidden');
      setTimeout(
        function() 
        {
          $('.find__tab').removeClass('find__tab--active');
          $('.find__all').removeClass('find__tab--active');
          $('.find__tab--art-deco').addClass('find__tab--active');
          $('.find__slider').slick('slickUnfilter');
          $('.find__slider').slick('slickFilter','.art-deco');
          $('.find__slider').slick('slickGoTo',0);
          $('.find__sub-slider').slick('refresh');
          $('.find__slider').removeClass('container--hidden');
        }, 600)
    });


    $('.calc__number').keyup(function(event){
      
      var count = 0;

      if ($(this).val().length >= 2) { 
        $(this).val($(this).val().substr(0, 2));
      }

      count=+$(".calc__number").val();

      if($("#calc1").is(":checked")){
        count = count * 73475;
      }
      else if ($("#calc2").is(":checked")){
        count = count * 36565 ;
      }
      else if ($("#calc3").is(":checked")){
        count = count * 52129;
      }
      else if ($("#calc4").is(":checked")){
        count = count * 37104;
      }
      else if ($("#calc5").is(":checked")){
        count = count * 52710;
      }
      else if ($("#calc6").is(":checked")){
        count = count * 37104;
      }
      else if ($("#calc7").is(":checked")){
        count = count * 35142;
      }
      else if ($("#calc8").is(":checked")){
        count = count * 40541;
      }
      else if ($("#calc9").is(":checked")){
        count = count * 36012;
      }
      else if ($("#calc10").is(":checked")){
        count = count * 42947;
      }
      else{
        count = 0;
      }

      if($(".calc__radio1").is(":checked")){
        // count= +count - (count*0.1);
        
      }
      count = Math.trunc(count);
      
      $('.calc__price').children('span').text(String(count).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));

      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
    }
  });


    $('.calc--wrapper').on('click',function(){
      if($('.calc__price').children('span').text() != '0')
      {
      clickcount++;
      if(clickcount == 2){
        $('#modal-free').show();
        $('body').addClass('overflow-hidden');
        $('html').addClass('overflow-hidden');
      }
    }
      var count = 0;
      count=+$(".calc__number").val();
      console.log(count);
      if($("#calc1").is(":checked")){
        count = count * 73475;
      }
      else if ($("#calc2").is(":checked")){
        count = count * 36565;
      }
      else if ($("#calc3").is(":checked")){
        count = count * 52129;
      }
      else if ($("#calc4").is(":checked")){
        count = count * 37104;
      }
      else if ($("#calc5").is(":checked")){
        count = count * 52710;
      }
      else if ($("#calc6").is(":checked")){
        count = count * 37104;
      }
      else if ($("#calc7").is(":checked")){
        count = count * 35142;
      }
      else if ($("#calc8").is(":checked")){
        count = count * 40541;
      }
      else if ($("#calc9").is(":checked")){
        count = count * 36012;
      }
      else if ($("#calc108").is(":checked")){
        count = count * 42947;
      }
      else{
        count = 0;
      }

      if($(".calc__radio1").is(":checked")){
        // count= +count - (count*0.1);
      }

      count = Math.trunc(count);
      $('.calc__price').children('span').text(String(count).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 '));
      
    });






  
  $('.gift__slider').slick({
    slidesToShow: 3,
    slidesToShow: 1,
    centerMode: true,
    centerPadding:'0px',
    variableWidth:false,
    adaptiveHeight:true,
    pauseOnHover:false,
    arrows:true,
    dots:false,
    infinite:true,
    autoplay:false,
    speed: 600,
    autoplaySpeed: 1100,
    waitForAnimate:true,
    fade: true,
    cssEase: 'ease',
    draggable:false
});

  $('.voting__button--next').on('click', function(){
    if($('.voting__item').children('label').hasClass('voting--checked'))
    {
    $('.voting__item').fadeOut(300);
    
    setTimeout(
      function() 
      {
        $('.voting__item').addClass('voting__item--voted');
    $('.voting--wrapper').addClass('voting--wrapper--voted');
    $('.voting__button').hide();
    $('.voting__button--back').css('display', 'flex');
      }, 300)


      $('.voting__item').fadeIn(300);
      setTimeout(
        function() 
        {
          $('#voting__percent-line1').addClass('voting__percent-line1--active');
          
          $('#voting__percent-line2').addClass('voting__percent-line2--active');
          
          $('#voting__percent-line3').addClass('voting__percent-line3--active');
          
          $('#voting__percent-line4').addClass('voting__percent-line4--active');
          
          $('#voting__percent-line5').addClass('voting__percent-line5--active');
          
        }, 600)
    }
  });

  $('.voting__button--back').on('click', function(){
    $('.voting__item').fadeOut(300);
    
    setTimeout(
      function() 
      {
        $('.voting__item').removeClass('voting__item--voted');
        $('#voting__percent-line1').removeClass('voting__percent-line1--active');
        
        $('#voting__percent-line2').removeClass('voting__percent-line2--active');
        
        $('#voting__percent-line3').removeClass('voting__percent-line3--active');
        
        $('#voting__percent-line4').removeClass('voting__percent-line4--active');
        
        $('#voting__percent-line5').removeClass('voting__percent-line5--active');
        $('.voting--wrapper').removeClass('voting--wrapper--voted');
    $('.voting__button').css('display', 'flex');
    $('.voting__button--back').hide();
      }, 300)

    $('.voting__item').fadeIn(300);
    
  });



  $('.voting__item').children('label').on('click', function(){
    $(this).toggleClass('voting--checked');
  });

  $('.calc__item1').children('label').on('click', function(){
    $('.calc__item1').children('label').removeClass('calc--checked');
    $(this).addClass('calc--checked');
  });

  $('.calc__item2').children('label').on('click', function(){
    $('.calc__item2').children('label').removeClass('calc--checked');
    $(this).addClass('calc--checked');
  });

  $('.calc__item3').children('label').on('click', function(){
    $('.calc__item3').children('label').removeClass('calc--checked');
    $(this).addClass('calc--checked');
  });

  $('.calc__item4').children('label').on('click', function(){
    $(this).toggleClass('calc--checked');
  });

  $('.modal__agreement').children('label').on('click', function(){
    $(this).toggleClass('modal-consultation__check--active');
  });

  $('#modal-consultation__close').on('click', function(){
    $('#modal-consultation').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });

  $('#modal-download__close').on('click', function(){
    $('#modal-download').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });
  $('#modal-free__close').on('click', function(){
    $('#modal-free').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });
  $('#modal-order__close').on('click', function(){
    $('#modal-order').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });

  $('#modal-exit__close').on('click', function(){
    $('#modal-exit').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });

  



  $('.header__phone').children('a').on('click', function(){
    $('#modal-consultation').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
  });
  $('.footer__consultation').on('click', function(e){
    e.preventDefault();
    $('#modal-consultation').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
  });

  // $('.models__download--wrapper').on('click', function(){
  //   $('#modal-download').show();
  //   $('body').addClass('overflow-hidden');
  //   $('html').addClass('overflow-hidden');
  // });
  $('.footer__download').on('click', function(e){
    e.preventDefault();
    $('#modal-download').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
  });

  $('.calc__button').on('click', function(){
    $('#modal-free').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
    
  //ROISTAT BEGIN 
    var form = $('#modal-free form'),
    	sum = $('.calc__golden--wrapper .calc__price span').text(),
    	tech = '';
	   form.find('#input_style,#input_material,#input_type,#input_tech,#input_number,#input_calc_result').remove();
    if(sum.length > 2){
    	$('.calc--wrapper input[name="tech"]:checked').each(function(index){
    		tech += (index == 0) ? $(this).parent().siblings('.voting__text').text().trim() : "," + $(this).parent().siblings('.voting__text').text().trim();
    	});
    	
        form.append('<input type="hidden" name="style" id="input_style" value="' + $('.calc--wrapper input[name="style"]:checked').parent().siblings('.voting__text').text().trim() + '" >');
        form.append('<input type="hidden" name="material" id="input_material" value="' + $('.calc--wrapper input[name="material"]:checked').parent().siblings('.voting__text').text().trim() + '" >');
        form.append('<input type="hidden" name="type" id="input_type" value="' + $('.calc--wrapper input[name="type"]:checked').parent().siblings('.voting__text').text().trim() + '" >');
        form.append('<input type="hidden" name="tech" id="input_tech" value="' + tech + '" >');
        form.append('<input type="hidden" name="number" id="input_number" value="' + $('.calc--wrapper input.calc__number').val() + '" >');
        form.append('<input type="hidden" name="calc_result" id="input_calc_result" value="' + $('.calc__golden--wrapper .calc__price span').text() + '" >'); 
    }
      
    //ROISTAT END
  });

  $('.header__scroll--consultation').on('click', function(){
    $('#modal-consultation').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
  });

  $('.burger__consultation').on('click', function(){
    $('#modal-free').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
  });

  $('.order__button').on('click', function(){
    $('#modal-order').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
  });

  // $('.modal-consultation__submit').on('click', function(e){
  //   e.preventDefault();
  //   $('#modal-consultation').hide();
  //   $('#modal-redirect1').show();
  //
  //   $('body').addClass('overflow-hidden');
  //   $('html').addClass('overflow-hidden');
  //   setTimeout(
  //     function()
  //     {
  //      window.open('https://www.kuhnicity.ru/portfolio/', '_blank');
  //     }, 5000)
  // });

  $('#modal-redirect1__close').on('click', function(){
    $('#modal-redirect1').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });

  // $('#modal-order__submit').on('click', function(e){
  //   e.preventDefault();
  //   $('#modal-order').hide();
  //   $('#modal-redirect1').show();
  //
  //   $('body').addClass('overflow-hidden');
  //   $('html').addClass('overflow-hidden');
  //   setTimeout(
  //     function()
  //     {
  //      window.open('https://www.kuhnicity.ru/portfolio/', '_blank');
  //     }, 5000)
  // });

  $('#modal-redirect1__close').on('click', function(){
    $('#modal-redirect1').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });

  // $('#modal-download__btn').on('click', function(e){
  //   e.preventDefault();
  //   $('#modal-download').hide();
  //   $('#modal-redirect2').show();
  //
  //   $('body').addClass('overflow-hidden');
  //   $('html').addClass('overflow-hidden');
  //   setTimeout(
  //     function()
  //     {
  //      window.open('https://www.kuhnicity.ru/portfolio/', '_blank');
  //     }, 5000)
  // });

  $('#modal-redirect2__close').on('click', function(){
    $('#modal-redirect2').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });

  // $('#modal-exit__submit').on('click', function(e){
  //   e.preventDefault();
  //   $('#modal-exit').hide();
  //   $('#modal-redirect3').show();
  //
  //   $('body').addClass('overflow-hidden');
  //   $('html').addClass('overflow-hidden');
  //   setTimeout(
  //     function()
  //     {
  //      window.open('www.kuhnicity.ru/portfolio', '_blank');
  //     }, 5000)
  // });

  $('#modal-redirect3__close').on('click', function(){
    $('#modal-redirect3').hide();
    $('body').removeClass('overflow-hidden');
    $('html').removeClass('overflow-hidden');
  });


  $(document).on('mouseleave',function(){
    if (exit == true){
    $('#modal-exit').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
    exit = false;
    }
  });
  

  



function echo_date( date ){
 
  var days = ["воскресение","понедельник","вторник","среда","четверг","пятница","суббота"],
 
      months = ["января","февратя","марта","апреля","мая","июня","июля","августа","сентября","октября","ноября","декабря"];
  
      echo_date = function(date){
  
          date = new Date( date );
  
          return {
  
              "date" : date,
  
              "day" : days[ date.getDay() ],
  
              "month" : months[ date.getMonth() ],
  
              "day_num" : date.getDate()
  
          };
  
      }
  
      return echo_date(date);  
  
  };
  
   
  
  var n=2;
  
  var primer = echo_date( Date.now()+24*n*60*60*1000 );
  
  
  $('#counted__day').text(primer.day_num);
  $('#counted__month').text(primer.month);


  // if($(window).scrollTop() >= $('.reputation').offset().top) {
     
  //   $.Tween.propHooks.number = {
  //     get: function ( tween ){
  //         var num = tween.elem.innerHTML.replace(/^[^\d-]+/, '');
  //         return  parseFloat(num) || 0;
  //     },
      
  //   set: function( tween ) {
  //         var opts = tween.options;
  //         tween.elem.innerHTML = (opts.prefix || '')
  //         + tween.now.toFixed(opts.fixed || 0)
  //         + (opts.postfix || '');
  //   }
  // };


$('.reputation__phone').removeClass('reputation__phone--hidden');

$('#reputation1')
.animate({ number: 4.35 }, {
    duration: 1000,
    fixed: 2
});

$('#reputation2')
.animate({ number: 4.4 }, {
    duration: 1000,
    fixed: 2
});

$('#reputation3')
.animate({ number: 4.7 }, {
    duration: 1000,
    fixed: 2
});

$('#review1')
.animate({ number: 337 }, {
    duration: 1000,
    fixed: 0
});

$('#review2')
.animate({ number: 21 }, {
    duration: 1000,
    fixed: 0
});

$('#review3')
.animate({ number: 86 }, {
    duration: 1000,
    fixed: 0
});

  // }


});


$(window).on('scroll', function(){

  // if($(window).scrollTop() >= ($('.reputation').offset().top - 200))
  // {
     
//   $.Tween.propHooks.number = {
//     get: function ( tween ){
//         var num = tween.elem.innerHTML.replace(/^[^\d-]+/, '');
//         return  parseFloat(num) || 0;
//     },
    
// 	set: function( tween ) {
//         var opts = tween.options;
//         tween.elem.innerHTML = (opts.prefix || '')
//         + tween.now.toFixed(opts.fixed || 0)
//         + (opts.postfix || '');
// 	}
// };

// if($(window).scrollTop() >= ($('.gift').offset().top - 300))
//   {
//     $('.gift__slider').slick('slickSetOption','autoplay',true).slick('refresh');
//   }


$('.reputation__phone').removeClass('reputation__phone--hidden');

$('#reputation1')
.animate({ number: 4.35 }, {
    duration: 1000,
    fixed: 2
});

$('#reputation2')
.animate({ number: 4.4 }, {
    duration: 1000,
    fixed: 2
});

$('#reputation3')
.animate({ number: 4.7 }, {
    duration: 1000,
    fixed: 2
});

$('#review1')
.animate({ number: 337 }, {
    duration: 1000,
    fixed: 0
});

$('#review2')
.animate({ number: 21 }, {
    duration: 1000,
    fixed: 0
});

$('#review3')
.animate({ number: 86 }, {
    duration: 1000,
    fixed: 0
});

  // }

  if($(window).scrollTop() >= ($('.models').offset().top - 400)){
    $('.models__booklet').addClass('models__booklet--active');
    $('.models__title').addClass('models__title--active');
    $('.models__download--wrapper').addClass('models__download--wrapper--active');
  }

  // if($(window).scrollTop() >= ($('.stars__title').offset().top - 500)){
  //   $('.stars__title').addClass('stars__title--active');
  // }

  // if($(window).scrollTop() >= (($('.calc').offset().top) + 300)){
  //   $('.calc__button').addClass('calc__button--active');
  // }
  // if($(window).scrollTop() >= (($('.order').offset().top) - 600)){
  //   $('.order__img').addClass('order__img--active');
  //   $('.order__button').addClass('order__button--active');
  //   $('.order__title').addClass('order__title--active');
  //   $('.order__text').addClass('order__text--active');
  // }

  if($(window).scrollTop() >= 80){
    $('.header__scroll').fadeIn(200);
  }
  if($(window).scrollTop() < 80){
    $('.header__scroll').fadeOut(200);
  }


//---------------------------js-----------------------
  $('.tabs__wrap').hide();
  $('.tabs__wrap:first').show();
  $('.tabs ul a:first').addClass('active');
  $('.tabs ul a').click(function(event){
    event.preventDefault();
    $('.tabs ul a').removeClass('active');
    $(this).addClass('active');
    $('.tabs__wrap').hide();
    var selectTab = $(this).attr('href');
    $(selectTab).fadeIn();
  });

//-------------------------------попандер---------------------------------------
  // $('.modal').popup({transition: 'all 0.3s'});

// //------------------------------------form-------------------------------------------
//   $('input[type="tel"]').mask('+0 (000) 000-00-00');

//   jQuery.validator.addMethod("phoneno", function(phone_number, element) {
//     return this.optional(element) || phone_number.match(/\+[0-9]{1}\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}/);
//   }, "Введите Ваш телефон");

//   $(".form").each(function(index, el) {
//     $(el).addClass('form-' + index);

//     $('.form-' + index).validate({
//       rules: {
//         phone: {
//           required: true,
//           phoneno: true
//         },
//         name: 'required',
//       },
//       messages: {
//         name: "Введите Вашe Имя",
//         phone: "Введите Ваш телефон",
//       },
//       submitHandler: function(form) {
//         var t = {
//           name: jQuery('.form-' + index).find("input[name=name]").val(),
//           phone: jQuery('.form-' + index).find("input[name=phone]").val(),
//         };
//         ajaxSend('.form-' + index, t);
//       }
//     });

//   });

//   function ajaxSend(formName, data) {
//     jQuery.ajax({
//       type: "POST",
//       url: "wp-content/themes/mossman/sendmail.php",
//       data: data,
//       success: function() {
//         $(".modal").popup("hide");
//         $("#thanks").popup("show");
//         setTimeout(function() {
//           $(formName).trigger('reset');
//         }, 2000);
//       }
//     });
//   }


});

