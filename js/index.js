$(function() {


  $("a#inline").fancybox({

  });

  $('form#form').submit(function(e){
    var name = $("#pname").val();
    var price = $("#pprice").val();

    if(name.length==0){
      $("#pnameHelp").show();
      return false;
    }

    if(price.length==0){

      $("#ppriceHelp").show();
      return false;
    }
    $("#pnameHelp").hide();
    $("#ppriceHelp").hide();
    $.fancybox.close();

    return true;

  })
/*  $("#addProduct").click(function(){


    var name = $("#pname").val();
    var price = $("#pprice").val();
    if(name.length!==0 && price.length!==0){
    $.ajax({

      url: '/',
      type: 'POST',
      contentType: "application/json; charset=utf-8",
      data: {
             name:name,
             price:price
          },
      success: function(data){
        alert("Ваши данные загружены!")

      }
    });

    $("#pnameHelp").hide();
    $("#ppriceHelp").hide();
    $.fancybox.close();
  }else if(name.length==0){

    $("#pnameHelp").show();
  }else if(price.length==0){

    $("#ppriceHelp").show();
  }
  });*/



})
