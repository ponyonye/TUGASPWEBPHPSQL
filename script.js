function toggleMenu() {
    const menu = document.getElementById('nav-menu');
    menu.classList.toggle('show');
}

$(document).ready(function() {

    $('#full-name').on('input', function() {
        var fullName = $(this).val().trim();
        var namePattern = /^[A-Za-z\s]+$/;
        if (fullName === '') {
            $('#full-name-error').text('Nama lengkap wajib diisi.');
        } else if (fullName.length > 50) {
            $('#full-name-error').text('Nama lengkap tidak boleh lebih dari 50 karakter.');
        } else if (!namePattern.test(fullName)) {
            $('#full-name-error').text('Nama lengkap hanya boleh mengandung huruf dan spasi.');
        } else {
            $('#full-name-error').text('');
        }
    });

    $('#email').on('input', function() {
        var email = $(this).val().trim();
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (email === '') {
            $('#email-error').text('Email wajib diisi.');
        } else if (!emailPattern.test(email)) {
            $('#email-error').text('Email tidak valid.');
        } else {
            $('#email-error').text('');
        }
    });

    $('#phone').on('input', function() {
        var phone = $(this).val().trim();
        var phonePattern = /^[0-9]{11,13}$/;
        if (phone === '') {
            $('#phone-error').text('Nomor handphone wajib diisi.');
        } else if (!phonePattern.test(phone)) {
            $('#phone-error').text('Nomor handphone harus terdiri dari 11 hingga 13 angka.');
        } else {
            $('#phone-error').text('');
        }
    });

    $('#message').on('input', function() {
        var message = $(this).val().trim();
        var messagePattern = /^[A-Za-z0-9\s.,!?'"-]*$/; 
        if (message === '') {
            $('#message-error').text('Pesan wajib diisi.');
        } else if (!messagePattern.test(message)) {
            $('#message-error').text('Pesan tidak boleh mengandung karakter khusus.');
        } else {
            $('#message-error').text('');
        }
    });


    $('#contact-form').on('submit', function(event) {
        event.preventDefault();

        var fullName = $('#full-name').val().trim();
        var email = $('#email').val().trim();
        var phone = $('#phone').val().trim();
        var message = $('#message').val().trim();

        if (fullName === '' || fullName.length > 50 || !/^[A-Za-z\s]+$/.test(fullName)) {
            $('#full-name-error').text('Nama lengkap wajib diisi dan tidak boleh lebih dari 50 karakter.');
            return false;
        }

        if (email === '' || !/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(email)) {
            $('#email-error').text('Email tidak valid.');
            return false;
        }

        if (phone === '' || !/^[0-9]{11,13}$/.test(phone)) {
            $('#phone-error').text('Nomor handphone harus terdiri dari 11 hingga 13 angka.');
            return false;
        }

        if (message === '' || !/^[A-Za-z0-9\s.,!?'"-]*$/.test(message)) {
            $('#message-error').text('Pesan tidak boleh mengandung karakter khusus.');
            return false;
        }

        $('#error-message').html('Formulir berhasil dikirim!');
    });
});






