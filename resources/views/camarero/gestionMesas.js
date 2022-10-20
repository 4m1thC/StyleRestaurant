
let disponibilidad='disponible'

function iniciarJuego(){ 
    let botonEstadoMesas=document.getElementById('boton1_1-cambiarEstado')
    botonEstadoMesas.addEventListener('click',combate)
    
 
} 



 //ESTADO DE LA MESA
function combate(){ 
    
    let spanMesaDisponiblilidad=document.getElementById('mesa-disponibilidad1_1') 
    alert(spanMesaDisponiblilidad) 
    if('disponible'==disponibilidad){ 
            alert("esta segur@ de cambiar el estado de la mesa->O") 
            spanMesaDisponiblilidad.innerHTML='ocupado'
    
    }else{ 
        alert("esta segur@ de cambiar el estado de la mesa->D")
        spanMesaDisponiblilidad.innerHTML='disponible'
         
    } 
    //revisarVidas() 

} 
window.addEventListener('load',iniciarJuego)