<section id="first-view">

    <div class="container-fluid">

        <div class="row first-view">

            <div class="col-sm-12 col-md-5 flex-col header-text">
                <div class="home-text">
                    <h1><?php echo $attributes["club-name"]?> <br><?php echo $attributes["club-type"]?></h1>
                    <h3><?php echo $attributes["slogan1"]?><br><?php echo $attributes["slogan2"]?></h3>
                    <div class="d-flex justify-content-between joinourteam">
                        <input type="text" placeholder="join">
                        <button class="btn">JOIN</button>
                    </div>
                    <a href="<?php echo $attributes["download-poster"]?>">
                        <button>JOIN US POSTER</button>
                    </a> 

                </div>
            </div>

            <div class="col-sm-12 col-md-7 flex-col boysss">
                <div class="boys-img">
                    <img src="<?php echo $attributes["hero-image"]?>" alt="ESBJERG SHARKS">
                </div>
            </div>

        </div>

    </div>

</section>