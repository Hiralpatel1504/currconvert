$('#currconvt2').on('submit',function(){
  var that = $(this),
    contents = that.serialize();

  $.ajax({
    url: 'currconvt2.php',
    dataType: 'json',
    type: 'get',
    data: contents,
    success: function(data){
        alert("result is" + data.result);
        //alert("res is" + json.quotes.USDGBP);
    }
  });
  return false;
});
