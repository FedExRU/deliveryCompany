$(document).ready(function(){

	$(document).on('click', 'form .has-errors input', function(){
		$(this).parents('.form-group').removeClass('has-errors');
	})

	$('.fast-buy').click(function(e){
    var button = $(this);
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "/order/modal",
      data: {
       'good_id': button.attr('data-good-id') 
      },
      method: 'POST',
      success: function(form){
      	$(form).modal();
      },
      error: function( json ){ 
        console.log(json);
      },    
    });
  });

  $(document).on('hidden.bs.modal', '#modal-form', function(){
  	$('#modal-form').remove();
  })

  $(document).on('submit', '.ajax-form', function(e){
    e.preventDefault();
    var form = $(this),
        data = form.serializeArray();
    prepareAjax();
    $.ajax({
      url: form.attr('action'),
      data: data,
      method: form.attr('method'),
      success: function(responce){
        $('#modal-form').modal('hide');
        showSuccessModalOrder(responce);
      },
      error: function( errors ){
        presentFormErrors(form, errors.responseJSON.errors);
      },    
    });
  })

  $(document).on('focus', '.ajax-error-popover', function(){
    $(this).popover('hide');
  })

  $(document).on('hidden.bs.popover', '.ajax-error-popover', function(){
    $(this).popover('dispose');
  })

  function showSuccessModalOrder(order){
    console.log( order.order);
    console.log('------------------------');
    prepareAjax();
    $.ajax({
      url: '/order/success',
      data: {
        'order' : order.order
      },
      method: 'POST',
      success: function(form){
        $(form).modal();
        console.log(form);
      },
      error: function( errors ){
        console.log(errors);
      },    
    });
  }

  function prepareAjax(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  }

  function presentFormErrors(form, errors){
    $(form).find('input').each(function(){
      var input = $(this),
          textError = errors[input.attr('name')],
          formGroup = input.parents('.form-group');
      if(typeof textError !== 'undefined'){

        var popoverClass = 'ajax-error-popover',
            popoverSpesificClass = popoverClass+'-'+input.attr('name');

        input.addClass(popoverClass)
             .addClass(popoverSpesificClass);

        $('.'+popoverSpesificClass).popover({
          content : textError[0],
          placement: 'top',
        });

        $('.'+popoverSpesificClass).popover('show');
        
        changePopoverBackground($('.'+popoverSpesificClass).attr('aria-describedby'), 'alert-danger');

        formGroup.addClass('has-errors');
      }
    })
  }

  function changePopoverBackground(popoverId, $class){
    var popover = $('#'+popoverId);
    popover.addClass($class).find('.popover-body').addClass($class);
  }

})