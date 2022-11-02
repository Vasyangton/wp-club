var title = document.querySelector('.parse-title'),
    data = document.querySelector('.data-parse'),
    place = document.querySelector('.place-parse'),
    desc = document.querySelector('.description-parse'),
    start = document.querySelector('.start-parse'),
    sbor = document.querySelector('.sbor-parse'),
    tasting = document.querySelector('.tasting-parse');

var server = new XMLHttpRequest();
var url = "js/parse.json";
server.open("GET", url, false);

server.send();

if (server.status == 200) {
    var bd = JSON.parse(server.responseText);
    var test = sessionStorage.getItem("znachenieShablona");

    if (test == 100) {
        console.log('заебись');
        title.innerHTML = bd.Elena.name;
        data.innerHTML = bd.Elena.data + "<br>" + "В " + bd.Elena.time;
        place.innerHTML = bd.Elena.adress;
        desc.innerHTML = bd.Elena.description;
        sbor.innerHTML = bd.Elena.sbor;
        start.innerHTML = bd.Elena.start;
        tasting.innerHTML = bd.Elena.tasting;
    } else if (test == 200) {
        title.innerHTML = bd.Vino.name;
        data.innerHTML = bd.Vino.data + "<br>" + "В " + bd.Vino.time;
        place.innerHTML = bd.Vino.place;
        desc.innerHTML = bd.Vino.description;
        sbor.innerHTML = bd.Vino.sbor;
        start.innerHTML = bd.Vino.start;
        tasting.innerHTML = bd.Vino.tasting;
    } else if (test == 300) {
        title.innerHTML = bd.Karen.name;
        data.innerHTML = bd.Karen.data + "<br>" + "В " + bd.Karen.time;
        place.innerHTML = bd.Karen.place;
        desc.innerHTML = bd.Karen.description;
        sbor.innerHTML = bd.Karen.sbor;
        start.innerHTML = bd.Karen.start;
        tasting.innerHTML = bd.Karen.tasting;
    } else {
        console.log('костыль');
    }
}