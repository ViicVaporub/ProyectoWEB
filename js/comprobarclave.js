const clave2=document.getElementById('contra2');
const clave1=document.getElementById('contra1');


function comprobarClave(){
    const clave1val = clave1.nodeValue.trim();
    const clave2val = clave2.nodeValue.trim();

if(clave1val==clave2val){
    alert("Las dos claves son iguales");
}else{
    alert("las claves no coinciden");
}

}