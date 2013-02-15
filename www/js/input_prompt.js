$(document).ready(function(){
  $('input.with-prompt[type=text][title],input.with-prompt[type=password][title],textarea.with-prompt[title]').each(function(i){
    $(this).addClass('input-prompt-' + i);
    var promptSpan = $('<span class="input-prompt"/>');
    $(promptSpan).attr('id', 'input-prompt-' + i);
    $(promptSpan).append($(this).attr('title'));
    $(promptSpan).click(function(){
      $(this).hide();
      $('.' + $(this).attr('id')).focus();
    });
    if($(this).val() != ''){
      $(promptSpan).hide();
    }
    $(this).before(promptSpan);
    $(this).focus(function(){
      $('#input-prompt-' + i).hide();
    });
    $(this).blur(function(){
      if($(this).val() == ''){
        $('#input-prompt-' + i).show();
      }
    });
  });
});