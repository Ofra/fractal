function send_mail(){
        var parametros = {

            "user" : user,
            "pass" : pass
        };

        $.ajax({
            data:  parametros,
            url:   '../php/mailSend.php',
            type:  'post',
            beforeSend: function () {
                //$("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) {
                alert(response);
                
            }
        });
}