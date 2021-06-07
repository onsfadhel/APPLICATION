var form = document.querySelector("form");
form.addEventListener('submit',function (e) {
    var password=document.getElementById("inputPassword");
    var confPassword=document.getElementById("inputConfpassword");
    var erreur;
    if(!password.value){
        erreur="Please enter your password";
    }
    if(password.value !=confPassword.value){
        erreur="the 2 passwords are incompatible";
    }
    if(password.value.length <= 8){
        erreur="Please enter a password longer than 8";
    }   
    if(erreur){
        e.preventDefault();
	    document.getElementById("erreur").innerHTML =erreur;
	    return false;
    }else {
	alert("Mot de passe modifié");
}   
})