$(function() {
  $('#sub').click (function () {

      $.ajax({
          url: "json.php",
          type: "post",
          dataType: "text",
          data:{'name':$('#name').val(),'email':$('#email').val()}

      }).done(function (response) {
        alert(response);
          var array = JSON.parse(response);
          $("div#info").html('<div class="" id="">' + array + '</div>');

      }).fail(function (xhr,textStatus,errorThrown) {
          alert('error');
      });
  });
});