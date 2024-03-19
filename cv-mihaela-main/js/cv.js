console.log("cv js file");
//border:3px solid #840101;

const btnToToggle = document.querySelectorAll(".btnToToggle");
console.log("btnToToggle is an array with buttons : " , btnToToggle);

for(i=0 ; i<btnToToggle.length ; i++){
  btnToToggle[i].style.border="3px solid #625340";
  btnToToggle[i].addEventListener("click", function(event) {
    console.log("this is : ", this);
    event.preventDefault();
    this.nextElementSibling.classList.toggle("toggle");
    this.nextElementSibling.style.textAlign = "center";

    // this.style.fontSize = "1.5rem";
  })
}

//only for a single btn // the first

//const btnToToggle = document.querySelector("btnToToggle");
// btnToToggle.addEventListener("click", function(event) {
//   console.log("this is : ", this);
//   console.log("btnToToggle is : ", btnToToggle);
//   event.preventDefault();
//   btnToToggle.nextElementSibling.classList.toggle("toggle");
//   btnToToggle.nextElementSibling.style.textAlign = "center";
//
//   // this.style.fontSize = "1.5rem";
// })
