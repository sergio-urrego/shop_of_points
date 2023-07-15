function valirdarlogin(){
    if(this.validarCamposFormulariovalidacion()){
        let form= $("#formulario").serialize();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger',
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'BIENVENIDO !',
            text: "Deseas continuar?",
            icon: 'success',
            showCancelButton: true,
            confirmButtonText: 'si, continuar',
            cancelButtonText: 'No, cancelar!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
                $.post('../php/validacion.php',form,);    
            }
          })
    }
}

function validarCamposFormulariovalidacion(){
    //
    if($("#cedula").val()=='' || $("#cedula").val()==null ){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'el campo cedula no puede estar vacio!',
          })
        return false;
    }
    //
    if($("#password").val()=='' || $("#password").val()==null ){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'el campo contraseña no puede estar vacio!',
          })
        return false;
    } 
    return true;
}