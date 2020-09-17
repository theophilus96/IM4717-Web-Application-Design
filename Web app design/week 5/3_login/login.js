function validateForm() {
  "use strict";

  var email = document.getElementById("email");
  var password = document.getElementById("password");

  if (email.value.length > 0 && password.value.length > 0) {
    return true;
  } else {
    alert("Please complete the form!");
    return false;
  }
}

function init(){
    'use strict';

    if (document && document.getElementById) {
        var loginForm = document.getElementById("loginForm");
        loginForm.onsubmit = validateForm
    }
}

window.onload = init;