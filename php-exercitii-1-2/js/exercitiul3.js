console.log("hello from exercitiul 3 js");

//https://www.youtube.com/watch?v=kzFJ7St_ma8
//How To Get Selected Option Value From Drop Down List Using JavaScript [ with source code ]

//w 3 school js
//https://www.w3schools.com/tags/att_option_value.asp


var allOptions=document.querySelectorAll('#form-one select option');

console.log("allOptions is an arr" , allOptions);
console.log("allOptions.length is an arr" , allOptions.length);

for(let i=0 ; i < allOptions.length ; i++ ){

    allOptions[i].style.color="green";
    allOptions[i].style.backgroundColor="floralwhite";
    allOptions[i].style.fontSize="1.3rem";

}

//-----------------------------------------------------------------------------------------------------------------------------------------------

//selectie lista

var listSelect=document.getElementById('listSelect');
console.log("listSelect is : " , listSelect);
console.log("---listSelect.value is : " , listSelect.value);


//selectie input submit

var submitInput=document.getElementById('submitInput');
console.log("submitInput is : " ,  submitInput);


//selectie pt afisare optiune aleasa de user
var userMounthValueTitle=document.getElementById('userMounthValueTitle');
console.log("userMounthValueTitle is : " ,  userMounthValueTitle);
userMounthValueTitle.style.color="DeepSkyBlue";


submitInput.addEventListener("click" , cbShowOptionVal)


function cbShowOptionVal(event){

    event.preventDefault();
console.log("you clicked the input submit");

console.log("user chooses this option: " , listSelect.value);

userMounthValueTitle.innerText=listSelect.value;

}






//