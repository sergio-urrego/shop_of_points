var form = document.getElementById('form');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // evita el envio del formulario predeterminado

  var companyInput = document.getElementById('Company');
  var nitInput = document.getElementsByName('nit');
  var emailInput = document.getElementsByName('email');
  var mobileInput = document.getElementById('mobile');

  
  if (companyInput.value.trim() === '') {
    alert('Ingresa el nombre de la compañia.');
    return;
  }

  if (nitInput.value.trim() === '') {
    alert('Ingresa el NIT.');
    return;
  }
  
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (emailPattern.test(emailInput.value.trim())) {
    alert('Ingrese un email valido.');
    return;
  }

  if (mobileInput.value.trim() === '') {
    alert('Ingrese el número telefonico.');
    return;
  }

 
});