
function Ajax(url, type, data){
    var res = ''
    $.ajax({
        url:url,    //the page containing php script
        type: type,    //request type,
        dataType: 'text',
        data: data,
        async: false,
        success:function(result){
            res = result
        }
    });
    return res

}
