var title = document.querySelector('.parse-title'),
    data = document.querySelector('.data-parse'),
    place = document.querySelector('.place-parse'),
    seats = document.querySelector('.seats'),
    description = document.querySelectorAll('.description-parse'),
    start = document.querySelector('.start-parse'),
    sbor = document.querySelector('.sbor-parse'),
    tasting = document.querySelector('.tasting-parse'),
    nameLector = document.querySelector('.name-lector'),
    descLector = document.querySelector('.desc-lector'),
    img = document.querySelector('.person__img'),
    speaker = document.querySelectorAll('.name-lector'),
    speakerBox = document.querySelectorAll('.person__item'),
    sectionTest = document.querySelector('.person-section');


var key = sessionStorage.getItem('clickBtn'),
    titleSec = sessionStorage.getItem('test-title'),
    dataSec = sessionStorage.getItem('data'),
    placeSec = sessionStorage.getItem('place'),
    seatsSec = sessionStorage.getItem('seats'),
    timeSec = sessionStorage.getItem('time'),
    // sborSec = Number.parseInt(timeSec) + 0.15,
    // tastingSec = Number.parseInt(timeSec) + 0.30;
    speakerSec = sessionStorage.getItem('speaker');

    title.innerHTML = titleSec;
    data.innerHTML = dataSec + '<br>' + 'В ' + timeSec;
    place.innerHTML = placeSec;
    seats.innerHTML = seatsSec;
    start.innerHTML = timeSec;
    sbor.innerHTML = String(Number.parseInt(timeSec) + 0.15).replace(".", ":");
    tasting.innerHTML = String(Number.parseInt(timeSec) + 0.30).replace(".", ":") + "0";
    speaker[0].innerHTML = speakerSec;
    speaker[1].innerHTML = speakerSec;
    speaker[2].innerHTML = speakerSec;

if (key == 1) {
    // description[0].style.display = 'block';
    // speakerBox[0].style.display = 'block';
    sectionTest.style.display = 'none';
    
} else if (key == 2) {
    description[1].style.display = 'block';
    speakerBox[1].style.display = 'block';
} else {
    description[2].style.display = 'block';
    speakerBox[2].style.display = 'block';
}

