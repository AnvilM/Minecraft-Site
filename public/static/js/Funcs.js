$('*').click(function(){
    if($(this)[0].hasAttribute('href') && !$(this)[0].hasAttribute('disabled')){
        if(!$(this)[0].hasAttribute('hrefType') || $(this).attr('hrefType') === 'this'){
            location.href = $(this).attr('href')
        }
        else{
            window.open($(this).attr('href'))
        }
    }
})