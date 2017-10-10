function validation(){
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var mail = document.getElementById("mail").value;
    var adresse = document.getElementById("adresse").value;
    var nbvoyageurs = document.getElementById("nbvoyageurs").value;
    
    if (nom === ""){
        alert("Merci de saisir votre nom");
        return false;
    }
    if (prenom === ""){
        alert("Merci de saisir votre prenom");
        return false;
    }
    if (mail === ""){
        alert("Merci de saisir votre email");
        return false;
    } 
    if (adresse === ""){
        alert("Merci de saisir votre adresse");
        return false;
    }
    if (nbvoyageurs === ""){
        alert("Merci de saisir le nombre de places");
        return false;
    }
}


