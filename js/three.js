var title = document.querySelectorAll('.title'),
    speaker = document.querySelectorAll('.speaker'),
    dataParse = document.querySelectorAll('.data'),
    time = document.querySelectorAll('.time'),
    place = document.querySelectorAll('.place'),
    btn = document.querySelectorAll('.parser-btn'),
    group = document.querySelector('.group'),
    zagolovok = document.querySelectorAll('.parse-title'),
    img = document.querySelectorAll('.history__img'),
    secondTitle = document.querySelectorAll('.secondTitle-parse'),
    desc = document.querySelectorAll('.descr-parse'),
    secondBtn = document.querySelectorAll('.secondBtn-parse'),
    block = document.querySelectorAll('.history__item'),
    review = document.querySelectorAll('.review-parse');


var serverSecond = new XMLHttpRequest();
var url = 'js/secondParse.json';
serverSecond.open("GET", url, false);

serverSecond.send();
var xml = new XMLHttpRequest();
var secondUrl = 'js/parse.json';
xml.open("GET", secondUrl, false);

xml.send();


if (serverSecond.status == 200) {
    var db = JSON.parse(serverSecond.responseText);
    var secondDb = JSON.parse(xml.responseText);

    // secondTitle[0].innerHTML = db.prazdniki.fevral.name;
    // secondTitle[1].innerHTML = db.prazdniki.valentin.name;
    // secondTitle[2].innerHTML = db.prazdniki.ispania.name;
    // secondTitle[3].innerHTML = db.jivopis.graphic.name;
    // secondTitle[4].innerHTML = db.jivopis.clod.name;
    // secondTitle[5].innerHTML = db.jivopis.caravadjo.name;
    // secondTitle[9].innerHTML = db.kino.reziser.name;
    // secondTitle[12].innerHTML = db.acter.pushkin.name;
    // secondTitle[13].innerHTML = db.acter.shekspir.name;
    // secondTitle[15].innerHTML = db.moda.provintage.name;
    // secondTitle[16].innerHTML = db.moda.classic.name;
    // secondTitle[18].innerHTML = db.tasting.ustizi.name;
    // secondTitle[19].innerHTML = db.tasting.vino.name;
    // secondTitle[20].innerHTML = secondDb.Vino.name;

    // Здесь будут фотографии 

// img[0].innerHTML = db.prazdniki.fevral.img_1;
//     img[1].innerHTML = db.prazdniki.valentin.img_1;
//     img[2].innerHTML = db.prazdniki.ispania.img_1;
//     img[3].innerHTML = db.jivopis.graphic.img_1;
//     img[4].innerHTML = db.jivopis.clod.img_1;
//     img[5].innerHTML = db.jivopis.caravadjo.img_1;
//     img[18].innerHTML = db.kino.reziser.img_1;
//     img[24].innerHTML = db.acter.pushkin.img_1;
//     img[25].innerHTML = db.acter.shekspir.img_1;
//     img[30].innerHTML = db.moda.provintage.img_1;
//     img[31].innerHTML = db.moda.classic.img_1;
//     img[36].innerHTML = db.tasting.ustizi.img_1;
//     img[37].innerHTML = db.tasting.vino.img_1;
//     img[38].innerHTML = secondDb.Vino.img;

    // img[0].innerHTML = db.prazdniki.fevral.img_1;
    // img[1].innerHTML = db.prazdniki.valentin.img_1;
    // img[2].innerHTML = db.prazdniki.ispania.img_1;
    // img[6].innerHTML = db.jivopis.graphic.img_1;
    // img[7].innerHTML = db.jivopis.clod.img_1;
    // img[8].innerHTML = db.jivopis.caravadjo.img_1;
    // img[18].innerHTML = db.kino.reziser.img_1;
    // img[24].innerHTML = db.acter.pushkin.img_1;
    // img[25].innerHTML = db.acter.shekspir.img_1;
    // img[30].innerHTML = db.moda.provintage.img_1;
    // img[31].innerHTML = db.moda.classic.img_1;
    // img[36].innerHTML = db.tasting.ustizi.img_1;
    // img[37].innerHTML = db.tasting.vino.img_1;
    // img[38].innerHTML = secondDb.Vino.img;

    // Здесь будет описание

    // desc[0].innerHTML = db.prazdniki.fevral.description;
    // desc[1].innerHTML = db.prazdniki.valentin.description;
    // desc[2].innerHTML = db.prazdniki.ispania.description;
    // desc[3].innerHTML = db.jivopis.graphic.description;
    // desc[4].innerHTML = db.jivopis.clod.description;
    // desc[5].innerHTML = db.jivopis.caravadjo.description;
    // desc[9].innerHTML = db.kino.reziser.description;
    // desc[12].innerHTML = db.acter.pushkin.description;
    // desc[13].innerHTML = db.acter.shekspir.description;
    // desc[15].innerHTML = db.moda.provintage.description;
    // desc[16].innerHTML = db.moda.classic.description;
    // desc[18].innerHTML = db.tasting.ustizi.description;
    // desc[19].innerHTML = db.tasting.vino.description;

    // secondTitle.forEach((elem) => {
    //     if (elem.textContent == '') {
    //         elem.parentElement.parentElement.parentElement.style.display = 'none'
    //     }
    // });

    function one() {
        sessionStorage.setItem("meropriatia", 1)
    }

    function two() {
        sessionStorage.setItem("meropriatia", 2)
    }

    function three() {
        sessionStorage.setItem("meropriatia", 3)
    }

    function four() {
        sessionStorage.setItem("meropriatia", 4)
    }

    function five() {
        sessionStorage.setItem("meropriatia", 5)
    }

    function six() {
        sessionStorage.setItem("meropriatia", 6)
    }

    function seven() {
        sessionStorage.setItem("meropriatia", 7)
    }

    function eight() {
        sessionStorage.setItem("meropriatia", 8)
    }

    function nine() {
        sessionStorage.setItem("meropriatia", 9)
    }

    function ten() {
        sessionStorage.setItem("meropriatia", 10)
    }

    function eleven() {
        sessionStorage.setItem("meropriatia", 11)
    }

    function twelve() {
        sessionStorage.setItem("meropriatia", 12)
    }

    function thirteen() {
        sessionStorage.setItem("meropriatia", 13)
    }

    function fourteen() {
        sessionStorage.setItem("meropriatia", 14)
    }

    function fiveteen() {
        sessionStorage.setItem("meropriatia", 15)
    }

    function sixteen() {
        sessionStorage.setItem("meropriatia", 16)
    }

    function seventeen() {
        sessionStorage.setItem("meropriatia", 17)
    }

    function eighteen() {
        sessionStorage.setItem("meropriatia", 18)
    }

    function nineteen() {
        sessionStorage.setItem("meropriatia", 19)
    }

    function twenty() {
        sessionStorage.setItem("meropriatia", 20)
    }

    function twentyOne() {
        sessionStorage.setItem("meropriatia", 21)
    }

    secondBtn[0].addEventListener('click', one);
    secondBtn[1].addEventListener('click', two);
    secondBtn[2].addEventListener('click', three);
    secondBtn[3].addEventListener('click', four);
    secondBtn[4].addEventListener('click', five);
    secondBtn[5].addEventListener('click', six);
    secondBtn[6].addEventListener('click', seven);
    secondBtn[7].addEventListener('click', eight);
    secondBtn[8].addEventListener('click', nine);
    secondBtn[9].addEventListener('click', ten);
    secondBtn[18].addEventListener('click', eleven);
    secondBtn[24].addEventListener('click', twelve);
    secondBtn[25].addEventListener('click', thirteen);
    secondBtn[30].addEventListener('click', fourteen);
    secondBtn[31].addEventListener('click', fiveteen);
    secondBtn[36].addEventListener('click', sixteen);
    secondBtn[37].addEventListener('click', seventeen);
    secondBtn[38].addEventListener('click', eighteen);
    secondBtn[518].addEventListener('click', nineteen);
    secondBtn[196].addEventListener('click', twenty);
    secondBtn[260].addEventListener('click', twentyOne);
}