$(document).ready(function(){


    $('#ingresar').click(function() {
    
        var user = $('#user').val();
        var pass = $('#pass').val();
    
            if(user !='' && pass !=''){
    
                $.ajax({
                    url : '../Controlador/login.php',
                    method: 'POST',
                    data: {user: user, pass: pass},
                    success: function(msg){
                        if (msg == 1) {
    
                            $('#error_message').html('Datos incorrectos');

                        }else{
                            window.location = msg;
                        }
                    }  
    
                });
    
            }else {
                $('#error_message').html('Ingresa  el usuario y la contraseña');
            }
    
    });
    
});
    
    
$(document).ready(function(){
    
    
    $('#registrar').click(function() {
    
        
        var nombre = $('#nombre').val();
        var apellido = $('#apellido').val();
        var usuario = $('#usuario').val();
        var password = $('#password').val();
    
            if(nombre !='' && apellido !='' && usuario !='' && password !='' ){
    
                $.ajax({
    
                    url : '../Controlador/registrar.php',
                    method: 'POST',
                    data: {nombre: nombre, apellido: apellido, usuario: usuario, password: password},
                    success: function(msg){
                        if (msg == 1) {    
                            $('#error_message').html('El usuario ingresado ya existe');
                        }else {

                            $('#success_message').html(msg);
    
                        }
                    }   
    
    
                });
    
            }else{

                $('#mensaje').html('Ingresa  los datos');

            }
    
    });
    
});
    
    
    