$('.chat').submit(function(e){
    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire
    $.post('index.php?page=chat', {"content":$('#message').val()}, function(page)
    {
        
        $.get('index.php?page=chat&ajax', function(page)
        {
            $('.chat_home').html(page);
        });


    });
});
