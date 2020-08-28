$('form.modal-consultation__form2').submit(function (e) {
  e.preventDefault();
  var form = $(this), button = $(this).find('.modal-consultation__submit'), thanks = $(this).siblings('.thankBlock');

  $.post('form.php', form.serialize(), function (data) {
    $('#modal-consultation, #modal-order').hide();
    $('#modal-redirect1').show();
    yaCounter28420846.reachGoal('consult_zayavka');
    $('body').addClass('overflow-hidden');
      $('html').addClass('overflow-hidden');
      setTimeout(
        function()
        {
         window.open('https://www.kuhnicity.ru/portfolio/', '_blank');
        }, 5000)
  });
});

$('form.modal-order__form').submit(function (e) {
  e.preventDefault();
  var form = $(this), button = $(this).find('.modal-consultation__submit'), thanks = $(this).siblings('.thankBlock');

  $.post('form.php', form.serialize(), function (data) {
    $('#modal-consultation, #modal-order').hide();
    $('#modal-redirect1').show();
    yaCounter28420846.reachGoal('expert_zayavka');
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
    setTimeout(
        function()
        {
          window.open('https://www.kuhnicity.ru/portfolio/', '_blank');
        }, 5000)
  });
});

$('form.modal-download__form2').submit(function (e) {
  e.preventDefault();
  var form = $(this), button = $(this).find('.modal-consultation__submit');

  $.post('form.php', form.serialize(), function (data) {
    $('#modal-exit, #modal-download').hide();
    $('#modal-redirect2').show();
      $('body').addClass('overflow-hidden');
      $('html').addClass('overflow-hidden');
      yaCounter28420846.reachGoal('kat_zayavka');
    setTimeout(
        function()
        {
         window.open('https://www.kuhnicity.ru/portfolio', '_blank');
        }, 5000)
  });
});

$('form.modal-exit__form').submit(function (e) {
  e.preventDefault();
  var form = $(this), button = $(this).find('.modal-consultation__submit');

  $.post('form.php', form.serialize(), function (data) {
    $('#modal-exit, #modal-download').hide();
    $('#modal-redirect3').show();
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
    //yaCounter28420846.reachGoal('kat_zayavka');
    setTimeout(
        function()
        {
          window.open('https://www.kuhnicity.ru/portfolio', '_blank');
        }, 5000)
  });
});

$('form.modal-free__form').submit(function (e) {
  e.preventDefault();
  var form = $(this), button = $(this).find('.modal-consultation__submit'), thanks = $(this).siblings('.thankBlock');

  $.post('form.php', form.serialize(), function (data) {
    $('#modal-consultation, #modal-free').hide();
    $('#modal-redirect1').show();
    yaCounter28420846.reachGoal('hochu_zayavka');
    $('body').addClass('overflow-hidden');
    $('html').addClass('overflow-hidden');
    setTimeout(
        function()
        {
          window.open('https://www.kuhnicity.ru/portfolio/', '_blank');
        }, 5000)
  });
});
