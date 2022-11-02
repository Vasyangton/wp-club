var btn = document.querySelectorAll('.parser-btn');

function one() {
    sessionStorage.setItem('clickBtn', 1);
}

function two() {
    sessionStorage.setItem('clickBtn', 2);
}

function three() {
    sessionStorage.setItem('clickBtn', 3);
}

btn[0].addEventListener('click', one);
btn[1].addEventListener('click', two);
btn[2].addEventListener('click', three);