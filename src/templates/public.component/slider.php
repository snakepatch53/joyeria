<div class="swiper">
    <div class="swiper-wrapper">
        <?php foreach ($DATA['slider'] as $item) { ?>
            <div class="swiper-slide">
                <img src="<?= $item['slider_img_url'] ?>" alt="Imagen <?= $item['slider_id'] ?> del slider">
            </div>
        <?php } ?>
    </div>
</div>