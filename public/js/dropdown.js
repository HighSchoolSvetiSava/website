$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
  $('#cssmenu #menu-button').click(function(){
    var menu = $(this).next('ul');
    if (menu.hasClass('open')) {
      menu.removeClass('open');
    } else {
      menu.addClass('open');
    }
});