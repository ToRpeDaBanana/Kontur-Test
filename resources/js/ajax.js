$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/contacts',
            data: $(this).serialize(),
            success: function(response) {
                alert(response.success);
            },
            error: function(response) {
                // Если есть ошибки валидации
                if (response.status === 422) {
                    let errors = response.responseJSON.errors;
                    let errorMessage = '';
                    for (let field in errors) {
                        errorMessage += errors[field].join(', ') + '\n';  // Собираем сообщения об ошибках
                    }
                    alert('Пожалуйста, исправьте следующие ошибки:\n' + errorMessage);
                } else {
                    alert('Произошла ошибка. Пожалуйста, попробуйте еще раз.');
                }
            }
        });
    });
});
