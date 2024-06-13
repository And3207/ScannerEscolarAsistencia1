    var qrData = "";
    function generarQR() {
      var numControl = document.getElementById("control-number").value;
      if (numControl.trim() === "") {
        alert("Por favor completa todos los campos");
        return;
      }

      var qrContainer = document.getElementById("qr-container");
      qrContainer.innerHTML = ""; // Limpiar cualquier código QR anterior

 qrData = numControl; // Guardar el código QR generado
      console.log("Código QR generado:", qrData); 
      var qr = new QRCode(qrContainer, {
        text: numControl,
        width: 138,
        height: 128,
         colorDark: "#000", // Cambia el color de los módulos oscuros
        colorLight: "#ffffff"
      });

      qrContainer.classList.add('show-qr'); // Agregar la clase para mostrar la animación
    }
    
    function descargarQR() {
      if (!qrData) {
        alert("Primero genera un código QR");
        return;
      }

      var qrCanvas = document.querySelector("#qr-container canvas");
      var qrImageURL = qrCanvas.toDataURL("image/png"); // Obtener la URL de la imagen del código QR
      var descargarLink = document.createElement("a");
      descargarLink.href = qrImageURL;
      descargarLink.download = "codigo_qr.png"; // Nombre del archivo a descargar
      document.body.appendChild(descargarLink);
      descargarLink.click();
      document.body.removeChild(descargarLink);
    }

    function registrar() {
      if (!qrData) {
        alert("Primero genera un código QR");
        return;
      }

      var listNumber = document.getElementById("list-number").value;
      var controlNumber = document.getElementById("control-number").value;
      var name = document.getElementById("name").value;
      
      // Validar que todos los campos estén completos
      if (listNumber.trim() === "" || controlNumber.trim() === "" || name.trim() === "") {
        alert("Por favor completa todos los campos");
        return;
      }

      /*// Simular el guardado de datos
      console.log("Datos registrados:");
      console.log("Número de lista:", listNumber);
      console.log("Número de control:", controlNumber);
      console.log("Nombre completo:", name);

      // Aquí puedes agregar el código para enviar los datos a tu servidor
      alert("Datos registrados exitosamente");
    }*/


    document.getElementById("modal-list-number").textContent = "Número de lista: " + listNumber;
    document.getElementById("modal-control-number").textContent = "Número de control: " + controlNumber;
    document.getElementById("modal-name").textContent = "Nombre completo: " + name;

    // Mostrar la ventana modal
    var modal = document.getElementById("registroModal");
    modal.style.display = "block";
  
    }
  function cerrarModal() {
    var modal = document.getElementById("registroModal");
    modal.style.display = "none";
  }

  // Cerrar la modal cuando el usuario haga clic fuera de ella
  window.onclick = function(event) {
    var modal = document.getElementById("registroModal");
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

