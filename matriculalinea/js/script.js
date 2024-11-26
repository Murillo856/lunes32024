$(function () {
    $('#productSelector').on('change', function () {
        let selectedOption = $(this).find(':selected');
        let price = selectedOption.data('price');
        let img = selectedOption.data('img');

        $('#productImage').attr('src', img);
        $('#price').text(`Precio: ${price} crc`);
    });


    $('#error-contact').hide();
    $('#error-email').hide();
    $('#error-subject').hide();
    $('#error-message').hide();

    $('#contactForm').on('submit', function (e) {
        e.preventDefault();
        
        let isValid = true;

        if ($('#contact').val().trim() === '') {
            $('#contact').addClass('error');
            $('#error-contact').show();
            isValid = false;
        } else {
            $('#contact').removeClass('error');
            $('#error-contact').hide();
        }

        if ($('#email').val().trim() === '') {
            $('#email').addClass('error');
            $('#error-email').show();
            isValid = false;
        } else {
            $('#email').removeClass('error');
            $('#error-email').hide();
        }

        if ($('#subject').val().trim() === '') {
            $('#subject').addClass('error');
            $('#error-subject').show();
            isValid = false;
        } else {
            $('#subject').removeClass('error');
            $('#error-subject').hide();
        }

        if ($('#message').val().trim() === '') {
            $('#message').addClass('error');
            $('#error-message').show();
            isValid = false;
        } else {
            $('#message').removeClass('error');
            $('#error-message').hide();
        }

        if (isValid) {
            alert('Formulario enviado correctamente.');
            $(this).unbind('submit').submit();
        }
    });
});


