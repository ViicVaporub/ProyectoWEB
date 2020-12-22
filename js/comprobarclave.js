function verificarPasswords() {
    contra1 = document.getElementById('contra1');
    contra2 = document.getElementById('contra2');
    if (contra1.value != contra2.value) {
        document.getElementById("error").classList.add("mostrar");
        return false;
    } else {
        document.getElementById("error").classList.remove("mostrar"); 
        document.getElementById("ok").classList.remove("ocultar");
        document.getElementById("login").disabled = true;
 
        setTimeout(function() {
            location.reload();
        }, 3000);
 
        return true;
    }
 
}