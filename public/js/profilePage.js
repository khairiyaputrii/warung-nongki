$(function () {
    $('#pamit').on('click', function () {
        $.post('user/logout', { _token: token }).done(function () {
            $('#modalTitle').text('Pamit')

            $('#modalBody').html(`Sampai bertemu kembali!!!`)
            $('#modalContent').addClass('alert-success')

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
        })
    })

    $('#editProfile').on('click', function () {
        window.location.href = 'profile/edit'
    })
})