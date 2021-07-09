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



$(document).ready(function(){
    
    
    $('#submit_permission').click(function() {
    
        var rol = $('#rol').val();
        var create = $('#insert_permission').val();
        var read = $('#read_permission').val();
        var update = $('#update_permission').val();
        var dlete = $('#delete_permission').val();
        var audit = $('#audit_permission').val();
    
            
    
            $.ajax({
    
                url : '../Controlador/permission.php',
                method: 'POST',
                data: {rol: rol, create: create, read: read, update: update, dlete: dlete, audit: audit},
                    success: function(msg){

                        if(msg == 1){

                            $('#error_message').html('El rol ingresado no se encuentra registrado en la base de datos')
                        
                        }else{
                            
                            $('#success_message').html(msg);
                        }


                    
    
                    }
            });   
    
    
                
    
            
    
    });
    
});
    
    
    
    
    
