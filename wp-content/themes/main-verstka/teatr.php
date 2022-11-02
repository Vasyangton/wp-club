<?php
/**
 Template Name: teatr-page
 */

get_header();
?>

	<section class="gallery-section theatre-section">
            <div class="container" style="margin-top: 100px;">
                <h1 class="t-title">Актерское мастерство</h1>
            </div>
            <div class="gallery__box">
                <div class="gallery__arrow slider__arrow left">
                    <img class="pc-arrow" src="../img/icons/gallery__arrow.svg" alt="">
                    <img class="xs-arrow" src="../img/icons/slider-right-black.svg" alt="">
                </div>
                <div class="gallery__arrow slider__arrow right">
                    <img class="pc-arrow" src="../img/icons/gallery__arrow.svg" alt="">
                    <img class="xs-arrow" src="../img/icons/slider-right-black.svg" alt="">
                </div>
                <div class="gallery__slider">
                    <div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img1.JPG" style="background-image: url('../img/masterstvo/1.jpg')"></a>
                    </div>
                    <div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img2.JPG" style="background-image: url('../img/masterstvo/2.jpg')"></a>
                    </div>
                    <div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img3.JPG" style="background-image: url('../img/masterstvo/3.jpg')"></a>
                    </div>
                    <div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img1.JPG" style="background-image: url('../img/masterstvo/4.jpg')"></a>
                    </div>
                    <div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img2.JPG" style="background-image: url('../img/masterstvo/5.jpg')"></a>
                    </div>
                    <div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img3.JPG" style="background-image: url('../img/masterstvo/6.jpg')"></a>
                    </div>
					<div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img3.JPG" style="background-image: url('../img/acter/pushkin/1.jpg')"></a>
                    </div>
					<div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img3.JPG" style="background-image: url('../img/acter/pushkin/2.jpg')"></a>
                    </div>
					<div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img3.JPG" style="background-image: url('../img/acter/pushkin/3.jpg')"></a>
                    </div>
					<div class="gallery__space">
                        <a class="gallery__item" href="../img/gallery/img3.JPG" style="background-image: url('../img/acter/pushkin/4.jpg')"></a>
                    </div>
                </div>
            </div>
</section>

<style>
	.gallery__box .gallery__item {
		display: block !important;
	}
</style>

<?php
get_footer();
