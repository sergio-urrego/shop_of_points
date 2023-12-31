function actualizarusuariodesdegerente(){
    if(this.validarCamposFormularioupdateclientegerente()){
        let form= $("#formulario").serialize();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger',
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'Deseas actualizar este cliente?',
            text: 'si le das "si", no hay vuelta atras!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'si, actualizar',
            cancelButtonText: 'No, cancelar!',
          }).then((result) => {
            if (result.isConfirmed) {
                $.post('../php/update/updatecliente_gerente.php',form,  
                );    
              swalWithBootstrapButtons.fire(
                'actualizado!',
                'los datos del cliente se han actualizado.',
                'success'
              )
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelado',
                'no se ah actualizado los datos del cliente',
                'error'
              )
            }
          })
    }
}

function validarCamposFormularioupdateclientegerente(){
    //
    if($("#cedula").val()=='' || $("#cedula").val()==null ){
        alert("el campo cedula no puede estar vacío");
        return false;
    }
    //
    if($("#nombre").val()=='' || $("#nombre").val()==null ){
        alert("el campo nombre no puede estar vacío");
        return false;
    }
    //
    if($("#apellidos").val()=='' || $("#apellidos").val()==null ){
        alert("el campo apellidos no puede estar vacío");
        return false;
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
    return true;
}