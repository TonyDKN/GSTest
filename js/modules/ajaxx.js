$(document).on('submit', '#form', function (e) {
    e.preventDefault();
    var name = document.getElementbyId('name');
    var surname = document.getElementbyId('surname');


    var emailInput = {
        rules: {
            min: 8,
            max: 50,
            match: 'email',
        },
        message: {
            min: 'Поле должно содержать больше 8 символов',
            max: 'Поле не должно содержать больше 50 символов',
            match: 'Поле должно содержать валидный адрес электронной почты'
        },
        onError: function () {
            console.log('Валидация email провалена');
        },
        onSuccess: function () {
            console.log('Валидация email прошла успешно');
        }
    };

    var passInput = {
        rules: {
            min: 3,
            max: 20,
            match: 'password1',
        },
        message: {
            min: 'Поле должно содержать больше 3 символов',
            max: 'Поле не должно содержать больше 20 символов',
        },
        onError: function () {
            console.log('Валидация pass провалена');
        },
        onSuccess: function () {
            console.log('Валидация pass прошла успешно');
        }


    };

    var confPassInput = {
        rules: {
            min: 3,
            max: 20,
            match: 'password2',
            equalTo : "#password1"
        },
        message: {
            min: 'Поле должно содержать больше 3 символов',
            max: 'Поле не должно содержать больше 20 символов',
        },
        onError: function () {
            console.log('Валидация pass провалена');
        },
        onSuccess: function () {
            console.log('Валидация pass прошла успешно');
        }

    };

    var email = document.getElementbyId('email');
    var emailValidation = new Validator(email, settings);

    var pass = document.getElementbyId('password1');
    var passValidation = new Validator(pass, settings);

    var confPass = document.getElementbyId('password2');
    var confPassValidation = new Validator(confPass, settings);
});