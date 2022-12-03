<section id="partners">

        <div class="row">
            <div class="container">
                <section class="customer-logos slider" data-arrows="true">

                    <?php foreach($attributes["partners"] as $partner): ?>
                        <div class="slide">
                            <img src="<?php echo $partner["partner-logo"] ?>" alt="<?php echo $partner["partner-name"] ?>">
                        </div>
                    <?php endforeach ?>

                </section>
            </div>
        </div>

</section>
<?php 
slide_partners()
?>