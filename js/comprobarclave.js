function comprobarclave () {
    var c1,c2;
    c1 = document.getElementById('contra1')
    c2 = document.getElementById('contra2')
    if(c1 != c2){
        alert("Las contraseñas no coinciden")
        return false;
    }else{
        return true;
    }
       
    
}