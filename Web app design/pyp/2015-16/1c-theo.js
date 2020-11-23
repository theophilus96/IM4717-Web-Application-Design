var regexp = /\b[-]*[^\d\W]*\b/;
console.log("regexp: ",regexp.test("sasa asd adasda"));

var regexp1ci = new RegExp(/\b[-]*[^dW]*\b/);
console.log("regexp1ci: ",regexp1ci.test("asdasdasd"));

var regexp2 = /^[A-Za-z]{2,3}[\d]{7}[A-Za-z]{1}$/;
console.log("regexp2: ",regexp2.test("sas1234567a"));

var regexp1 = new RegExp(/(\b[^\d\W]*\b)+([\s]?[A-Za-z\-])*(\b[^\d\W]*\b)$/);
console.log("regexp1: ",regexp1.test("sasa asd adasda"));

var regexp3 = /^[A-Za-z]+([\s]?[A-Za-z\-])*[A-Za-z]+$/;
console.log("regexp3: ",regexp3.test("sasa asd- adasda"));

var regexp4 = /^[\w.-]+@[\w.]*\.[\w]{2,4}$/;
console.log("regexp4: ",regexp4.test("123-sd.asd@asdas.asd.asdasd.asd.asd.asd.asd.asdd"));

var regexp5 = /([+][(][0-9]{0,2}[)])?[689][0-7]{7}/;
console.log("regexp5: ",regexp5.test("+(65)61234567"));


