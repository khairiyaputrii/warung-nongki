$(function () {
    $('#submitLogin').on('click', function () {
        var email = $('#email').val()
        var password = $('#password').val()

        var dataVar = {
            email: email,
            password: password,
            _token: token
        }

        $.ajax({
            url: 'user/login',
            type: 'POST',
            data: dataVar,
            dataType: 'json'
        }).done(function (data) {
            if (data['status'] == 'Failed') {
                $('#modalTitle').text('Kesalahan')

                error = ''
                for (var i = 0; i < data['error'].length; i++) {
                    error += `<li>${data['error'][i]}</li>`
                }

                $('#modalBody').html(`<ul>${error}</ul>`)
                $('#modalContent').addClass('alert-danger')

                $('#modal').on('hidden.bs.modal', function () {
                    $('#modalTitle').text('Notifikasi')
                    $('#modalBody').html('');
                    $('#modalContent').removeClass('alert-danger')
                });

                var myModal = new bootstrap.Modal(document.getElementById('modal'), {
                    keyboard: false
                })
                myModal.show()
            }
            else if (data['status'] == 'Succeed') {
                $('#modalTitle').text('Berhasil')
                $('#modalContent').addClass('alert-success');
                $('#modalBody').html(`<p>Akun berhasil masuk.</p>`)

                $('#modal').on('hidden.bs.modal', function () {
                    $('#modalTitle').text('Notifikasi')
                    $('#modalBody').html('');
                    $('#modalContent').removeClass('alert-success')
                    window.location.href = window.location.origin
                });

                var myModal = new bootstrap.Modal(document.getElementById('modal'), {
                    keyboard: false
                })
                myModal.show()
            }
        })
    })
})