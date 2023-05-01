console.log("hello from opinion.js");

const img_opinion=document.getElementById("img_opinion");

console.log("img_opinion is : " , img_opinion);




img_opinion.style.backgroundImage="url(./images/opinion.jpg)";
img_opinion.style.height="100vh";
img_opinion.style.width="100vw";
img_opinion.style.padding="1em";
img_opinion.style.backgroundColor="#198754";
img_opinion.style.backgroundRepeat="no-repeat";
img_opinion.style.backgroundPosition="center";
img_opinion.style.backgroundSize="cover";
// img_opinion.style.border="3px solid yellow";
img_opinion.style.marginTop="-30vh";


//click

img_opinion.addEventListener("click" , function(event){
event.preventDefault();

console.log("you clicked the img");

this.style.backgroundImage="url(./images/click_terms_cond.jpg)";

this.style.height="100vh";
this.style.width="100vw";
this.style.padding="1em";
this.style.backgroundColor="#198754";
this.style.backgroundRepeat="no-repeat";
this.style.backgroundPosition="center";
this.style.backgroundSize="cover";
// this.style.border="3px solid violet";

});


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

const nameUser=document.getElementById("nameUser");
console.log("nameUser is:" , nameUser);
///

const emailUser=document.getElementById("emailUser");
console.log("emailUser is:" , emailUser);
///

const phoneUser=document.getElementById("phoneUser");
console.log("phoneUser" , phoneUser);
///

const messageUser=document.getElementById("messageUser");
console.log("messageUser" , messageUser);
///


const submit=document.getElementById("submit");
console.log("submit" , submit);
///

const sentFormOpinion=document.getElementById("sentFormOpinion");
console.log("sentFormOpinion is : " ,sentFormOpinion );
///



submit.addEventListener("click" , function(event){
    event.preventDefault();

    console.log("nameUser value is : " , nameUser.value);
    console.log("emailUser value is : " , emailUser.value);
    console.log("phoneUser value is : " , phoneUser.value);
    console.log("messageUser value is : " , messageUser.value);

    sentFormOpinion.innerText="Sent form";

});


