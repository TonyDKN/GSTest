$(document).on('submit', '#form', function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var surname = $("#surname").val();
    var email = $("#email").val();
    var confPass = $("#password2").val();
    var pass = $("#password1").val();

    $(".text-danger").remove();

    if (pass != confPass) {
        $('#errpass2').before('<span class="text-danger" >password not confirm</span>');
    }
    if (name.length < 2) {
        $('#errName').before('<span class="text-danger">This field is required</span>');
    }
    if (surname.length < 2) {
        $('#errSurname').before('<span class="text-danger">This field is required</span>');
    }
    if (email.length < 1) {
        $('#errEmail').before('<span class="text-danger">This field is required</span>');
    }
    if (pass.length < 2) {
        $('#errPass1').before('<span class="text-danger">This field is required</span>');
    }
    if (confPass.length < 2) {
        $('#errPass2').before('<span class="text-danger">This field is required<br /></span>');
    }
    else {
        $.ajax({
            url: 'core.php',
            type: 'POST',
            cache: false,
            data: {name: name, surname: surname, email: email, pass: pass},
            dataType: 'html',
            success: function (data) {
                console.log(data);
                switch (data) {
                    case 'Регистрация прошла успешно!':
                            $("#form").hide();
                            $('#ajax-form-success').after('<p class="text-success d-flex flex-column text-center" >Регистрация прошла успешно!</p>');
                        break;
                    case 'пользователь с таким email уже зарегистрирован':
                        $("#form").hide();
                        $('#ajax-form-success').after('<p class="text-danger d-flex flex-column text-center" >пользователь с таким email уже зарегистрирован</p>');
                        break;
                }

            }
        })
    }
});

