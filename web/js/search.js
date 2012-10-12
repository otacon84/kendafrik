$(document).ready(function()
{
  $('#search_keywords').keyup(function(key)
  {         
    if (this.value.length >= 3 || this.value == '')
    {
      $('#loader').fadeIn();
      addCss('index');
      $('#contenu').load(
        $(this).parents('form').attr('action'),
        { keywords: this.value + '*' },
        function() { $('#loader').hide(); }
      );
    }
    if (this.value.length == 0)
    {
      $('#loader').fadeIn();
      addCss('index');
      $('#contenu').load(
        $(this).parents('form').attr('action'),
        { keywords: 0 },
        function() { $('#loader').hide(); }
      );
    }    
  });
});
