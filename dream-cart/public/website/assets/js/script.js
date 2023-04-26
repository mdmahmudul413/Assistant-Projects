/*
    ======================================================================
        When we writing something in the input field then hover, click,
                keyup, blur, etc event fired at the same time.
    ======================================================================
*/

/* jQuery Basic Syntax: $(selector).action();

    $           = jQuery Object Sign
    selector    = To grab html element by id, class, etc
    .           = JS object sign
    action()    = jQuery Method

*/

// Name field validation
function nameFieldValidate()
{
    var nameValue = $('#name').val();
    var regex = /^[a-zA-Z-. ]{3,20}$/;
    if (regex.test(nameValue))
    {
        $('#nameError').text('');
        $('#placeOrderBtn').css('backgroundColor', '#333');
        return true;
    }
    else
    {
        $('#nameError').text('Name field need 3 to 20 characters only with spaces');
        $('#placeOrderBtn').css('backgroundColor', 'red');
        return false;
    }
}

$('#name').keyup(function () {
    nameFieldValidate();
});

// Email Field Validation
function emailFieldValidate()
{
    var emailValue = $('#email').val();
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(emailValue))
    {
        $('#emailError').text('');
        $('#placeOrderBtn').css('backgroundColor', '#333');
        return true;
    }
    else
    {
        $('#emailError').text('Email address is invalid');
        $('#placeOrderBtn').css('backgroundColor', 'red');
        return false;
    }
}
$('#email').keyup(function () {
    emailFieldValidate();
});


// Mobile Field Validation
function mobileFieldValidate()
{
    var mobileValue = $('#mobile').val();
    var regex = /^(?:\+88|88)?(01[3-9]\d{8})$/;
    if (regex.test(mobileValue))
    {
        $('#mobileError').text('');
        $('#placeOrderBtn').css('backgroundColor', '#333');
        return true;
    }
    else
    {
        $('#mobileError').text('Mobile number format is invalid');
        $('#placeOrderBtn').css('backgroundColor', 'red');
        return false;
    }
}
$('#mobile').keyup(function () {
    mobileFieldValidate();
});



$('#checkoutForm').submit(function () {
    if (nameFieldValidate() && emailFieldValidate() && mobileFieldValidate())
    {
        return true;
    }
    else
    {
        return false;
    }

});
