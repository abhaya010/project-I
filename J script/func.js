 function validationform() {
     var fname = document.forms["messageform"]["firstname"].value;
     var lname = document.forms["messageform"]["lastname"].value;
     var email = document.forms["messageform"]["email"].value
     var message = document.forms["messageform"]["message"].value;

     if (fname == "" || lname == "" || email == "" || message == "") {
         alert("Empty Fields founds.Please fill all the information of the form.");
     } else {
         alert("Got it.We'll contact you soon.");
     }
 }
 


//  var b = true;
//  function buton() {
//      if (b) {
//          var a = document.getElementById("op");
//          var pop = document.getElementById("pop");
//          pop.innerHTML += a.innerHTML;
//          b = false;
//      }
//  }


 function show(){
     var op = document.querySelector("#op");
     if (op.style.display === "none") {
        op.style.display = "block";
      } else {
        op.style.display = "none";
      }
 }
 