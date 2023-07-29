function elimiadosuave(){
    let form=$("#form").serialize();
    let empresa=$("#nombre").val();

    Swal.fire({
        title: 'deseas eliminar '+empresa+'?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'desactivar',
        denyButtonText: `eliminar`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire('desactivar!', '', 'success')
          $.post('../php/update/borradosuave_empresa.php',form,);  
        } else if (result.isDenied) {
          Swal.fire('eliminar', '', 'info')
        }
      })
    
}

