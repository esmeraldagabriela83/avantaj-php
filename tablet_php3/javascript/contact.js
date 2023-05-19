console.log("hello from contact js");

const sentForm=document.getElementById("sentForm");


//----

const name=document.getElementById("name");
console.log("name is : " , name);

const email =document.getElementById("email");
console.log("email is : " , email);


const message=document.getElementById("message");
console.log("message is " , message);


const submit=document.getElementById("submit");
console.log("submit is " , submit);




submit.addEventListener("click" , function(event){
    event.preventDefault();

    console.log("you clicked the submit btn");


    //----
console.log("name value is " , name.value);

console.log("email value is " , email.value);

console.log("message value is " , message.value);
    //----

    sentForm.innerText="sent form";

});

//----

