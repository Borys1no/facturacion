jQuery(document).on('submit', '#formlg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url:'model/login.php',
        type:'POST',
        dataType:'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.btn').val('Validando...');

        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == 'administrador'){
                location.href='view/homeAdmin.php';

            }else if(respuesta.tipo == 'usuario'){
                location.href='view/home.php';

            }

        }else{
            alert('Error usuario y/o contraseña son incorrectas')
            $('.btn').val('Entrar');

        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    })
})