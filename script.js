document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Aquí puedes enviar los datos del formulario al correo electrónico proporcionado
    // Por ejemplo:
    const nombre = document.getElementById("nombre").value;
    const empresa = document.getElementById("empresa").value;
    const email = document.getElementById("email").value;
    const celular = document.getElementById("celular").value;
    const formData = { nombre, empresa, email, celular };
    fetch("URL_DEL_SERVIDOR", {
    method: "POST",
    body: JSON.stringify(formData)
    })
    .then(response => {
       if (response.ok) {
         window.location.href = "http://www.redireccion.cl";
       } else {
         alert("Hubo un error al enviar la solicitud");
       }
    })
     .catch(error => {
       console.error("Error:", error);
     });
    window.location.href = "http://www.redireccion.cl"; // Redirige a la página de redireccionamiento
  });
  