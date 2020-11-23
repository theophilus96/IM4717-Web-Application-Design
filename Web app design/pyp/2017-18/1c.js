var regexp = /^[A-Za-z]+[\w\s-.]*[\w]+$/;
console.log("regexp: ",regexp.test("sasa asd adasda"));

var regexp = /^[A-Za-z]+[\w\s-.]*[\w]+$/;
console.log("regexp: ",regexp.test("sasa   ,comma has been added"));

var regexp2 = /^(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^\&*\)\(+=._-]).*$/;
console.log("regexp2: ",regexp2.test("asdasdasdasdasdasdasdA)9"));

var regexp2 = /^(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^\&*\)\(+=._-]).*$/;
console.log("regexp2: ",regexp2.test("asdasdasdasdasda"));
