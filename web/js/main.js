$(function(){ //doc ready

  /*Resize the window
  var h = $(window).height();   
  if(h < 400)
  {
    $("#flags").css('height',400);         
  }
  else
  {
    $("#flags").css('height',h-20);               
  }       
      
  $(window).resize(function()
  {
    var h = $(window).height();   
    if(h < 400)
    {
      $("#flags").css('height',400);            
    }
    else
    {
      $("#flags").css('height',h-20);                             
    }       
  }); 

  $('#flags').jScrollPane();	*/

    $("#flags img").mouseover(function(){
    $(this).css('filter','alpha(opacity=50)').css('-moz-opacity','.50').css('opacity','.50');
    }).mouseout(function(){
    $(this).css('filter','alpha(opacity=100)').css('-moz-opacity','1').css('opacity','1');
    });     
});

  //Functions
  function addCss(cssname)
  {
    //Add commentForm Stylesheet
    $("head").append("<link>");
    css = $("head").children(":last");
    css.attr({
    rel:  "stylesheet",
    type: "text/css",
    href: "/css/"+cssname+".css"
    });
  }
