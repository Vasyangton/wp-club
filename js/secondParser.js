var title = document.querySelectorAll('.title'),
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
    block = document.querySelectorAll('.history__item'),
    secondImg = document.querySelectorAll('.history__img'),
    review = document.querySelectorAll('.review-parse');

var secondXhr = new XMLHttpRequest();
var secondUrl = 'js/secondParse.json';
secondXhr.open("GET", secondUrl, false);

secondXhr.send();

if (secondXhr.status == 200) {
    var db = JSON.parse(secondXhr.responseText);

    secondImg[0].innerHTML = db.prazdniki.fevral.img_1;
    secondImg[1].innerHTML = db.prazdniki.valentin.img_2;
    secondImg[2].innerHTML = db.prazdniki.ispania.img_1;
    secondImg[3].innerHTML = db.jivopis.graphic.img_1;
    secondImg[4].innerHTML = db.jivopis.clod.img_2;
    secondImg[5].innerHTML = db.jivopis.caravadjo.img_1;
    secondImg[9].innerHTML = db.kino.reziser.img_1;
    secondImg[12].innerHTML = db.acter.pushkin.img_1;
    secondImg[13].innerHTML = db.acter.shekspir.img_1;
    secondImg[15].innerHTML = db.moda.provintage.img_1;
    secondImg[16].innerHTML = db.moda.classic.img_1;
    secondImg[18].innerHTML = db.tasting.ustizi.img_1;
    secondImg[19].innerHTML = db.tasting.vino.img_1;
} else {
    console.log('g');
}