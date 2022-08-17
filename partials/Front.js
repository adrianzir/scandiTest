let attrDiv = document.querySelector(".display_attr");
let selectOpt = document.querySelector("#productType");
console.log('holaaa');
// selectOpt.value
// selectOpt.addEventListener("click", switchAttr());
let typeOfProduct ='FURNITURE';
// function switchAttr(typeOfProduct) {
  switch (typeOfProduct) {
    case "FURNITURE":
      let fur = `<div id='attributes'>
    <label for='height'>HEIGHT (CM)</label>   
    <input type='text' name='height' id="height" > <br>
    <label for='width'>WIDTH (CM)</label>
    <input type='text' name='width' id="width"> <br>
    <label for='length'>LENGTH (CM)</label>
    <input type='text' name='length' id="length" ><br>
    <span>Please provide dimensions on HxWxL format</span>
    </div>`;
      attrDiv.innerHTML = fur;
      break;
    case "BOOK":
      let book = `<div id='attributes'>
    <label for='weight'>WEIGHT (KG)</label>
    <input type='text' name='weight' id="weight">
    </br>
    <span>Please provide weight of the book on Kilograms</span>
    </div>`;
      attrDiv.innerHTML = book;
      break;
    case "DVD":
      let dvd = `<div id='attributes'>
    <label for='size'>SIZE (MB)</label>
    <input type='text' name='size' ></br>
    <span>Please provide size of the DVD on megabytes</span>
    </div>`;
      attrDiv.innerHTML = dvd;
      break;
  }
// };

/* <script src="Front.js"></script><script src="Front.js"></script><script src="Front.js"></script> */

let nodeW  = document.getElementById('width').value;
let nodeL = document.getElementById('length').value;
let nodeH = document.getElementById('height').value;

let furnitureFormat = `${nodeH} x ${nodeW} x ${nodeL}`;
console.log(furnitureFormat)