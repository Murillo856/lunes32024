$(function () {
    $('#productSelector').on('change', function () {
        let selectedOption = $(this).find(':selected');
        let price = selectedOption.data('price');
        let img = selectedOption.data('img');

        $('#productImage').attr('src', img);
        $('#price').text(`Precio: ${price} crc`);
    });
});