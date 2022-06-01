$.getJSON('lain/daftar.json', function(data){
    let menu = data.menu;
    $.each(menu, function(i, data){
        console.log(i)
    });
})