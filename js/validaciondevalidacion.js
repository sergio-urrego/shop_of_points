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
            //   $.post('../php/validacion.php',form,
            //   function(){
            //     //window.location='www.google.com';
            //     $("#cedula").val(''); 
            //     $("#password").val(''); 
            //     $("#inputState").val(''); 
                
            // });  
            console.log(from)
              
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
    if($("#inputState").val()=='' || $("#inputState").val()==null ){
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'debes seleccionar una empresa!',
        })
      return false;
  } 
    return true;

}