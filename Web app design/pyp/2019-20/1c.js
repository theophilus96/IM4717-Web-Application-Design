var regexp = /^[A-Za-z][\w\s-_]*[\w]$/;
console.log("regexp: ", regexp.test("s2131-sdasdasd dasdda"));

var LoginName = document.getElementById("LoginName");

if (LoginName.value.length > 0) {
  if (regexp.test(LoginName.value) === false) {
    alert("You must enter a valid login name");
    LoginName.focus();
    LoginName.select();
    return false;
  } else {
    alert("The Login Name entered correctly");
  }
} else {
  alert("You must enter a valid login name");
  return false;
}

var regexp1 = /(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^\&*\)\(+=._-]).*/;
console.log("regexp1: ", regexp1.test("s2131-sdasdasd dasdda"));
//(?=.*[A-Z])(?=.*[0-9])(?=.*[\W]).*

var regexp2 = /^[\w.]+@([A-Za-z]+\.){1,3}[A-Za-z]+$/;
console.log(
  "regexp2: ",
  regexp2.test("as313245345345dadsasdasd.asddsdsdasdasd.asdasdda.asdasdasdd")
);

var regexp3 = /^[A-Za-z][\d]{7,9}[A-Za-z]$/;
console.log(
  "regexp3: ",
  regexp3.test("as313245345345dadsasdasd.asddsdsdasdasd.asdasdda.asdasdasdd")
);

if (regexp3.test(NIN.value) === false) {
  alert("Incorrect NIN");
  NIN.focus();
  NIN.select();
  return false;
} else {
  alert("Correct NIN");
}

var regexp4 = /^[6,8,9][\d]{7}$/;
console.log(
  "regexp4: ",
  regexp4.test("91234567")
);
