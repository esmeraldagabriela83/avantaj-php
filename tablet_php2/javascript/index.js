console.log("hello from index.js for index.html page");

const pills=[
    {
        "index":1,
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
        "index":2,
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
        "index":4,
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
        "index":6,
        "title":"Immune modulators tablet",
        "activeOn":"skin problems",
        "imgPill":"./images/modulators.jpg",
        "linkImg":"https://images.pexels.com/photos/3683091/pexels-photo-3683091.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":2600,
        "activeSubstance":"immune modulators"
      },
      {
        "index":7,
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
        "index":8,
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
        "index":9,
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
        "index":10,
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
        "index":11,
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
        "index":13,
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
        "index":14,
        "title":"Antituberculous drugs tablet",
        "activeOn":"infection problems",
        "imgPill":"./images/drugs.jpg",
        "linkImg":"https://images.pexels.com/photos/6074963/pexels-photo-6074963.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "inventory":"yes",
        "color":"#198754",
        "price":470,
        "activeSubstance":"antituberculous drugs"
      },
];

console.log("pills length" , pills.length);

//--------------------------------------------------------------------------------------------------------------------------------------------------------------

const pillsToShowAll=[...pills];
console.log("pillsToShowAll.length is : " , pillsToShowAll.length);

//---

const pillsEndocrine=[...pills];
console.log("pillsEndocrine.length is : " , pillsEndocrine.length);

//--

const pillsSkin=[...pills];
console.log("pillsSkin.length is :" , pillsSkin.length);

//----

const pillsInfection=[...pills];
console.log("pillsInfection.length" , pillsInfection.length);

//---
const pillsInStock=[...pills];
console.log("pillsInStock is : " , pillsInStock);

//----

const pillsNoStock=[...pills];
console.log("pillsNoStock is : " , pillsNoStock);
//---------------------------------------------------------------------------------------------------------------------------------------------------------------

const pills_container=document.getElementById("pills_container");
// pills_container.style.border="3px solid red";



let pillsContent=``;
let pillsContentEndocrine=``;
let pillsContentSkin=``;
let pillsContentInfection=``;

let pillsInStockContent=``;
let pillsNoStockContent=``;

//--show all pills


const showAllPillsBtn=document.getElementById("showAllPillsBtn");

showAllPillsBtn.addEventListener("click" , function(event){
    event.preventDefault();
    console.log("you clicked the show all pills btn");

    //---
    pillsToShowAll.forEach(showAllCallBackFunc);

    function showAllCallBackFunc(pillItem){
        pillsContent +=`
        <div class="card" style="width: 18rem">
            <img src="${pillItem.imgPill}" class="card-img-top" alt="pill_item_img">
            <div class="card-body">
                <h5 class="card-title" style="color:${pillItem.color}">${pillItem.title}</h>
                <h5 class="card-title">Price: ${pillItem.price}</h5>
                <h5 class="card-title">Active ingredient: ${pillItem.activeSubstance}</h5>
                <h6 class="card-title">It is for : ${pillItem.activeOn}</h6>
                <a href="${pillItem.linkImg}" 
                   style="box-shadow: 1px 1px 3px #888888"
                   target="_blank" 
                   class="btn btn-primary">Pexels image source</a>
            </div>
        </div>
        `;
    }
    //---
pills_container.innerHTML=pillsContent;

});


//show endocrine-------------------------------------------------------------------------------------------------------------------------------


const pills_containerEndocrine=document.getElementById("pills_containerEndocrine");

const endocrineProblemsBtn=document.getElementById("endocrineProblemsBtn");
endocrineProblemsBtn.addEventListener("click" , function(event){
  event.preventDefault();
  console.log("endocrine btn clicked");

  //--
  const filterEndocrine=pillsEndocrine.filter(filterCBfunc);

  function filterCBfunc(pillItem , index){
    return pillItem.activeOn === "endocrine problems";
  }

  console.log("filterEndocrine is : " , filterEndocrine);
  //--
  for(let i=0 ; i<filterEndocrine.length ; i++){
    pillsContentEndocrine +=`
    <div class="card" style="width: 18rem">
        <img src="${filterEndocrine[i].imgPill}" class="card-img-top" alt="pill_item_img">
        <div class="card-body">
            <h5 class="card-title" style="color:${filterEndocrine[i].color}">${filterEndocrine[i].title}</h>
            <h5 class="card-title">Price: ${filterEndocrine[i].price}</h5>
            <h5 class="card-title">Active ingredient: ${filterEndocrine[i].activeSubstance}</h5>
            <h6 class="card-title">It is for : ${filterEndocrine[i].activeOn}</h6>
            <a href="${filterEndocrine[i].linkImg}" 
               style="box-shadow: 1px 1px 3px #888888"
               target="_blank" 
               class="btn btn-primary">Pexels image source</a>
        </div>
    </div>
    `;
  }

pills_containerEndocrine.innerHTML=pillsContentEndocrine;
  //---
});

//-------------------------------------------------------------------------------------------------------------------------------------------------
//show skin

const pills_containerSkin=document.getElementById("pills_containerSkin");

const skinProblemsBtn=document.getElementById("skinProblemsBtn");
skinProblemsBtn.addEventListener("click" , function(event){
  event.preventDefault();
  console.log("skin btn clicked");
  //----
  const filterSkin=pillsEndocrine.filter(filterCBfunc)

  function filterCBfunc(pillItem , index){
    return pillItem.activeOn === "skin problems";
  }

  console.log("filterSkin is : " , filterSkin);
  //----
  for(let i=0 ; i<filterSkin.length ; i++){
    pillsContentSkin +=`
    <div class="card" style="width: 18rem">
        <img src="${filterSkin[i].imgPill}" class="card-img-top" alt="pill_item_img">
        <div class="card-body">
            <h5 class="card-title" style="color:${filterSkin[i].color}">${filterSkin[i].title}</h>
            <h5 class="card-title">Price: ${filterSkin[i].price}</h5>
            <h5 class="card-title">Active ingredient: ${filterSkin[i].activeSubstance}</h5>
            <h6 class="card-title">It is for : ${filterSkin[i].activeOn}</h6>
            <a href="${filterSkin[i].linkImg}" 
               style="box-shadow: 1px 1px 3px #888888"
               target="_blank" 
               class="btn btn-primary">Pexels image source</a>
        </div>
    </div>
    `;
  }
  //----
  pills_containerSkin.innerHTML=pillsContentSkin;
  //----
});

//---------------------------------------------------------------------------------------------------------------------------------------------------------

//show infection

const pills_containerInfection=document.getElementById("pills_containerInfection");

const infectionProblemsBtn=document.getElementById("infectionProblemsBtn");
infectionProblemsBtn.addEventListener("click" , function(event){
  event.preventDefault();
  console.log("infection btn clicked");
  //----
  const filterInfection=pillsInfection.filter(filterCBfunc)

  function filterCBfunc(pillItem , index){
    return pillItem.activeOn === "infection problems";
  }
  console.log("filterInfection is : " , filterInfection);
  //----
  for(let i=0 ; i<filterInfection.length ; i++){
    pillsContentInfection +=`
    <div class="card" style="width: 18rem">
        <img src="${filterInfection[i].imgPill}" class="card-img-top" alt="pill_item_img">
        <div class="card-body">
            <h5 class="card-title" style="color:${filterInfection[i].color}">${filterInfection[i].title}</h>
            <h5 class="card-title">Price: ${filterInfection[i].price}</h5>
            <h5 class="card-title">Active ingredient: ${filterInfection[i].activeSubstance}</h5>
            <h6 class="card-title">It is for : ${filterInfection[i].activeOn}</h6>
            <a href="${filterInfection[i].linkImg}"  
               style="box-shadow: 1px 1px 3px #888888"
               target="_blank" 
               class="btn btn-primary">Pexels image source</a>
        </div>
    </div>
    `;
  }
  //----
  pills_containerInfection.innerHTML=pillsContentInfection;
  //----
});


//---------------------------------------------------------------------------------------------------------------------------------------------------------

//yes in stock

const yesStockBtn=document.getElementById("yesStockBtn");

const inStockDivContent=document.querySelector(".inStockDivContent");

yesStockBtn.addEventListener("click" , function(event){
  event.preventDefault();
  console.log("yes stock btn");

  //---
  const filterStockArr=pillsInStock.filter(filterYesStockCB);

  function filterYesStockCB(pillItem , index){
   return pillItem.inventory === "yes";
  }

  console.log("filterStockArr is : " , filterStockArr);
  //---
  for(let i=0 ; i<filterStockArr.length ; i++){
    pillsInStockContent +=`
    <div class="card" style="width: 18rem">
        <img src="${filterStockArr[i].imgPill}" class="card-img-top" alt="pill_item_img">
        <div class="card-body">
            <h5 class="card-title" style="color:${filterStockArr[i].color}">${filterStockArr[i].title}</h>
            <h5 class="card-title">Price: ${filterStockArr[i].price}</h5>
            <h5 class="card-title">Active ingredient: ${filterStockArr[i].activeSubstance}</h5>
            <h6 class="card-title">It is for : ${filterStockArr[i].activeOn}</h6>
            <a href="${filterStockArr[i].linkImg}"  
               style="box-shadow: 1px 1px 3px #888888"
               target="_blank" 
               class="btn btn-primary">Pexels image source</a>
        </div>
    </div>
    `;
  }
  //---
  inStockDivContent.innerHTML=pillsInStockContent;
  //---
});

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//no stock

const noStockBtn=document.getElementById("noStockBtn");

const noStockDivContent=document.querySelector(".noStockDivContent");

noStockBtn.addEventListener("click" , function(event){
  event.preventDefault();
  console.log("no stock btn");

  //---
  const filterNoStockArr=pillsNoStock.filter(filterNoStockCB);

  function filterNoStockCB(pillItem , index){
    return pillItem.inventory === "no";
  }

  console.log("filterNoStockArr is : " , filterNoStockArr);
  //---
  for(let i=0 ; i<filterNoStockArr.length ; i++){
    pillsNoStockContent +=`
    <div class="card" style="width: 18rem">
        <img src="${filterNoStockArr[i].imgPill}" class="card-img-top" alt="pill_item_img">
        <div class="card-body">
            <h5 class="card-title" style="color:${filterNoStockArr[i].color}">${filterNoStockArr[i].title}</h>
            <h5 class="card-title">Price: ${filterNoStockArr[i].price}</h5>
            <h5 class="card-title">Active ingredient: ${filterNoStockArr[i].activeSubstance}</h5>
            <h6 class="card-title">It is for : ${filterNoStockArr[i].activeOn}</h6>
            <a href="${filterNoStockArr[i].linkImg}"  
               style="box-shadow: 1px 1px 3px #888888"
               target="_blank" 
               class="btn btn-primary">Pexels image source</a>
        </div>
    </div>
    `;
  }
  //---
  noStockDivContent.innerHTML=pillsNoStockContent;
  //----
});









