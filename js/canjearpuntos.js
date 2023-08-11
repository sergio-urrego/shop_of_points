function canjearpuntos(){

const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger',
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons.fire({
    title: 'estas seguro de canjear estos puntos?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'si, canjear',
    cancelButtonText: 'No, cancelar!',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
         window.location.href="../php/inserts/canjearpuntos.php"
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
