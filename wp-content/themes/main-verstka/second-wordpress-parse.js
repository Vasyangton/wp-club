var title = document.querySelector('.parse-title'),
    data = document.querySelector('.data-parse'),
    place = document.querySelector('.place-parse'),
    seats = document.querySelector('.seats'),
    description = document.querySelector('.description-parse'),
    start = document.querySelector('.start-parse'),
    sbor = document.querySelector('.sbor-parse'),
    tasting = document.querySelector('.tasting-parse');


var key = sessionStorage.getItem('clickBtn');

if(key == 1) {
    title.innerHTML = "<?php the_field('first-title') ?>";
    data.innerHTML = "<?php the_field('first-data')?>",' ',"<?php the_field('first-time') ?>";
    place.innerHTML = "<?php the_field('first-description'); ?>";
} else if (key == 2) {
    title.innerHTML = "<?php the_field('second-title') ?>";
    data.innerHTML = "<?php the_field('second-data')?>",' ',"<?php the_field('second-time') ?>";
    place.innerHTML = "<?php the_field('second-description'); ?>";
} else if (key == 3) {
    title.innerHTML = "<?php the_field('third-title') ?>";
    data.innerHTML = "<?php the_field('third-data')?>",' ',"<?php the_field('third-time') ?>";
    place.innerHTML = "<?php the_field('third-description'); ?>";
} else {
    console.log('Кнопка не нажалась');
}
