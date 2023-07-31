
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

    Ajax('/Signup', 'POST', data)

    $('form.confirm > .body > div').text($('form.confirm > .body > div').text() + data['Email'])
    $('form.confirm > .footer > a').attr('href', 'http://'+data['Email'].split('@').pop())
    close_show_down_to_up('form.signup', 'form.confirm', 200)
})