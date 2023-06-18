console.log("hello from index.js for index.html page for all offers");

const offerts=[
    {
        "index":1,
        "title":"EnSURE Touch",
        "category":"curatenie",
        "code":"112233",
        "um":"bucata",
        "nrum":"0",
        "imgOffer":"./images/EnSURE-Touch-epidemiologie.png",
        "inventory":"no",
        "color":"#FFC107",
        "price_unitar":100,
        "descriere":"Monitorizare, de ultima generatie, microbiologica si a igienei",
        "detalii":"Cel mai sensibil si stabil sistem datorita tehnologiei avansate de fotodioda. Capacitate de partajare a ecranului care permite asistenta de la distanta in timp ce unitatea este in mana dumneavoastra. Ecranul sensibil, de 5 inchi, functioneaza chiar si atunci cand purtati manusi. Functioneaza ca un smartphone si poate fi configurat in functie de nevoile clientilor. Un senzor integrat asigura citirea corecta a testului de fiecare data. Conectivitate Wi-Fi sau USB la software-ul din cloud sau de pe desktop.",
        "producator":"Hygiena",
        "expira":""
      },
      {
        "index":2,
        "title":"UltraSnap",
        "category":"curatenie",
        "code":"456",
        "um":"cutie",
        "nrum":"5",
        "imgOffer":"./images/UltraSnap-epidemiologie.png",
        "inventory":"yes",
        "color":"#198754",
        "price_unitar":450,
        "descriere":"Dispozitiv pentru masurarea nivelului de contaminare a suprafetelor ; o cutie contine 100 teste",
        "detalii":"UltraSnap este un test ATP pentru verificarea igienei suprafetelor, usor de utilizat, conceput pentru a fi utilizat cu toate luminometrele de la Hygiena. Ultrasnap este un dispozitiv all-in-one si contine un tampon pre-umezit pentru o recuperare optima a probelor. Reproductibilitate si durabilitate superbe. Activarea este usoara datorita tehnologiei Snap-Valve patentata de Hygiena ",
        "producator":"Hygiena",
        "expira":"01.2027"
      },
      {
        "index":3,
        "title":"EndoSwab",
        "category":"curatenie",
        "code":"789",
        "um":"cutie",
        "nrum":"3",
        "imgOffer":"./images/EndoSwab-epidemiologie.png",
        "inventory":"yes",
        "color":"#198754",
        "price_unitar":700,
        "descriere":"Monitorizarea calitatii curatarii endoscopului in 10 secunde ; o cutie contine 100 teste",
        "detalii":"Endoscoapele sunt expuse la niveluri ridicate de contaminare microbiana, ceea ce creeaza risc de contaminare incrucisata si de transmitere a infectiilor de la pacient la pacient. Sunt necesare mai multe etape de curatare si dezinfectare pentru a reduce contaminarea locurilor greu accesibile si zonelor curbate de pe endoscoape. O buna dezinfectare si sterilizare depind de o curatare eficienta!",
        "producator":"Hygiena",
        "expira":"01.2027"
      },
      {
        "index":4,
        "title":"AquaSnap",
        "category":"curatenie",
        "code":"101112",
        "um":"cutie",
        "nrum":"0",
        "imgOffer":"./images/AquaSnap-epidemiologie.png",
        "inventory":"no",
        "color":"#FFC107",
        "price_unitar":670,
        "descriere":"Dispozitiv pentru masurarea nivelului de contaminare a probelor de apa ; o cutie contine 100 teste",
        "detalii":"Aquasnap este un test ATP pentru verificarea igienei probelor de apa, usor de utilizat, compatibil cu toate luminometrele de la Hygiena. Dispozitivul are un varf special conceput care colecteaza 100 μl de apa, care garanteaza cantitatea corecta a probei pentru fiecare analiza.",
        "producator":"Hygiena",
        "expira":"01.2027"
      },
      {
        "index":5,
        "title":"Saboti Calzuro Classic cu perforatii - Grena",
        "category":"saboti",
        "code":"1234",
        "um":"pereche",
        "nrum":"2",
        "imgOffer":"./images/calzuro-grena.png",
        "inventory":"yes",
        "color":"#198754",
        "price_unitar":180,
        "descriere":"proprietăți antistatice; absorbția energiei în zona călcâiului; cerințe de bază; rezistență la alunecare; dispozitiv medical nesteril; autoclavabili până la 134 °C; lavabil în mașina de spălat până la 90 °C",
        "detalii":"Calzuro au un design atractiv care amintește de forma sabotilor de lemn, dar datorită unui branț anatomic foarte special, pe care se înalță mici formatiuni (numite, destinate să stimuleze talpa piciorului - împing în sus sângele care se acumulează în această zonă. Acesta este un excelent ajutor pentru circulatia sangelui pentru oricine lucreaza in picioare timp de mai multe ore. Aceste formatiuni au fost studiate in profunzime, cu scopul de a atinge un nivel eficient de stimulare a actiunii de pompa venoasa a picioarelor (a doua cea mai mare pompa de sânge foarte importantă după inimă) Sabotii Calzuro au o formă internă care se adaptează fiziologic si respecta in totalitate anatomia piciorului, păstrând arcul interior și cuprinzand perfect piciorul fără alunecare. De fapt, Calzuro nu aluneca cu ușurință nici chiar in cazul alergarii. În plus, înălțimea tocului în raport cu podeaua a fost concepută special pentru a menține o poziție perfectă pentru perioade lungi de timp, prevenind astfel oboseala spatelui.",
        "producator":"BIHOS",
        "expira":"03.2030"
      },
      {
        "index":6,
        "title":"Saboti Calzuro Classic cu perforatii - Bleu",
        "category":"saboti",
        "code":"1235",
        "um":"pereche",
        "nrum":"0",
        "imgOffer":"./images/calzuro-bleu.png",
        "inventory":"no",
        "color":"#FFC107",
        "price_unitar":180,
        "descriere":"proprietăți antistatice; absorbția energiei în zona călcâiului; cerințe de bază; rezistență la alunecare; dispozitiv medical nesteril; autoclavabili până la 134 °C; lavabil în mașina de spălat până la 90 °C",
        "detalii":"Calzuro au un design atractiv care amintește de forma sabotilor de lemn, dar datorită unui branț anatomic foarte special, pe care se înalță mici formatiuni (numite, destinate să stimuleze talpa piciorului - împing în sus sângele care se acumulează în această zonă. Acesta este un excelent ajutor pentru circulatia sangelui pentru oricine lucreaza in picioare timp de mai multe ore. Aceste formatiuni au fost studiate in profunzime, cu scopul de a atinge un nivel eficient de stimulare a actiunii de pompa venoasa a picioarelor (a doua cea mai mare pompa de sânge foarte importantă după inimă) Sabotii Calzuro au o formă internă care se adaptează fiziologic si respecta in totalitate anatomia piciorului, păstrând arcul interior și cuprinzand perfect piciorul fără alunecare. De fapt, Calzuro nu aluneca cu ușurință nici chiar in cazul alergarii. În plus, înălțimea tocului în raport cu podeaua a fost concepută special pentru a menține o poziție perfectă pentru perioade lungi de timp, prevenind astfel oboseala spatelui.",
        "producator":"BIHOS",
        "expira":"03.2030"
      },
      {
        "index":7,
        "title":"Set camp steril-cezariana",
        "category":"consumabile",
        "code":"345",
        "um":"bucata",
        "nrum":"0",
        "imgOffer":"./images/birth.jpg",
        "inventory":"no",
        "color":"#FFC107",
        "price_unitar":85,
        "descriere":"Camp steril pentru cezariana",
        "detalii":"Setul contine: Camp steril cu punga colectoare pentru cezariana 200x300 cm 1 buc; Camp pentru masa instrumentar 150x200 cm 1 buc; Camp steril nou-nascut 75x75 cm 1 buc; Clema ombilicala - 1 buc; Prosop pentru maini 40x40 cm 2 buc",
        "producator":"DISPOSED",
        "expira":"06.2025"
      },
      {
        "index":8,
        "title":"Set camp chirurgical pentru diferite specialitati",
        "category":"consumabile",
        "code":"567",
        "um":"bucata",
        "nrum":"150",
        "imgOffer":"./images/chirurgie-generala.png",
        "inventory":"yes",
        "color":"#198754",
        "price_unitar":85,
        "descriere":"Set camp chirurgie generala – 2 straturi",
        "detalii":"Setul contine: Camp anestezie 150×240 cm – 1 buc.; Camp steril pentru picioare 150×180 cm – 1 buc.; Camp steril cu banda adeziva 75×90 cm – 2 buc.; Camp pentru masa instrumentar 150×200 cm –1 buc.; Camp pentru masa Mayo 78×145 cm – 1 buc.; Banda adeziva 10×50 cm – 1 buc.; Prosop pentru maini 40×40 cm – 2 buc.",
        "producator":"DISPOSED",
        "expira":"06.2025"
      },
     
];

console.log("offerts length" , offerts.length);

//--------------------------------------------------------------------------------------------------------------------------------------------------------------

const offertsToShowAll=[...offerts];
console.log("offertsToShowAll.length is : " , offertsToShowAll.length);

//---
let offertsContent=``;


const showAllOffertsBtn=document.getElementById("showAllOffertsBtn");

console.log("showAllOffertsBtn" , showAllOffertsBtn);

showAllOffertsBtn.addEventListener("click" , function(event){

    event.preventDefault();
    console.log("you clicked the show all offerts btn");

    ///-----

    offertsToShowAll.forEach(showAllCallBackFunc);

    //-----
    function showAllCallBackFunc(offerItem){
        offertsContent +=`
        <div class="card" style="width: 35%">
            <img src="${offerItem.imgOffer}" class="card-img-top" alt="pill_item_img">
            <div class="card-body">
                <h5 class="card-title" style="color:${offerItem.color}">${offerItem.title}</h5>
                <h5 class="card-title">Pret: ${offerItem.price_unitar} RON</h5>
                <h5 class="card-title">Categorie: ${offerItem.category}</h5>
                <h5 class="card-title">Code: ${offerItem.code}</h5>
                <h5 class="card-title">Unitate de masura: ${offerItem.um}</h5>
                <h5 class="card-title">Numar: ${offerItem.nrum}</h5>
                <h5 class="card-title">Inventar: ${offerItem.inventory}</h5>
                <p class="card-title">Descriere: ${offerItem.descriere}</p>
                <p class="card-title">Detalii: ${offerItem.detalii}</p>
                <h5 class="card-title">Producator: ${offerItem.producator}</h5>
                <h5 class="card-title">Expira: ${offerItem.expira}</h5>
              
            </div>
        </div>
        `;
    }
    //---
    offerts_container.innerHTML=offertsContent;
    ///------

});





















