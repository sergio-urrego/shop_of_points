function cerrarseccion(){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'estas seguro de cerrar sección?',
        text: "Deberas volver a iniciar sección nuevamente",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, cerrar!',
        cancelButtonText: 'No, cancelar!',
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace("http://localhost/shop_of_points/php/destruirseccion.php")
        } 
      })
};