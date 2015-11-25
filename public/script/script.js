function refresh()
{
    $.get('index.php?page=chat&ajax', function(page)
    {
        $('.chat_home').html(page);
    });
}


$('.chat').submit(function(e){
    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire
    $.post('index.php?page=chat', {"content":$('#message').val()}, function(page)
    {
        refresh();
        // function charger(){
        //     setTimeout( function(){

                

    //         charger();
    //     }, 2000);
    // }
    // charger();



    });
});

setInterval(refresh, 1000);