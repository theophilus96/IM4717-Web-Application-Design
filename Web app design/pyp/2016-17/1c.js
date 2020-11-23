var regexp1 = new RegExp(/^[A-Za-z]+([\s.]?[A-Za-z])*[A-Za-z]*$/);
console.log("regexp1: ",regexp1.test("asdasd asdassdassd asdasdasd as.a asdasdasdasd"));

var regexp2 = new RegExp(/^[A-Z][0-9]{7}[A-Z]$/);
console.log("regexp2: ",regexp2.test("A1234567A"));

var regexp3 = new RegExp(/^[0-9]{4}[\-]?[0-9]{4}$/);
console.log("regexp3: ",regexp3.test("1234-5678"));

var regexp4 = new RegExp(/^([-.]?[\w])+@[\w.]+\.[A-Za-z]{2,4}$/);
console.log("regexp4: ",regexp4.test("asdasd.sdsdsdasdasdsd@dad.asd"));

