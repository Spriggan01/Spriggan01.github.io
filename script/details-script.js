// Details //
$(function() {

    function showDetails(details) {
      $('#details-modal .modal-details-content').html(details);
      $('#details-modal').modal();
    }
    
    $('.btn-phone-more').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        
        $.ajax({
          url: 'details.php',
          type: 'GET',
          data: {details: 'add', id: id},
          dataType: 'json',
          success: function (res) {
            if (res.code == 'ok') {
              showDetails(res.answer);
            } else {
              alert('ERROR');
            }
          },
          error: function () {
            alert('error');
          }
        });
    });

    // Get-details
  $('#get-details').on('click', function (e) {
    e.preventDefault();
    
    $.ajax({
      url: 'details.php',
      type: 'GET',
      data: {details: 'show'},
      success: function (res) {
        showDetails(res);
      },
      error: function () {
        alert('error');
      }
    });
  });
    
  });