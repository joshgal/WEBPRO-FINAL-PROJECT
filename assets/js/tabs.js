$(document).ready(function(){
  $('#tab1').click(function(){
    $('#view1').show();
    $('#view2').hide();
    $('#view3').hide();
  });

  $('#tab2').click(function(){
    $('#view1').hide();
    $('#view2').show();
    $('#view3').hide();
  });

  $('#btnView2').click(function(){
    $('#view1').hide();
    $('#view2').show();
    $('#view3').hide();
  });

  $('#tab3').click(function(){
    $('#view1').hide();
    $('#view2').hide();
    $('#view3').show();
  });

  $('#btnView3').click(function(){
    $('#view1').hide();
    $('#view2').hide();
    $('#view3').show();
  });

});
