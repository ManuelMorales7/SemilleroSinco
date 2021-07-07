//agregar capitulo
$('#agrega').click(function(){

    var numero_capitulo = $('#numero_capitulo').val();
    var titulo_capitulo  = $('#titulo_capitulo').val();

    if (numero_capitulo != '' && titulo_capitulo != '') {
      $.ajax({

        url: '../controlador/agregarCapitulo.php',
        method: 'POST',
        data: {numero_capitulo : numero_capitulo, titulo_capitulo : titulo_capitulo},
        success : function(msg){
          if (msg == 1) {
              $('#mensajee').html('El capitulo ya existe.');

          }else {
            $('#mensaje').html(msg);
          }

        }
      });

    }else {
      $('#mensajee').html('Ingresa todos los campos');

    }

});

//eliminar capitulo
$('#elimina').click(function(){

  var numero_capitulo = $('#numero_capitulo').val();

  if (numero_capitulo != '') {
    $.ajax({

      url: '../controlador/eliminarCapitulo.php',
      method: 'POST',
      data: {numero_capitulo : numero_capitulo},
      success : function(msg){
        if (msg == 1) {
            $('#mensajee').html('El capitulo que desea eliminar no existe.');

        }else {
          $('#mensaje').html(msg);
        }

      }
    });

  }else {
    $('#mensajee').html('Ingresa todos los campos');

  }

});

//editar capitulo
$('#edita').click(function(){

  var numero_capitulo = $('#numero_capitulo').val();
  var titulo_capitulo  = $('#titulo_capitulo').val();

  if (numero_capitulo != '' && titulo_capitulo != '') {
    $.ajax({

      url: '../controlador/editarCapitulo.php',
      method: 'POST',
      data: {numero_capitulo : numero_capitulo, titulo_capitulo : titulo_capitulo},
      success : function(msg){
        if (msg == 1) {
            $('#mensajee').html('No existe el capitulo al que intentas editar.');

        }else {
          $('#mensaje').html(msg);
        }

      }
    });

  }else {
    $('#mensajee').html('Ingresa todos los campos');

  }

});

//agregar subcapitulo
$('#agregar').click(function(){

    
    var numero_subcapitulo = $('#numero_subcapitulo').val();
    var titulo_subcapitulo  = $('#titulo_subcapitulo').val();
    var numero_capitulo = $('#numero_capitulo').val();

    if (numero_subcapitulo != '' && titulo_subcapitulo != '' && numero_capitulo != '') {
      $.ajax({

        url: '../controlador/agregarSubcapitulo.php',
        method: 'POST',
        data: {numero_subcapitulo : numero_subcapitulo, titulo_subcapitulo : titulo_subcapitulo, numero_capitulo : numero_capitulo },
        success : function(msg){
          if (msg == 1) {
              $('#mensajee').html('El subcapitulo ya existe.');

          }else {
            $('#mensaje').html(msg);
          }

        }
      });

    }else {
      $('#mensajee').html('Ingresa todos los campos');

    }

});
//eliminar subcapitulo
$('#eliminar').click(function(){

  var numero_subcapitulo = $('#numero_subcapitulo').val();

  if (numero_subcapitulo != '') {
    $.ajax({

      url: '../controlador/eliminarSubcapitulo.php',
      method: 'POST',
      data: {numero_subcapitulo : numero_subcapitulo},
      success : function(msg){
        if (msg == 1) {
            $('#mensajee').html('El subcapitulo que desea eliminar no existe.');

        }else {
          $('#mensaje').html(msg);
        }

      }
    });

  }else {
    $('#mensajee').html('Ingresa todos los campos');

  }

});

//editar subcapitulo
$('#editar').click(function(){

  var numero_subcapitulo = $('#numero_subcapitulo').val();
  var titulo_subcapitulo  = $('#titulo_subcapitulo').val();

  if (numero_subcapitulo != '' && titulo_subcapitulo != '') {
    $.ajax({

      url: '../controlador/editarSubcapitulo.php',
      method: 'POST',
      data: {numero_subcapitulo : numero_subcapitulo, titulo_subcapitulo : titulo_subcapitulo},
      success : function(msg){
        if (msg == 1) {
            $('#mensajee').html('No existe el subcapitulo al que intentas editar.');

        }else {
          $('#mensaje').html(msg);
        }

      }
    });

  }else {
    $('#mensajee').html('Ingresa todos los campos');

  }

});