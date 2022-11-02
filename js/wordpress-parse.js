var btn = document.querySelectorAll('.parser-btn'),
    titleWp = document.querySelectorAll('.title-parse'),
    data = document.querySelectorAll('.data'),
    place = document.querySelectorAll('.place'),
    time = document.querySelectorAll('.time'),
    speaker = document.querySelectorAll('.speaker'),
    seats = document.querySelectorAll('.seats');

function one() {
    sessionStorage.setItem('clickBtn', '1');
    sessionStorage.setItem('test-title', titleWp[0].textContent);
    sessionStorage.setItem('data', data[0].textContent);
    sessionStorage.setItem('place', place[0].textContent);
    sessionStorage.setItem('seats', seats[0].textContent);
    sessionStorage.setItem('time', time[0].textContent);
    sessionStorage.setItem('speaker', speaker[0].textContent);
}

function two() {
    sessionStorage.setItem('clickBtn', '2');
    sessionStorage.setItem('test-title', titleWp[1].textContent);
    sessionStorage.setItem('data', data[1].textContent);
    sessionStorage.setItem('place', place[1].textContent);
    sessionStorage.setItem('seats', seats[1].textContent);
    sessionStorage.setItem('time', time[1].textContent);
    sessionStorage.setItem('speaker', speaker[1].textContent);
}

function three() {
    sessionStorage.setItem('test-title', titleWp[2].textContent);
    sessionStorage.setItem('data', data[2].textContent);
    sessionStorage.setItem('place', place[2].textContent);
    sessionStorage.setItem('seats', seats[2].textContent);
    sessionStorage.setItem('time', time[2].textContent);
    sessionStorage.setItem('speaker', speaker[2].textContent);
}

btn[0].addEventListener('click', one);
btn[1].addEventListener('click', two);
btn[2].addEventListener('click', three);