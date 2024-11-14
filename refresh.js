document.addEventListener("DOMContentLoaded", () => {
refreshDatos();
refreshId = setInterval(refreshDatos, 10000)
})
function refreshDatos(cont){
let temperatura = document.querySelector("#temp-int")
let humedad = document.querySelector("#humedad-int")
let viento = document.querySelector("#viento-int")
let incendio = document.querySelector("#incendio-int")
console.log(humedad);
humedad.innerHTML =(parseInt(humedad.innerHTML)+1) 
viento.innerHTML =(parseInt(viento.innerHTML)+1) 
incendio.innerHTML =(parseInt(incendio.innerHTML)+1) 
 temperatura.innerHTML = (parseInt(temperatura.innerHTML) + 1)


}