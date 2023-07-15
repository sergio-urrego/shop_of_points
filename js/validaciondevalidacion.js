function valirdarlogin(){
    if(this.validarCamposFormulariovalidacion()){
        let form= $("#form").serialize();
        $.post('../php/validacion.php',form,);          
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
        return false;
    }
    //
    
    return true;
}