function checkname(event) {
  // Get the target node of the event

  var myName = event.currentTarget;

  // Test the format of the input name
  //  Allow the spaces after the commas to be optional
  //  Allow the period after the initial to be optional

  var pos = myName.value.search(/([a-z]+\s*)/gi);

  if (pos != 0) {
    alert(
      "The name you entered (" +
        myName.value +
        ") is not in the correct form. \n" +
        "The correct form contains alphabet characters and character spaces"
    );
    myName.focus();
    myName.select();
    return false;
  }
}

// ********************************************************** //
// The event handler function for the phone number text box

function checkemail(event) {
  // Get the target node of the event

  var myemail = event.currentTarget;

  // Test the format of the input phone number

  var pos = myemail.value.search(
    /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+){2,3}\.([a-zA-Z]{2,3})$/g
  );

  if (pos != 0) {
    alert(
      "The email you entered (" +
        myemail.value +
        ") is not in the correct form. \n" +
        "The email field contains a user name part follows by “@” and a domain name part. The user name contains word characters including hyphen (“-”) and period (“.”). The domain name contains two to four address extensions. Each extension is string of word characters and separated from the others by a period (“.”). The last extension must have two to three characters"
    );
    myemail.focus();
    myemail.select();
    return false;
  }
}

function checkdate(event) {
  console.log("event:", event);
  var mydate = event.currentTarget;
  console.log("mydate:", mydate);
  console.log("mydate value:", mydate.value);

  datesplit = mydate.value.split("-");
  console.log("datesplit:", datesplit);
  var today = new Date();
  var year = today.getFullYear();
  console.log("year:", year);

  var month = today.getMonth();
  console.log("month:", month + 1);

  var day = today.getDate();
  console.log("day:", day);

  if (year > datesplit[0]) {
    alert(
      "The date you entered (" +
        mydate.value +
        ") is not in the correct form. \n"
    );
    mydate.focus();
    mydate.select();
    return false;
  }
  if (month + 1 > datesplit[1]) {
    alert(
      "The date you entered (" +
        mydate.value +
        ") is not in the correct form. \n"
    );
    mydate.focus();
    mydate.select();
    return false;
  }
  if (day > datesplit[2]) {
    alert(
      "The date you entered (" +
        mydate.value +
        ") is not in the correct form. \n"
    );
    mydate.focus();
    mydate.select();
    return false;
  }
}
