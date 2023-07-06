const caja1 = document.querySelector(".c1");
const caja2 = document.querySelector(".c2");
const caja3 = document.querySelector(".c3");
const caja4 = document.querySelector(".c4");
const caja5 = document.querySelector(".c5");
const caja6 = document.querySelector(".c6");

caja1.addEventListener("click",(e)=>{
    
    window.location.href = "https://api.whatsapp.com/send?phone=573207498479&text=🎁 Quisiera Saber Sobre Las Cajas Sorpresas 🎁";
    

});
caja2.addEventListener("click",(e)=>{
    caja1.value = 10000;
    window.location.href = "https://api.whatsapp.com/send?phone=573207498479&text=🎁 Me Interesa La Caja Sorpresa de "+caja1.value+" Pesos 🎁";
    
    

});
caja3.addEventListener("click",(e)=>{
    caja1.value = 15000;
    window.location.href = "https://api.whatsapp.com/send?phone=573207498479&text=🎁 Me Interesa La Caja Sorpresa de "+caja1.value+" Pesos 🎁";
    

});
caja4.addEventListener("click",(e)=>{
    caja1.value = 20000;
    window.location.href = "https://api.whatsapp.com/send?phone=573207498479&text=🎁 Me Interesa La Caja Sorpresa de "+caja1.value+" Pesos 🎁";
    

});
caja5.addEventListener("click",(e)=>{
    caja1.value = 25000;
    window.location.href = "https://api.whatsapp.com/send?phone=573207498479&text=🎁 Me Interesa La Caja Sorpresa de "+caja1.value+" Pesos 🎁";
    

});
caja6.addEventListener("click",(e)=>{
    caja1.value = 30000;
    window.location.href = "https://api.whatsapp.com/send?phone=573207498479&text=🎁 Me Interesa La Caja Sorpresa de "+caja1.value+" Pesos 🎁";
    

});