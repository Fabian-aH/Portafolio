document.addEventListener("DOMContentLoaded", function() {
  const contactForm = document.getElementById('contact-form');
  
  contactForm.addEventListener('submit', function(event) {
    event.preventDefault();
    
    const formData = new FormData(contactForm);
    
    fetch('contacto.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text()) // Assuming PHP returns a plain text response
    .then(data => {
      console.log(data);
      alert('Formulario enviado con éxito');
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Hubo un error al enviar el formulario');
    });
  });
});
