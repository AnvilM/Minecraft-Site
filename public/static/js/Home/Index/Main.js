
$('form .link#Login').click(function(){
    close_show_down_to_up('form.signup', 'form.login', 200)
})

$('form .link#Signup').click(function(){
    close_show_down_to_up('form.login', 'form.signup', 200)
})


$('form.signup').submit(function(e){
    e.preventDefault()
    var data = {}
    data['Login'] = $(this).find('input[name="Login"]').val()
    data['Email'] = $(this).find('input[name="Email"]').val()
    data['Password'] = $(this).find('input[name="Password"]').val()
    data['Re_Password'] = $(this).find('input[name="Re_Password"]').val()

    var Res = Ajax('/Signup', 'POST', data);
    if(Res == ''){
        $('form.confirm > .body > div').text($('form.confirm > .body > div').text() + data['Email'])
        $('form.confirm > .footer > a').attr('href', 'http://'+data['Email'].split('@').pop())
        close_show_down_to_up('form.signup', 'form.confirm', 200)
    }
    else{
        $(this).find('input').removeClass('err-input')
        if(Res == 'Login not specified'){$(this).find('input[name="Login"]').addClass('err-input')}
        if(Res == 'Email not specified'){$(this).find('input[name="Email"]').addClass('err-input')}
        if(Res == 'Password not specified'){$(this).find('input[name="Password"]').addClass('err-input')}
        if(Res == 'Re_Password not specified'){$(this).find('input[name="Re_Password"]').addClass('err-input')}
        if(Res == 'Login length less than 3'){$(this).find('input[name="Login"]').addClass('err-input'); $(this).find('.err').text('Длина никнейма меньше чем 3 символа')}
        if(Res == 'Login length more than 16'){$(this).find('input[name="Login"]').addClass('err-input'); $(this).find('.err').text('Длина никнейма более чем 16 символов')}
        if(Res == 'Login contains invalid characters'){$(this).find('input[name="Login"]').addClass('err-input'); $(this).find('.err').text('Логин содержит недопустимые символы')}
        if(Res == 'Invalid Email'){$(this).find('input[name="Email"]').addClass('err-input'); $(this).find('.err').text('Неверный Email')}
        if(Res == 'Password length less than 8'){$(this).find('input[name="Password"]').addClass('err-input'); $(this).find('.err').text('Длина пароля менее чем 8 символов')}
        if(Res == 'Password != Re_Password'){$(this).find('input[name="Password"]').addClass('err-input'); $(this).find('input[name="Re_Password"]').addClass('err-input'); $(this).find('.err').text('Пароли не совпадают')}
        if(Res == 'Login taken'){$(this).find('input[name="Login"]').addClass('err-input'); $(this).find('.err').text('Логин занят')}
        if(Res == 'Email taken'){$(this).find('input[name="Email"]').addClass('err-input'); $(this).find('.err').text('Почта занята')}
    }
})


$('form.login').submit(function(e){
    e.preventDefault()
    var data = {}
    data['Login'] = $(this).find('input[name="Login"]').val()
    data['Password'] = $(this).find('input[name="Password"]').val()

    var Res = Ajax('/Login', 'POST', data);
    alert(Res)
    if(Res == ''){
        location.href = '/Account'
    }
    else{
        if(Res == 'Invalid login or password'){$(this).find('.err').text('Неверный логин или пароль')}
    }
})
