function valirdarlogin(){
    if(this.validarCamposFormulariovalidacion()){
        let form= $("#form").serialize();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger',
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'Validando Información...',
            text: "Deseas continuar?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Sí, continuar',
            cancelButtonText: 'No, cancelar!'
          }).then((result) => {
            if (result.isConfirmed) {
               $.post('../php/validacion.php',form,
               function(data){
                 $("#cedula").val(''); 
                 $("#password").val(''); 
                 $("#inputState").val('');    
                 console.log (data); 
                 if (data=="ADMIN"){
                  window.location='http://localhost/shop_of_points/html/administrador.php';
                 }
                 else if (data=="GERENTE"){
                  window.location="http://localhost/shop_of_points/html/gerente.php";
                 }
                 else if (data=="USER"){
                  window.location = 'http://localhost/shop_of_points/html/usuarios.php'
                 } 
                 else 
                 {
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Usuario y/o contraseña inválido',
                  })
                 }
             });               
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