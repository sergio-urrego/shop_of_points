function elimiadosuave(){
    let form=$("#form").serialize();
    if(this.validarCamposFormularioeliminacion()){
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger',
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'Estas seguro de eliminar y/o desactivar el cliente ?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'si, eliminar/desactivar',
        cancelButtonText: 'No, cancelar!',
      }).then((result) => {
        if (result.isConfirmed) {
            $.post('../php/update/borradosuave_cliente.php',form,  
            );    
          swalWithBootstrapButtons.fire(
            'eliminado y/o desactivado!',
            'el cliente a sido eliminado y/o desactivado!.',
            'success',
            location.reload()
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelado',
            'no se ah elimanado y/o desactivado el cliente',
            'error'
          )
        }
      })
    }
    }
    
    function validarCamposFormularioeliminacion(){
      
      if($("#tipo").val()==0 ){
          alert("debe selecccionar un tipo de eliminacion");
          return false;
      }
      
      return true;
    }