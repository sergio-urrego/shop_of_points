function insertarEmpresa(){
    if(this.validarCamposFormularioInsertarEmpresa()){
        let form= $("#form").serialize();
        if(confirm("Desea registrar una nueva empresa?")){
            $.post('../php/inserts/insertarEmpresa.php',form,  
            function(){
                //window.location='www.google.com';
                $("#nit").val(''); 
                $("#nombre").val(''); 
                $("#direccion").val(''); 
                $("#correo").val(''); 
                $("#celular").val(''); 
                $("#telefono").val('');
            }
          );
        }
    }
}

function validarCamposFormularioInsertarEmpresa(){
    //
    if($("#nit").val()=='' || $("#nit").val()==null ){
        alert("el campo nit no puede estar vacío");
        return false;
    }
    //
    if($("#nombre").val()=='' || $("#nombre").val()==null ){
        alert("el campo nombre no puede estar vacío");
        return false;
    }
    //
    if($("#direccion").val()=='' || $("#direccion").val()==null ){
        alert("el campo dirección no puede estar vacío");
        return false;
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
    
    return true;
}