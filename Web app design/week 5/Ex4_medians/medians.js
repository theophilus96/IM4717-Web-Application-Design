/* median.js
A funtion and a function tester
Illustrates array operation

Function Median
Parameter: An array of numbers
Result: The median of the array
Return value: none
*/

function median(list) {
  list.sort(function (a, b) {
    return a - b;
  });
  var list_len = list.length;

  /*
use the modulus operator to determine whether
the array's length is odd or even
use math.floor to truncate numbers
use math.round to round numbers
*/

  if (list_len % 2 == 1) return list[Math.floor(list_len / 2)];
  else return Math.round((list[list_len / 2 - 1] + list[list_len / 2]) / 2);
} // end of function median

//test driver
var my_list_1 = [8, 3, 9, 1, 4, 7];
var my_list_2 = [10, -2, 0, 5, 3, 1, 7];
var med = median(my_list_1);
document.write("Meidan of [", my_list_1, "] is: ", med, "<br />");
var med = median(my_list_2);
document.write("Meidan of [", my_list_2, "] is: ", med, "<br />");
