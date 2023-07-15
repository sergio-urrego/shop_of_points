const nombre=document.getElementById('cedula')
const correo=document.getElementById('correo')
const empresa=document.getElementById('empresa')

const form=document.getElementById('form')
const parrafo=document.getElementById('warnings')

form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings=""
    let regexemail=/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    let entrar=true
    parrafo.innerHTML= ''
    if (nombre.value=='' || nombre.value==null){
        warnings+='el campo cedula no puede estar vacio <br>'
        entrar=true
    }
    if (email.value=='' || email.value==null){
        warnings+='el campo correoS no puede estar vacio <br>'
    }else if (!regexemail.test(email.value)){
        warnings+='el correo no es valido <br>'
        entrar=true
    }

    if (empresa.value==0 ){
        warnings+='selecciona una empresa <br>'
        entrar=true
    }

    if (entrar){
        parrafo.innerHTML = warnings
    }

})
