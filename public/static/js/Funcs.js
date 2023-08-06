$('*').click(function(){
    if($(this)[0].hasAttribute('href')){
        if(!$(this)[0].hasAttribute('hrefType') || $(this).attr('hrefType') === 'this'){
            location.href = $(this).attr('href')
        }
        else{
            window.open($(this).attr('href'))
        }
    }
})