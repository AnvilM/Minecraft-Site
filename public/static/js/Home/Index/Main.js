$('form .button#Login').click(function(){
    close_show_down_to_up('form.signup', 'form.login', 200)
})

$('form .button#Signup').click(function(){
    close_show_down_to_up('form.login', 'form.signup', 200)
})