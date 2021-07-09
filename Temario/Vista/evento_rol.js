$(document).ready(function(){


    $('#submit_role').click(function() {

        var role = $('#rol_name').val();
        var user = $('#user_name').val();

            $.ajax({
        
                url : '../Controlador/roles.php',
                method: 'POST',
                data: {role: role, user: user},
                    success: function(msg){

                        if(msg == 1){
                            $('#error_message').html('El usuario ingresado no se encuentra registrado en la base de datos')
                        }else{
                            
                            $('#success_message').html(msg);
                        }
                 

                    }
            }); 






    })

})
    
    
    