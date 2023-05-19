console.log("hello from contactMore js");




//----

const age=document.getElementById("age");
console.log("age is : " , age);

const phone =document.getElementById("phone");
console.log("phone is : " , phone);


const drName=document.getElementById("drName");
console.log("drName is " , drName);


const disease=document.getElementById("disease");
console.log("disease is " , disease);


const medication=document.getElementById("medication");
console.log("medication is " , medication);




///---------------------------------


const submitMore=document.getElementById("submit");
console.log("submitMore is " , submit);

////------------------------------------


submitMore.addEventListener("click" , function(event){
    event.preventDefault();

    console.log("you clicked the submitMore / submit btn");


    //----
console.log("age value is " , age.value);

console.log("phone value is " , phone.value);

console.log("drName value is " , drName.value);

console.log("disease value is " , disease.value);

console.log("medication value is " , medication.value);
    //----



});

//----

