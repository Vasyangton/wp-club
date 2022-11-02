var slide = document.querySelectorAll('.gallery__item'),
    title = document.querySelector('.title-parse'),
    desc = document.querySelector('.parse-desc');

var server = new XMLHttpRequest();
var url = "../js/secondParse.json";
server.open("GET", url, false);

server.send();

if (server.status == 200) {
    var bd = JSON.parse(server.responseText);
    var meaning = sessionStorage.getItem("meropriatia");

    switch (meaning) {
        case "1":
            desc.innerHTML = bd.prazdniki.fevral.description;
            title.innerHTML = bd.prazdniki.fevral.name;
            // slide[0].innerHTML = bd.prazdniki.fevral.img_1;
            // slide[1].innerHTML = bd.prazdniki.fevral.img_2;
            // slide[2].innerHTML = bd.prazdniki.fevral.img_3;
            // slide[3].innerHTML = bd.prazdniki.fevral.img_4;
            slide[0].style.backgroundImage = "url('../img/prazdniki/fevral/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/prazdniki/fevral/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/prazdniki/fevral/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/prazdniki/fevral/4.jpg')";
            break;
        case "2":
            desc.innerHTML = bd.prazdniki.valentin.description;
            title.innerHTML = bd.prazdniki.valentin.name;
            // slide[0].innerHTML = bd.prazdniki.valentin.img_1;
            // slide[1].innerHTML = bd.prazdniki.valentin.img_2;
            // slide[2].innerHTML = bd.prazdniki.valentin.img_3;
            // slide[3].innerHTML = bd.prazdniki.valentin.img_4;
            slide[0].style.backgroundImage = "url('../img/prazdniki/valentin/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/prazdniki/valentin/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/prazdniki/valentin/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/prazdniki/valentin/4.jpg')";
            break;
        case "3":
            desc.innerHTML = bd.prazdniki.ispania.description;
            title.innerHTML = bd.prazdniki.ispania.name;
            // slide[0].innerHTML = bd.prazdniki.ispania.img_1;
            // slide[1].innerHTML = bd.prazdniki.ispania.img_2;
            // slide[2].innerHTML = bd.prazdniki.ispania.img_3;
            // slide[3].innerHTML = bd.prazdniki.ispania.img_4;
            slide[0].style.backgroundImage = "url('../img/prazdniki/ispania/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/prazdniki/ispania/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/prazdniki/ispania/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/prazdniki/ispania/4.jpg')";
            break;
        case "7":
            desc.innerHTML = bd.jivopis.graphic.description;
            title.innerHTML = bd.jivopis.graphic.name;
            // slide[0].innerHTML = bd.jivopis.graphic.img_1;
            // slide[1].innerHTML = bd.jivopis.graphic.img_2;
            // slide[2].innerHTML = bd.jivopis.graphic.img_3;
            // slide[3].innerHTML = bd.jivopis.graphic.img_4;
            slide[0].style.backgroundImage = "url('../img/jivopis/jivopis/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/jivopis/jivopis/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/jivopis/jivopis/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/jivopis/jivopis/4.jpg')";
            break;
        case "8":
            desc.innerHTML = bd.jivopis.clod.description;
            title.innerHTML = bd.jivopis.clod.name;
            // slide[0].innerHTML = bd.jivopis.clod.img_1;
            // slide[1].innerHTML = bd.jivopis.clod.img_2;
            // slide[2].innerHTML = bd.jivopis.clod.img_3;
            // slide[3].innerHTML = bd.jivopis.clod.img_4;
            slide[0].style.backgroundImage = "url('../img/jivopis/clod/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/jivopis/clod/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/jivopis/clod/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/jivopis/clod/4.jpg')";
            break;
        case "9":
            desc.innerHTML = bd.jivopis.caravadjo.description;
            title.innerHTML = bd.jivopis.caravadjo.name;
            // slide[0].innerHTML = bd.jivopis.caravadjo.img_1;
            // slide[1].innerHTML = bd.jivopis.caravadjo.img_2;
            // slide[2].innerHTML = bd.jivopis.caravadjo.img_3;
            // slide[3].innerHTML = bd.jivopis.caravadjo.img_4;
            slide[0].style.backgroundImage = "url('../img/jivopis/caravadjo/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/jivopis/caravadjo/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/jivopis/caravadjo/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/jivopis/caravadjo/4.jpg')";
            break;
        case "11":
            desc.innerHTML = bd.kino.reziser.description;
            title.innerHTML = bd.kino.reziser.name;
            // slide[0].innerHTML = bd.kino.reziser.img_1;
            // slide[1].innerHTML = bd.kino.reziser.img_2;
            // slide[2].innerHTML = bd.kino.reziser.img_3;
            // slide[3].innerHTML = bd.kino.reziser.img_4;
            slide[0].style.backgroundImage = "url('../img/kino/reziser/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/kino/reziser/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/kino/reziser/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/kino/reziser/4.jpg')";
            break;
        case "12":
            desc.innerHTML = bd.acter.pushkin.description;
            title.innerHTML = bd.acter.pushkin.name;
            // slide[0].innerHTML = bd.acter.pushkin.img_1;
            // slide[1].innerHTML = bd.acter.pushkin.img_2;
            // slide[2].innerHTML = bd.acter.pushkin.img_3;
            // slide[3].innerHTML = bd.acter.pushkin.img_4;
            slide[0].style.backgroundImage = "url('../img/acter/pushkin/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/acter/pushkin/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/acter/pushkin/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/acter/pushkin/4.jpg')";
            break;
        case "13":
            desc.innerHTML = bd.acter.shekspir.description;
            title.innerHTML = bd.acter.shekspir.name;
            // slide[0].innerHTML = bd.acter.shekspir.img_1;
            // slide[1].innerHTML = bd.acter.shekspir.img_2;
            // slide[2].innerHTML = bd.acter.shekspir.img_3;
            // slide[3].innerHTML = bd.acter.shekspir.img_4;
            slide[0].style.backgroundImage = "url('../img/acter/shekspir/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/acter/shekspir/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/acter/shekspir/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/acter/shekspir/4.jpg')";
            break;
        case "14":
            desc.innerHTML = bd.moda.provintage.description;
            title.innerHTML = bd.moda.provintage.name;
            // slide[0].innerHTML = bd.moda.provintage.img_1;
            // slide[1].innerHTML = bd.moda.provintage.img_2;
            // slide[2].innerHTML = bd.moda.provintage.img_3;
            // slide[3].innerHTML = bd.moda.provintage.img_4;
            slide[0].style.backgroundImage = "url('../img/moda/provintage/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/moda/provintage/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/moda/provintage/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/moda/provintage/4.jpg')";
            break;
        case "15":
            desc.innerHTML = bd.moda.classic.description;
            title.innerHTML = bd.moda.classic.name;
            // slide[0].innerHTML = bd.moda.classic.img_1;
            // slide[1].innerHTML = bd.moda.classic.img_2;
            // slide[2].innerHTML = bd.moda.classic.img_3;
            // slide[3].innerHTML = bd.moda.classic.img_4;
            slide[0].style.backgroundImage = "url('../img/moda/classic/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/moda/classic/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/moda/classic/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/moda/classic/4.jpg')";
            break;
        case "16":
            desc.innerHTML = bd.tasting.ustizi.description;
            title.innerHTML = bd.tasting.ustizi.name;
            // slide[0].innerHTML = bd.tasting.ustizi.img_1;
            // slide[1].innerHTML = bd.tasting.ustizi.img_2;
            // slide[2].innerHTML = bd.tasting.ustizi.img_3;
            // slide[3].innerHTML = bd.tasting.ustizi.img_4;
            slide[0].style.backgroundImage = "url('../img/tasting/ustrizi/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/tasting/ustrizi/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/tasting/ustrizi/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/tasting/ustrizi/4.jpg')";
            break;
        case "17":
            desc.innerHTML = bd.tasting.vino.description;
            title.innerHTML = bd.tasting.vino.name;
            // slide[0].innerHTML = bd.tasting.vino.img_1;
            // slide[1].innerHTML = bd.tasting.vino.img_2;
            // slide[2].innerHTML = bd.tasting.vino.img_3;
            // slide[3].innerHTML = bd.tasting.vino.img_4;
            slide[0].style.backgroundImage = "url('../img/tasting/vino/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/tasting/vino/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/tasting/vino/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/tasting/vino/4.jpg')";
            break;
        case "18":
            desc.innerHTML = 'Дорогие друзья! Приглашаем вас вместе отметить замечательный мужской праздник! Нас ждет: 🍷Винное казино 🍽Ужин от шеф-повара Culinaryon 🎼Музыка, дискотека и сюрпризы! И конечно, приятная компания и праздничное настроение!✨';
            title.innerHTML = 'Винное казино';
            // slide[0].innerHTML = bd.tasting.vino.img_1;
            // slide[1].innerHTML = bd.tasting.vino.img_2;
            // slide[2].innerHTML = bd.tasting.vino.img_3;
            // slide[3].innerHTML = bd.tasting.vino.img_4;
            slide[0].style.backgroundImage = "url('../img/tasting/vino/1.jpg')";
            slide[1].style.backgroundImage = "url('../img/tasting/vino/2.jpg')";
            slide[2].style.backgroundImage = "url('../img/tasting/vino/3.jpg')";
            slide[3].style.backgroundImage = "url('../img/tasting/vino/4.jpg')";
            break;
        default:
            console.log('g');
            break;
    }
} else {
    console.log('x');
}