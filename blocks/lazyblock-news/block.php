<section id="news">

        <div class="container-fluid">

            <div class="row news">

                <?php foreach($attributes["news-card"] as $newsCard): ?>
                <div class="col-sm-12 col-md-3 flex-col everynew">

                    <div class="news-card">
                            
                            <div class="news-img">
                                <img src="<?php echo $newsCard["news-image"] ?>" alt="<?php echo $newsCard["news-heading"] ?>">
                            </div>
    
                            <div class="news-heading">
                                <h5><?php echo $newsCard["news-heading"] ?><!-- Sunday's youth matches --></h5>
                                <p><?php echo $newsCard["news-date"] ?></p>
                            </div>

                            <div class="lineee">
                                <div class="line"></div>
                            </div>
                            <div class="news-text">
                                <?php echo $newsCard["news-description"] ?>
                            </div>

                    </div>

                </div>

                <?php endforeach ?>
            </div>

        </div>

</section>