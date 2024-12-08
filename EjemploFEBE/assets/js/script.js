$(document).ready(function() {
    function loadBooks() {
        $.post('bookBE.php',{action: 'getAll'}, function(data) {
            var books = JSON.parse(data);
            var html = '';
            if (books.books.length > 0) {
                books.books.forEach(function(book) {
                    html += `<div class="book">
                                <h3>${book.title}</h3>
                                <p>Autor: ${book.author}</p>
                                <button class="reserveBtn" data-id="${book.id}">Reservar</button>
                             </div>`;
                });
            } else {
                html = '<p>No hay libros disponibles.</p>';
            }
            $('#booksList').html(html);
        });
    }

    $(document).on('click', '.reserveBtn', function() {
        var bookId = $(this).data('id');
        var userName = $('#userName').val();

        if (userName) {
            $.post('bookBE.php', { action:"add", bookId: bookId, userName: userName }, function(response) {
                var result = JSON.parse(response);
                if (result.success) {
                    alert('Reserva realizada con éxito');
                    loadBooks(); 
                } else {
                    alert('Hubo un error al realizar la reserva');
                }
            });
        } else {
            alert('Por favor ingresa tu nombre');
        }
    });


    loadBooks();
});
