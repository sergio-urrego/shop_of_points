function insertclientes(){
    if(this.validarCamposFormularioInsertclientes()){
        let form= $("#form").serialize();
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger',
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: 'Deseas agregar esta empresa?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'si, agregar',
            cancelButtonText: 'No, cancelar!',
          }).then((result) => {
            if (result.isConfirmed) {
                $.post('../php/inserts/insertar_clientes.php',form,  
                function(){
                    $("#nombre").val(''); 
                    $("#apellidos").val(''); 
                    $("#cedula").val(''); 
                    $("#correo").val(''); 
                    $("#celular").val(''); 
                    $("#contraseña").val('');
                    $("#confirmar").val('');
                }
                );    
              swalWithBootstrapButtons.fire(
                'agregado!',
                'la empresa  a sido agregada.',
                'success',
              )
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelado',
                'no se ah agregado empresa alguna',
                'error'
              )
            }
          })
    }
}

function validarCamposFormularioInsertclientes(){
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
        //
        if(contraseña!==confirmar){
            alert("las contraseñas deben ser iguales ");
            return false;
        }
        }
      return true;
}