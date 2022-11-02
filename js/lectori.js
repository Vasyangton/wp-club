var img = document.querySelectorAll('.person__img'),
    nameParse = document.querySelectorAll('.name-parse'),
    desc = document.querySelectorAll('.description');

var xml = new XMLHttpRequest();
var url = '../js/lectori.json';
xml.open("GET", url, false);

xml.send();

if (xml.status == 200) {
    var db = JSON.parse(xml.responseText);

    // Здесь фотки

    img[0].innerHTML = db.Anna.img;
    img[1].innerHTML = db.Egor.img;
    img[2].innerHTML = db.Elena.img;
    // img[3].innerHTML = db.Karen.img;
    // img[4].innerHTML = db.Katya.img;
    // img[5].innerHTML = db.Maria.img;
    img[3].innerHTML = db.Olga.img;
    img[4].innerHTML = db.Regina.img;
    img[5].innerHTML = db.Sergey.img;
    img[6].innerHTML = db.Varvara.img;

    // Здесь будут имена

    nameParse[0].innerHTML = db.Anna.name;
    nameParse[1].innerHTML = db.Egor.name;
    nameParse[2].innerHTML = db.Elena.name;
    // nameParse[3].innerHTML = db.Karen.name;
    // nameParse[4].innerHTML = db.Katya.name;
    // nameParse[5].innerHTML = db.Maria.name;
    nameParse[3].innerHTML = db.Olga.name;
    nameParse[4].innerHTML = db.Regina.name;
    nameParse[5].innerHTML = db.Sergey.name;
    nameParse[6].innerHTML = db.Varvara.name;

    // Здесь будет описание 

    desc[0].innerHTML = db.Anna.description;
    desc[1].innerHTML = db.Egor.description;
    desc[2].innerHTML = db.Elena.description;
    // desc[3].innerHTML = db.Karen.description;
    // desc[4].innerHTML = db.Katya.description;
    // desc[5].innerHTML = db.Maria.description;
    desc[3].innerHTML = db.Olga.description;
    desc[4].innerHTML = db.Regina.description;
    desc[5].innerHTML = db.Sergey.description;
    desc[6].innerHTML = db.Varvara.description;
}