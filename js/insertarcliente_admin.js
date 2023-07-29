function insertarclientedesdeadmin(){
    if(this.validarCamposFormularioinsertarclientesdesdeadmin()){
        let form= $("#form").serialize();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger',
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'estas seguro de agregar este cliente a esta empresa?',
            text: 'si le da "SI" ya no hay vuelta atras ',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'si, agregar',
            cancelButtonText: 'No, cancelar!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
                $.post('../php/inserts/insertarcliente_admin.php',form,  
                function(){
                    //window.location='www.google.com';
                    $("#cedula").val(''); 
                    $("#nombre").val(''); 
                    $("#apellidos").val(''); 
                    $("#correo").val(''); 
                    $("#celular").val(''); 
                    $("#contraseña").val('');
                    $("#confirmar").val('');
                    $("#role").val('0');
                }
                );    
              swalWithBootstrapButtons.fire(
                'agregado!',
                'el cliente se ah agregado correctamente',
                'success'
              )
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelado',
                'no se ah agregado cliente alguno ah esta empresa',
                'error'
              )
            }
          })
    }
}

function validarCamposFormularioinsertarclientesdesdeadmin(){
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
    if($("#cedula").val()=='' || $("#cedula").val()==null ){
        alert("el campo cedula no puede estar vacío");
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

    if($("#contraseña").val()=='' || $("#contraseña").val()==null ){
        alert("el campo contraseña no puede estar vacío");
        return false;
    }

    if($("#confirmar").val()=='' || $("#confirmar").val()==null ){
        alert("el campo confirmar contraseña no puede estar vacío");
        return false;
    }else{ 
      var contraseña=$("#contraseña").val();
      var confirmar=$("#confirmar").val();
      if(contraseña!==confirmar){
          alert("las contraseñas deben ser iguales ");
          return false;
      }
    }
    if($("#role").val()==0 || $("#role").val()==null || $("#role").val()=='' ){
      alert("el debe seleccionar un perfil");
      return false;
  }
    return true;
}