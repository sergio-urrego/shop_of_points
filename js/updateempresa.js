function actualizarEmpresa(){
    if(this.validarCamposFormularioactualizacionEmpresa()){
      var form= $('#formulario').serialize();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger',
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'seguro deseas actualizar los datos de esta empresa?',
            text: "si le das si no hay vuelta atras!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'si, agregar',
            cancelButtonText: 'No, cancelar!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              $.post('../php/update/update_empresa.php',form)
              swalWithBootstrapButtons.fire(
                'actualizado!',
                'los datos de la empresa fueron actualizados correctamente.',
                'success',
              )
              
            } 
          })
    }
}

function validarCamposFormularioactualizacionEmpresa(){
    //
    if($("#nit").val()=='' || $("#nit").val()==null ){
        alert("el campo nit no puede estar vacío");
        return false;
    }
    //
    if($("#nombre").val()=='' || $("#nombre").val()==null ){
        alert("el campo nombre no puede estar vacío");
        return false;
    }
    //
    if($("#direccion").val()=='' || $("#direccion").val()==null ){
        alert("el campo dirección no puede estar vacío");
        return false;
    }
    //
    if($("#correo").val()=='' || $("#correo").val()==null ){
        alert("el campo correo no puede estar vacío");
        return false;
    }
    else{
        var correo = $("#correo").val();
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        if(!pattern.test(correo))
        {
            alert('el correo ingresado no es correo válido');
            return false;
        }
    }
    //
    if($("#celular").val()=='' || $("#celular").val()==null ){
        alert("el campo celular no puede estar vacío");
        return false;
    }
    else {
      let celular = $("#celular").val();
      if (celular.length<9)
        {
            alert("ingrese un número de celular válido." + celular.length);
            return false;
        }
    }
    
    return true;
}