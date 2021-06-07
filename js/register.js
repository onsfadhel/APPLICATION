var form = document.querySelector("form");
form.addEventListener('submit',function (e) {
    var username=document.getElementById("inputUsername");
    var email=document.getElementById("inputEmail");
    var university=document.getElementById("inputUniversity");
    var country=document.getElementById("inputCountry");
    var brith=document.getElementById("inputBirth");
    var password=document.getElementById("inputPassword");
    var confPassword=document.getElementById("inputConfpassword");
    var erreur;
    if(!username.value){
        erreur="Please enter your username";
    }
     if(!email.value){
        erreur="Please enter your email";
    }
    if(!brith.value){
        erreur="Please enter your birth date";
    }
    if(!university.value){
        erreur="Please enter your university name";
    }
    if(!country.value){
        erreur="Please enter the name of your country";
    }
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
	alert("formulaire envoyé");
}   
})