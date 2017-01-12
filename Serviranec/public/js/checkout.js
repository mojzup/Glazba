Stripe.setPublishableKey('pk_test_5Ho4UQItgbFe3DaMjFCuvyWy');

var $form = $('#checkout-form');
$('#charge-error').addClass('hidden');
$form.find('button').prop('disabled', true);
$form.submit(function(event){
	Stripe.card.createToken({
	  number: $('#card-number').val(),
	  cvc: $('#card-cvc').val(),
	  exp_month: $('#card-expiry-month').val(),
	  exp_year: $('#card-expiry-year').val(),
	  name: $('#card-name').val()
	}, stripeResponseHandler);
	return false;
});

function StripeResponseHandler(status, response){
	if (response.error){
		$('#charge-error').removeClass('hidden');
		$('#charge-error').text(response.error.message);
		$form.find('button').prop('disabled', true);
	} else{
		var token = response.id;
		// Insert the token into the form so it gets submitted to the server:
    	$form.append($('<input type="hidden" name="stripeToken" />').val(token));

	    // Submit the form:
	    $form.get(0).submit();
	}

}