$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: '/',
            data: $(this).serialize(),
            success: function(response) {
                alert('Данные успешно отправлены!');
            },
            error: function(response) {
                alert('Произошла ошибка. Пожалуйста, попробуйте еще раз.');
            }
        });
    });
});