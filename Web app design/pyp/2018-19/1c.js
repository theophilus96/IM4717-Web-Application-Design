var regexp = /^[A-Za-z][A-Za-z0-9\s_]*[\w]$/;
console.log("regexp: ", regexp.test("asdasdasdasdasda_"));

var regexp1 = /(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^\&*\)\(+=._-]).{8,}/;
console.log("regexp1: ", regexp1.test("asdasdasdasd(9A"));

var regexp2 = /^[\w.]+@([\w]+\.){1,3}[\w]+$/;
console.log("regexp2: ", regexp2.test("asd@qsdasdsa.asdsd"));

var regexp3 = /([+][(][0-9]{2}[)])?[8,9][0-9]{3}[-]?[0-9]{4}$/;
console.log("regexp3: ", regexp3.test("+(65)81231234"));


