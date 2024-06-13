const codi = document.getElementById("codigo");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
const circulo = document.querySelector(".circulo");
const menu = document.querySelector(".menu");
/*const botoncito = document.getElementById("book");
const barra = document.querySelector(".barra-lateral");*/
const tablaoscura = document.querySelector(".table");
const tablaheader = document.querySelector(".table__header ");
const h1oscuro = document.querySelector("h1");
const exportar = document.querySelector(".expo");
const buscaroscuro = document.querySelector(".input-group");
const grupos = document.querySelector(".titulo");
const options = document.querySelector(".opciones");
const color = document.querySelector(".opcion");
const color2 = document.querySelector(".contenido-opcion");
/*const opcionesnegras =  document.querySelector(".titulo2");*/


menu.addEventListener("click",()=>{
    barraLateral.classList.toggle("max-barra-lateral");
    if(barraLateral.classList.contains("max-barra-lateral")){
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    }
    else{
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }
    if(window.innerWidth<=350){
        barraLateral.classList.add("mini-barra-lateral");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        })
    }
});
palanca.addEventListener("click",()=>{
    let body = document.body;
    body.classList.toggle("dark-mode");
    circulo.classList.toggle("prendido");
    /*formulario.classList.toggle("dark-mode2f");
    iconOs.classList.toggle("dark-modeiconoclose");
    btndark.classList.toggle("darkbtn");
    darkini.classList.toggle("darkinicio");
    darkico.classList.toggle("darkiconos");
    darkico2.classList.toggle("darkiconos2");
    cajasdark1.classList.toggle("darkcajas1");
    cajasdark2.classList.toggle("darkcajas2");
    olvidaste.classList.toggle("darkOlvidaste");
    mostrar.classList.toggle("darkmostrar");
    darkletras1.classList.toggle("darkletras1");
    darkletras2.classList.toggle("darkletras2");*/
    tablaoscura.classList.toggle("tabledark");
    tablaheader.classList.toggle("tableheaderdark");
    h1oscuro.classList.toggle("h1dark");
    exportar.classList.toggle("exportardark");
    buscaroscuro.classList.toggle("buscardark");
    grupos.classList.toggle("gruposdark");
    options.classList.toggle("opcionesdark");
    color.classList.toggle("opcionesxde");
    color2.classList.toggle("colori");
    /*opcionesnegras.classList.toggle("opcionesdark");*/
   
});
    /*codi.addEventListener("click",()=>{
    barraLateral.classList.toggle("mini-barra-lateral");
    spans.forEach((span)=>{
       span.classList.toggle("oculto");
    });
});*/

/*botoncito.onclick = function() {
    barra.classList.toggle("active");
}*/
const select = document.querySelector('#select');
const opciones = document.querySelector('#opciones');
const contenidoSelect = document.querySelector('#select .contenido-select');
const hiddenInput = document.querySelector('#inputSelect');

document.querySelectorAll('#opciones > .opcion').forEach((opcion) => {
	opcion.addEventListener('click', (e) => {
		e.preventDefault();
		contenidoSelect.innerHTML = e.currentTarget.innerHTML;
		select.classList.toggle('active');
		opciones.classList.toggle('active');
		hiddenInput.value = e.currentTarget.querySelector('.titulo').innerText;
	});
});

select.addEventListener('click', () => {
	select.classList.toggle('active');
	opciones.classList.toggle('active');
});