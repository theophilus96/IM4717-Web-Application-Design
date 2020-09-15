function tst_phone_num(num) {
  var ok = num.search(/^\d{3}-\d{4}$/);
  if (ok == 0) return true;
  else return false;
} // end of function tst_phone_num

var tst = tst_phone_num("444-5432");
if (tst)
    document.write("444-5432 is a valid phone number <br />");
else document.write("program error <br />");

var tst = tst_phone_num("444-r432");
if (tst) 
    document.write("444-r432 is a valid phone number <br />");
else document.write("program error <br />");

var tst = tst_phone_num("44-1234");
if (tst) 
    document.write("444-1234 is a valid phone number <br />");
else document.write("program error <br />");
