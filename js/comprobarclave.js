

function comprobarclave() {
    var clave1, calve2;
    
    clave1 = document.getElementById("contra1").value;
    clave2 = document.getElementById("contra2").value;

if(clave1==clave2) {
    alert("Las dos claves son iguales");
}else{
    alert("las claves no coinciden");
}

}