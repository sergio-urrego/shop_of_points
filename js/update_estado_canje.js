function actualizarestadocanje(){
    let form= $("#formularioactualizar").serialize();
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger',
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'Seguro de confirmar el canje de estos puntos?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'si, confirmar',
        cancelButtonText: 'No, cancelar!',
      }).then((result) => {
        if (result.isConfirmed) {
            $.post('../php/update/updateestado_canje.php',form,);    
          swalWithBootstrapButtons.fire(
            'agregado!',
            'la empresa  a sido agregada.',
            'success',
            location.reload()
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelado',
            'no se ah confirmado ningun canje',
            'error'
          )
        }
      })
}
