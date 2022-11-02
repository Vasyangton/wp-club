var title = document.querySelector('.title-parse'),
    key = sessionStorage.getItem('clickBtn'),
    valueTitle = sessionStorage.getItem('title'),
    slider = document.querySelectorAll('.gallery__space'),
    description = document.querySelectorAll('.parse-desc'),
    prazdnikiOne = document.querySelectorAll('.prazdniki-one'),
    prazdnikiTwo = document.querySelectorAll('.prazdniki-two'),
    prazdnikiThree = document.querySelectorAll('.prazdniki-three'),
    prazdnikiFour = document.querySelectorAll('.prazdniki-four'),
    prazdnikiFive = document.querySelectorAll('.prazdniki-five'),
    prazdnikiSix = document.querySelectorAll('.prazdniki-six'),
    jivopisOne = document.querySelectorAll('.jivopis-one'),
    jivopisTwo = document.querySelectorAll('.jivopis-two'),
    jivopisThree = document.querySelectorAll('.jivopis-three'),
    jivopisFour = document.querySelectorAll('.jivopis-four'),
    jivopisFive = document.querySelectorAll('.jivopis-five'),
    jivopisSix = document.querySelectorAll('.jivopis-six'),
    excursionOne = document.querySelectorAll('.excursion-one'),
    excursionTwo = document.querySelectorAll('.excursion-two'),
    excursionThree = document.querySelectorAll('.excursion-three'),
    excursionFour = document.querySelectorAll('.excursion-four'),
    excursionFive = document.querySelectorAll('.excursion-five'),
    excursionSix = document.querySelectorAll('.excursion-six'),
    kinoOne = document.querySelectorAll('.kino-one'),
    kinoTwo = document.querySelectorAll('.kino-two'),
    kinoThree = document.querySelectorAll('.kino-three'),
    kinoFour = document.querySelectorAll('.kino-four'),
    kinoFive = document.querySelectorAll('.kino-five'),
    kinoSix = document.querySelectorAll('.kino-six'),
    acterOne = document.querySelectorAll('.acter-one'),
    acterTwo = document.querySelectorAll('.acter-two'),
    acterThree = document.querySelectorAll('.acter-three'),
    acterFour = document.querySelectorAll('.acter-four'),
    acterFive = document.querySelectorAll('.acter-five'),
    acterSix = document.querySelectorAll('.acter-six'),
    modaOne = document.querySelectorAll('.moda-one'),
    modaTwo = document.querySelectorAll('.moda-two'),
    modaThree = document.querySelectorAll('.moda-three'),
    modaFour = document.querySelectorAll('.moda-four'),
    modaFive = document.querySelectorAll('.moda-five'),
    modaSix = document.querySelectorAll('.moda-six'),
    tastingOne = document.querySelectorAll('.tasting-one'),
    tastingTwo = document.querySelectorAll('.tasting-two'),
    tastingThree = document.querySelectorAll('.tasting-three'),
    tastingFour = document.querySelectorAll('.tasting-four'),
    tastingFive = document.querySelectorAll('.tasting-five'),
    tastingSix = document.querySelectorAll('.tasting-six');

title.innerHTML = valueTitle;

switch (key) {
    case '1': 
        slider[0].style.display = 'flex';
        prazdnikiOne.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        description[0].style.display = 'block';
    break;
    case '2': 
        slider[1].style.display = 'flex';
        prazdnikiTwo.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        description[1].style.display = 'block';
    break;
    case '3': 
        prazdnikiThree.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[2].style.display = 'flex';
        description[2].style.display = 'block';
    break;
    case '4': 
        prazdnikiFour.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[3].style.display = 'flex';
        description[3].style.display = 'block';
    break;
    case '5': 
        prazdnikiFive.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[4].style.display = 'flex';
        description[4].style.display = 'block';
    break;
    case '6': 
        prazdnikiSix.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[5].style.display = 'flex';
        description[5].style.display = 'block';
    break;
    case '7': 
        jivopisOne.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[6].style.display = 'flex';
        description[6].style.display = 'block';
    break;
    case '8': 
        jivopisTwo.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[7].style.display = 'flex';
        description[7].style.display = 'block';
    break;
    case '9': 
        jivopisThree.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[8].style.display = 'flex';
        description[8].style.display = 'block';
    break;
    case '10': 
        jivopisFour.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[9].style.display = 'flex';
        description[9].style.display = 'block';
    break;
    case '11': 
        jivopisFive.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[10].style.display = 'flex';
        description[10].style.display = 'block';
    break;
    case '12': 
        jivopisSix.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[11].style.display = 'flex';
        description[11].style.display = 'block';
    break;
    case '13': 
        excursionOne.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[12].style.display = 'flex';
        description[12].style.display = 'block';
    break;
    case '14':
        excursionTwo.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[13].style.display = 'flex';
        description[13].style.display = 'block';
    break;
    case '15': 
        excursionThree.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[14].style.display = 'flex';
        description[14].style.display = 'block';
    break;
    case '16': 
        excursionFour.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[15].style.display = 'flex';
        description[15].style.display = 'block';
    break;
    case '17': 
        excursionFive.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[16].style.display = 'flex';
        description[16].style.display = 'block';
    break;
    case '18': 
        excursionSix.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[17].style.display = 'flex';
        description[17].style.display = 'block';
    break;
    case '19': 
        kinoOne.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[18].style.display = 'flex';
        description[18].style.display = 'block';
    break;
    case '20': 
        kinoTwo.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[19].style.display = 'flex';
        description[19].style.display = 'block';
    break;
    case '21':
        kinoThree.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[20].style.display = 'flex';
        description[20].style.display = 'block';
    break;
    case '22': 
        kinoFour.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[21].style.display = 'flex';
        description[21].style.display = 'block';
    break;
    case '23':
        kinoFive.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[22].style.display = 'flex';
        description[22].style.display = 'block';
    break;
    case '24': 
        kinoSix.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[23].style.display = 'flex';
        description[23].style.display = 'block';
    break;
    case '25': 
        acterOne.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[24].style.display = 'flex';
        description[24].style.display = 'block';
    break;
    case '26': 
        acterTwo.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[25].style.display = 'flex';
        description[25].style.display = 'block';
    break;
    case '27':
        acterThree.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[26].style.display = 'flex';
        description[26].style.display = 'block';
    break;
    case '28':
        acterFour.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[27].style.display = 'flex';
        description[27].style.display = 'block';
    break;
    case '29': 
        acterFive.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[28].style.display = 'flex';
        description[28].style.display = 'block';
    break;
    case '30': 
        acterSix.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[29].style.display = 'flex';
        description[29].style.display = 'block';
    break;
    case '31': 
        modaOne.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[30].style.display = 'flex';
        description[30].style.display = 'block';
    break;
    case '32': 
        modaTwo.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[31].style.display = 'flex';
        description[31].style.display = 'block';
    break;
    case '33':
        modaThree.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[32].style.display = 'flex';
        description[32].style.display = 'block';
    break;
    case '34':
        modaFour.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[33].style.display = 'flex';
        description[33].style.display = 'block';
    break;
    case '35': 
        modaFive.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[34].style.display = 'flex';
        description[34].style.display = 'block';
    break;
    case '36':
        modaSix.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[35].style.display = 'flex';
        description[35].style.display = 'block';
    break;
    case '37':
        tastingOne.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[36].style.display = 'flex';
        description[36].style.display = 'block';
    break;
    case '38': 
        tastingTwo.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[37].style.display = 'flex';
        description[37].style.display = 'block';
    break;
    case '39': 
        tastingThree.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[38].style.display = 'flex';
        description[38].style.display = 'block';
    break;
    case '40': 
        tastingFour.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[39].style.display = 'flex';
        description[39].style.display = 'block';
    break;
    case '41': 
        tastingFive.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[40].style.display = 'flex';
        description[40].style.display = 'block';
    break;
    case '42': 
        tastingSix.forEach((elem) => {
           elem.classList.add('active-class'); 
        });
        slider[41].style.display = 'flex';
        description[41].style.display = 'block';
    break;
    default: 
    console.log('x');
    break;
}
