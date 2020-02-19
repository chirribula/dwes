function validar(){

    /*NOMBRE*/
    var nom=document.getElementById("nombre").value;
    nom=nom.trim() 
    if(nom==""){
        alert("El nombre no puedes estar vacío");
        documentk.getElementById("nombre").focus();
        return false;
    }


    /*EDAD*/
    var edad = parseInt(document.getElementById("edad").value);
    if(isNaN(edad)){
        alert("Tiene que introducir un número");
        documentk.getElementById("edad").focus();
        return false;
    }
    else if(edad<18 || edad>=99){
        alert("La edad debe de ser entre 18 y 99 años");
    }
    

    /*MOVIL*/
    var movil=document.getElementById("movil").value;
    movil=movil.trim();
    if( !(/^[6]{1}([0-9]+){8}$/i.test(movil)) ) {
        alert("Tienes que introducir un Móvil válido");
        document.getElementById("movil").focus();
        return false;
    }

    /*EMAIL*/
    var email=document.getElementById("email").value;
    email=email.trim();
    if( !(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(email)) ) {
        alert("El email no es válido");
        document.getElementById("email").focus();
        return false;
    }

    /*CONTRASEÑA */
    var pass=document.getElementById("pass").value;
    pass=pass.trim() 
    if(pass==""){
        alert("La contraseña no puede estar vacía");
        document.getElementById("pass").focus();
        return false;
    }

    /*REPETIR CONTRASEÑA */
    var pass2=document.getElementById("pass2").value;
    pass2=pass2.trim() 
    if(pass2==""){
        alert("Repetir contraseña no puede estar vacío");
        document.getElementById("pass2").focus();
        return false;
    }

    /*COMPROBAR CONTRASEÑA */
    if(pass!==pass2){
        alert("Las contraseñas no coinciden");
        document.getElementById("pass").focus();
        return false;
    }

   
} //funcion validar