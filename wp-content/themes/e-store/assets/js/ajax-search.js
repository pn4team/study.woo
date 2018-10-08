jQuery(function($){
  $('.search_form input[name="s"]').on('keyup', function () {
    var search = $('.search_form input[name="s"]').val();
    if (search.length < 4) {
      return false;
    }
    var data = {
      s:search,
      action: 'search-ajax',
      nonce: search_form.nonce
    };
    $.ajax({
      url: search_form.url,
      data: data,
      type: 'POST',
      dataType: 'json',
      beforeSend: function(xhr){
      },
      success: function(data){
        $('.search_form .search-result').html(data.out)
        console.log(search);
      },
    })
    
  });
});