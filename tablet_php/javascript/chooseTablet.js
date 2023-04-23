console.log("hello from chooseTablet.js");

///-------------------------------------------------------------------------------------------
//show array items in a list

const namesPills=["androgens" , "antibiotics" , "antifungals" , "antitoxins" , "antituberculous" , "antivenoms" , "antivirals" , "calcitonin" , "corticosteroids" , "desloughing" , "estrogens", "insulin" , "topical" , "immune"];

console.log("namesPills.length is : " , namesPills.length);

//----

const pillList=namesPills.map((el , index) =>{

  let liSingle=document.createElement("li");
  liSingle.innerText=el;

  //map are intotdeauna return

  return liSingle;
});

console.log("pillList is : " , pillList);

//---------

const pillUl=document.createElement("ul");

pillList.forEach((el , index) =>{
  //el reprezinta fiecare liSingle
  pillUl.appendChild(el);
});

console.log("pillUl is : " , pillUl);


//----------

const itemsArrContainer=document.getElementById("itemsArrContainer");
itemsArrContainer.appendChild(pillUl);

//itemsArrContainer.style.border="3px solid red";

///-------------------------------------------------------------------------------------------

const choosePills=[
    {
        "index":1,
        "name":"androgens",
        "title":"Androgens tablet",
        "activeOn":"endocrine problems",
        "imgPill":"./images/androgens.jpg",
        "linkImg":"https://images.pexels.com/photos/4210653/pexels-photo-4210653.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":500,
        "activeSubstance":"androgens"
      },
      {
        "index":8,
        "name":"antibiotics",
        "title":"Antibiotics tablet",
        "activeOn":"infection problems",
        "imgPill":"./images/antibiotics.jpg",
        "linkImg":"https://images.pexels.com/photos/3683090/pexels-photo-3683090.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":900,
        "activeSubstance":"antibiotics"
      },
      {
        "index":11,
        "name":"antifungals",
        "title":"Antifungals tablet",
        "activeOn":"infection problems",
        "imgPill":"./images/antifungals.jpg",
        "linkImg":"https://images.pexels.com/photos/4046997/pexels-photo-4046997.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":6500,
        "activeSubstance":"antifungals"
      },
      {
        "index":12,
        "name":"antitoxins",
        "title":"Antitoxins tablet",
        "activeOn":"infection problems",
        "imgPill":"./images/antitoxins.jpg",
        "linkImg":"https://images.pexels.com/photos/4210612/pexels-photo-4210612.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":9500,
        "activeSubstance":"antitoxins"
      },
      {
        "index":14,
        "name":"antituberculous",
        "title":"Antituberculous drugs tablet",
        "activeOn":"infection problems",
        "imgPill":"./images/drugs.jpg",
        "linkImg":"https://images.pexels.com/photos/6074963/pexels-photo-6074963.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":470,
        "activeSubstance":"antituberculous drugs"
      },
      {
        "index":13,
        "name":"antivenoms",
        "title":"Antivenoms tablet",
        "activeOn":"infection problems",
        "imgPill":"./images/antivenoms.jpg",
        "linkImg":"https://images.pexels.com/photos/3683120/pexels-photo-3683120.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":1350,
        "activeSubstance":"antivenoms"
      },
      {
        "index":10,
        "name":"antivirals",
        "title":"Antivirals tablet",
        "activeOn":"infection problems",
        "imgPill":"./images/antivirals.jpg",
        "linkImg":"https://images.pexels.com/photos/3683068/pexels-photo-3683068.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":5780,
        "activeSubstance":"antivirals"
      },
      {
        "index":4,
        "name":"calcitonin",
        "title":"Calcitonin tablet",
        "activeOn":"endocrine problems",
        "imgPill":"./images/calcitonin.jpg",
        "linkImg":"https://images.pexels.com/photos/7615572/pexels-photo-7615572.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":790,
        "activeSubstance":"calcitonin"
      },
      {
        "index":5,
        "name":"corticosteroids",
        "title":"Corticosteroids tablet",
        "activeOn":"skin problems",
        "imgPill":"./images/corticosteroids.jpg",
        "linkImg":"https://images.pexels.com/photos/3683063/pexels-photo-3683063.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":3000,
        "activeSubstance":"corticosteroids"
      },
      {
        "index":9,
        "name":"desloughing",
        "title":"Desloughing agents tablet",
        "activeOn":"skin problems",
        "imgPill":"./images/agents.jpg",
        "linkImg":"https://images.pexels.com/photos/4040573/pexels-photo-4040573.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"no",
        "color":"#FFC107",
        "price":750,
        "activeSubstance":"desloughing agents"
      },
      {
        "index":2,
        "name":"estrogens",
        "title":"Estrogens tablet",
        "activeOn":"endocrine problems",
        "imgPill":"./images/estrogens.jpg",
        "linkImg":"https://images.pexels.com/photos/7615404/pexels-photo-7615404.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"no",
        "color":"#FFC107",
        "price":800,
        "activeSubstance":"estrogens"
      },
      {
        "index":3,
        "name":"insulin",
        "title":"Insulin tablet",
        "activeOn":"endocrine problems",
        "imgPill":"./images/insulin.jpg",
        "linkImg":"https://images.pexels.com/photos/7615577/pexels-photo-7615577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"no",
        "color":"#FFC107",
        "price":200,
        "activeSubstance":"insulin"
      },
   
      {
        "index":7,
        "name":"topical",
        "title":"Topical antibiotics tablet",
        "activeOn":"skin problems",
        "imgPill":"./images/topical.jpg",
        "linkImg":"https://images.pexels.com/photos/143654/pexels-photo-143654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":90,
        "activeSubstance":"topical antibiotics"
      },
      {
        "index":6,
        "name":"immune",
        "title":"Immune modulators tablet",
        "activeOn":"skin problems",
        "imgPill":"./images/modulators.jpg",
        "linkImg":"https://images.pexels.com/photos/3683091/pexels-photo-3683091.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":2600,
        "activeSubstance":"immune modulators"
      },
];

console.log("choosePills length is:" , choosePills.length);

//--------------------------------------------------------------------------------------------------------------------------------------------------------------
//input
const chooseTablet=document.getElementById("chooseTablet");
let userValue=chooseTablet.value;

//button
const showWrittenTablet=document.getElementById("showWrittenTablet");

//container div
const pills_container_yourTablet=document.getElementById("pills_container_yourTablet");

let choice=``;
pills_container_yourTablet.innerText=choice;

showWrittenTablet.addEventListener("click" , function(event){
    event.preventDefault();
    console.log("show tablet btn");
    
    console.log("chooseTablet.value is: " , chooseTablet.value);
    
for(let i=0 ; i<choosePills.length ; i++){

  if(chooseTablet.value === choosePills[i].name){
    console.log("choosePills[i] is : " , choosePills[i]);

    choice = `
    <div class="card" style="width: 18rem">
            <img src="${choosePills[i].imgPill}" class="card-img-top" alt="pill_item_img">
            <div class="card-body">
                <h5 class="card-title" style="color:${choosePills[i].color}">${choosePills[i].title}</h>
                <h5 class="card-title">Price: ${choosePills[i].price}</h5>
                <h5 class="card-title">Active ingredient: ${choosePills[i].activeSubstance}</h5>
                <h6 class="card-title">It is for : ${choosePills[i].activeOn}</h6>
                <a href="${choosePills[i].linkImg}" 
                   style="box-shadow: 1px 1px 3px #888888"
                   target="_blank" 
                   class="btn btn-primary">Pexels image source</a>
            </div>
        </div>
    `;

    pills_container_yourTablet.innerHTML=choice;

  }
}

  ///-----

});










































