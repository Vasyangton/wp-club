var title = document.querySelectorAll('.title-parse'),
    speaker = document.querySelectorAll('.speaker'),
    dataParse = document.querySelectorAll('.data'),
    time = document.querySelectorAll('.time'),
    place = document.querySelectorAll('.place'),
    btn = document.querySelectorAll('.parser-btn'),
    group = document.querySelector('.group'),
    zagolovok = document.querySelectorAll('.parse-title'),
    img = document.querySelectorAll('.announcement__img'),
    secondTitle = document.querySelectorAll('.secondTitle-parse'),
    desc = document.querySelectorAll('.descr-parse'),
    secondBtn = document.querySelectorAll('.secondBtn-parse'),
    prazdniki = document.querySelectorAll('.prazdniki'),
    secondImg = document.querySelectorAll('.history__img'),
    review = document.querySelectorAll('.review-parse');


var xhr = new XMLHttpRequest();
var url = 'parse.json';
xhr.open("GET", url, false);

xhr.send();


if (xhr.status == 200) {
    var data = JSON.parse(xhr.responseText);

    // Здесь будет имена 
    title[0].innerHTML = data.Elena.name;
    // title[1].innerHTML = data.Vino.name;
    title[1].innerHTML = data.Karen.name;
    title[2].innerHTML = data.Club.name;

    // Здесь будет спикеры 

    speaker[0].innerHTML = data.Elena.speaker;
    // speaker[1].innerHTML = data.Vino.speaker;
    speaker[1].innerHTML = data.Karen.speaker;
    speaker[2].innerHTML = data.Club.speaker;

    // Здесь будет дата

    dataParse[0].innerHTML = data.Elena.data;
    // dataParse[1].innerHTML = data.Vino.data;
    dataParse[1].innerHTML = data.Karen.data;
    dataParse[2].innerHTML = data.Club.data;

    // Здесь будет время

    time[0].innerHTML = data.Elena.time;
    // time[1].innerHTML = data.Vino.time;
    time[1].innerHTML = data.Karen.time;
    time[2].innerHTML = data.Club.time;

    // Здесь будет место 

    place[0].innerHTML = data.Elena.place;
    // place[1].innerHTML = data.Vino.place;
    place[1].innerHTML = data.Karen.place;
    place[2].innerHTML = data.Club.place;

    // Здесь будут картинки

    img[0].innerHTML = data.Elena.img;
    // img[1].innerHTML = data.Vino.img;
    img[1].innerHTML = data.Karen.img;
    img[2].innerHTML = data.Club.img;

    // Картинки, но другие

    function pervoe() {
        sessionStorage.setItem("znachenieShablona", 100);
    }

    function vtoroe() {
        sessionStorage.setItem("znachenieShablona", 200);
    }

    function trete() {
        sessionStorage.setItem("znachenieShablona", 300);
    }

    btn[0].addEventListener('click', pervoe);
    btn[1].addEventListener('click', vtoroe);
    // btn[2].addEventListener('click', trete);

} else {
    console.log(error);
}


var threeXhr = new XMLHttpRequest();
var threeUrl = 'review.json';
threeXhr.open("GET", threeUrl, false);

threeXhr.send();

if (threeXhr.status == 200) {
    var secondDb = JSON.parse(threeXhr.responseText);

    review[0].innerHTML = secondDb.img_1;
    review[1].innerHTML = secondDb.img_2;
    review[2].innerHTML = secondDb.img_3;
    review[3].innerHTML = secondDb.img_4;
    review[4].innerHTML = secondDb.img_5;
    review[5].innerHTML = secondDb.img_6;
    review[6].innerHTML = secondDb.img_7;
    review[7].innerHTML = secondDb.img_8;
    // review[8].innerHTML = secondDb.img_9;
    
} else {
    console.log('pizdec');
}

