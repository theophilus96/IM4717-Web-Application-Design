function javalistener(event) {
  // Get the target node of the event

  var javaqty = event.currentTarget;
  console.log("javaqty : ", javaqty);
  var javavalue = javaqty.value;
  var javaprice = 2.0;
  document.getElementById("javasum").value = javavalue * javaprice;
  javatotal = javavalue * javaprice;
  console.log("javatotal : ", javatotal);

  //javaqty.focus();
  //javaqty.select();
  //javaqty.onChange();

  if (typeof cafetotal === "undefined") {
    cafetotal = 0;
  }

  if (typeof capputotal === "undefined") {
    capputotal = 0;
  }
  totallistener(javatotal, cafetotal, capputotal);
}

function caferadio(price) {
  console.log("caferadio price: ", price);
  if (typeof cafevalue == "undefined") {
    cafevalue = 0;
  }
  document.getElementById("cafesum").value = cafevalue * price;
  cafetotal = cafevalue * price;

  if (typeof javatotal == "undefined") {
    javatotal = 0;
  }

  if (typeof capputotal === "undefined") {
    capputotal = 0;
  }

  totallistener(javatotal, cafetotal, capputotal);

  if (price == 2.0) {
    cafeprice = 2.0;
    return 2.0;
  } else if (price == 3.0) {
    cafeprice = 3.0;
    return 3.0;
  } else {
    return null;
  }
}

function cappuradio(price) {
  console.log("cappuradio price: ", price);
  if (typeof cappuvalue == "undefined") {
    cappuvalue = 0;
  }
  document.getElementById("cappusum").value = cappuvalue * price;
  capputotal = cappuvalue * price;
  if (typeof javatotal == "undefined") {
    javatotal = 0;
  }

  if (typeof cafetotal === "undefined") {
    cafetotal = 0;
  }

  totallistener(javatotal, cafetotal, capputotal);
  if (price == 4.75) {
    cappuprice = 4.75;
    return 4.75;
  } else if (price == 5.75) {
    cappuprice = 5.75;
    return 5.75;
  } else {
    return null;
  }
}

function cafelistener(event) {
  // Get the target node of the event
  console.log("event: ", event);
  var cafeqty = event.currentTarget;
  console.log("cafeqty: ", cafeqty);
  console.log("cafeqty value: ", cafeqty.value);
  cafevalue = cafeqty.value;
  //var cafeprice = caferadio();
  console.log("cafeprice: ", cafeprice);
  document.getElementById("cafesum").value = cafevalue * cafeprice;
  cafetotal = cafevalue * cafeprice;
  cafeqty.focus();
  cafeqty.select();
  if (typeof javatotal == "undefined") {
    javatotal = 0;
  }

  if (typeof capputotal === "undefined") {
    capputotal = 0;
  }
  totallistener(javatotal, cafetotal, capputotal);
}

function cappulistener(event) {
  // Get the target node of the event
  console.log("event: ", event);
  var cappuqty = event.currentTarget;
  console.log("cappuqty: ", cappuqty);
  console.log("cappuqty value: ", cappuqty.value);
  cappuvalue = cappuqty.value;
  //var cafeprice = caferadio();
  console.log("cappuprice: ", cappuprice);
  document.getElementById("cappusum").value = cappuvalue * cappuprice;
  capputotal = cappuvalue * cappuprice;
  //javaqty.focus();
  //javaqty.select();
  //cappuqty.onChange();
  if (typeof javatotal == "undefined") {
    javatotal = 0;
  }

  if (typeof cafetotal === "undefined") {
    cafetotal = 0;
  }

  totallistener(javatotal, cafetotal, capputotal);
}

function totallistener(javatotal, cafetotal, capputotal) {
  if (typeof javatotal == "undefined") {
    javatotal = 0;
  }

  if (typeof cafetotal === "undefined") {
    cafetotal = 0;
  }

  if (typeof capputotal === "undefined") {
    capputotal = 0;
  }

  console.log("javatotal: ", javatotal);

  console.log("cafetotal: ", cafetotal);

  console.log("capputotal: ", capputotal);

  /*
  console.log("javatotal: ", javatotal);
  console.log("cafetotal: ", cafetotal);
  console.log("capputotal: ", capputotal);
  
  totalprice = 0;
  if (javatotal !== null){
      totalprice += javatotal;
 
  }*/

  totalprice = javatotal + cafetotal + capputotal;
  console.log("totalprice: ", totalprice);

  document.getElementById("totalsum").value = totalprice;
}
