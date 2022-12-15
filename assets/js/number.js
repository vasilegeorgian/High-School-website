var speed = 10;

/* Call this function with a string containing the ID name to
 * the element containing the number you want to do a count animation on.*/
function incEltNbr(id) {
  elt = document.getElementById(id);
  endNbr = Number(document.getElementById(id).innerHTML);
  incNbrRec(0, endNbr, elt);
}

/*A recursive function to increase the number.*/
function incNbrRec(i, endNbr, elt) {
  if (i <= endNbr) {
    elt.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNbrRec(i + 12, endNbr, elt);
    }, speed);
  }
}

/*Function called on button click*/
function incNbr(){
  incEltNbr("nbr");
}

incEltNbr("nbr"); /*Call this funtion with the ID-name for that element to increase the number within*/


var speed = 5;

/* Call this function with a string containing the ID name to
 * the element containing the number you want to do a count animation on.*/
function incElteNumber(id) {
  elte = document.getElementById(id);
  endNumber = Number(document.getElementById(id).innerHTML);
  incNumberRec(6, endNumber, elte);
}

/*A recursive function to increase the number.*/
function incNumberRec(i, endNumber, elte) {
  if (i <= endNumber) {
    elte.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNumberRec(i + 12, endNumber, elte);
    }, speed);
  }
}

/*Function called on button click*/
function incNumber(){
  incElteNumber("Number");
}

incElteNumber("number"); /*Call this funtion with the ID-name for that element to increase the number within*/