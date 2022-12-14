// Add to cart //
$(function() {

  function showCart(cart) {
    $('#cart-modal .modal-cart-content').html(cart);
    $('#cart-modal').modal();

    let cartQty = $('#modal-cart-qty').text() ? $('#modal-cart-qty').text() : 0;
    $('.mini-cart-qty').text(cartQty);
  }

  // Add-to-cart
  $('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    let id = $(this).data('id');
    
    $.ajax({
      url: 'cart-new_phones.php',
      type: 'GET',
      data: {cart: 'add', id: id},
      dataType: 'json',
      success: function (res) {
        if (res.code == 'ok') {
          showCart(res.answer);
        } else {
          alert('ERROR');
        }
      },
      error: function () {
        alert('error');
      }
    });
  });

  // Get-cart
  $('#get-cart').on('click', function (e) {
    e.preventDefault();
    
    $.ajax({
      url: 'cart-new_phones.php',
      type: 'GET',
      data: {cart: 'show'},
      success: function (res) {
        showCart(res);
      },
      error: function () {
        alert('error');
      }
    });
  });

  // Clear-cart
  $('#cart-modal .modal-cart-content').on('click', '#clear-cart', function () {
    $.ajax({
      url: 'cart-new_phones.php',
      type: 'GET',
      data: {cart: 'clear'},
      success: function (res) {
        showCart(res);
      },
      error: function () {
        alert('error');
      }
    });
  });
  
});