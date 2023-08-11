$('form').submit(function(e){
    e.preventDefault()
    var data = {}
    data['Old_pass'] = $(this).find('input[name="Old_pass"]').val()
    data['New_pass'] = $(this).find('input[name="New_pass"]').val()
    data['Re_new_pass'] = $(this).find('input[name="Re_new_pass"]').val()

    var Res = Ajax('/Account/Security/Password/ResetPOST', 'POST', data);
    if(Res == ''){
        location.href = '/Account/Security'
    }
    else{
        $(this).find('input').removeClass('err-input')
        $(this).find('.err').text('')
        if(Res == 'Old password not specified'){$(this).find('input[name="Old_pass"]').addClass('err-input');}
        if(Res == 'New password not specified'){$(this).find('input[name="New_pass"]').addClass('err-input');}
        if(Res == 'Re_new password not specified'){$(this).find('input[name="Re_new_pass"]').addClass('err-input');}
        if(Res == 'Password length less than 8'){$(this).find('input[name="New_pass"]').addClass('err-input'); $(this).find('.err').text('Длина пароля менее чем 8 символов')}
        if(Res == 'Password != Re_Password'){$(this).find('input[name="New_pass"]').addClass('err-input'); $(this).find('input[name="Re_new_pass"]').addClass('err-input'); $(this).find('.err').text('Пароли не совпадают')}
        if(Res == 'Invalid old password'){$(this).find('input[name="Old_pass"]').addClass('err-input'); $(this).find('.err').text('Неверный пароль')}
    }
})