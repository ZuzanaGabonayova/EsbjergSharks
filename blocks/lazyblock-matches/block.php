<section id="matches">

        <div class="container-fluid">

            <div class="row matches">

                <div class="col-sm-12 col-md-6 flex-col last-match">

                    <div class="last-match-table">

                        <div class="heading">
                            <h3>LAST MATCH</h3>
                        </div>

                        <div class="show-match">

                            <div class="team1">
                                <img src="<?php echo $attributes["last-match-team1-logo"]?>" alt="<?php echo $attributes["last-match-team1"]?>">
                                <h5><?php echo $attributes["last-match-team1"]?></h5>
                            </div>

                            <div class="score">
                                <p><?php echo $attributes["last-match-date"]?></p>
                                <p><?php echo $attributes["last-match-time"]?></p>
                                <h5><?php echo $attributes["last-match-team1-goals"]?> : <?php echo $attributes["last-match-team2-goals"]?></h5>
                                <p>END</p>
                            </div>

                            <div class="team2">
                                <img src="<?php echo $attributes["last-match-team2-logo"]?>" alt="<?php echo $attributes["last-match-team2"]?>">
                                <h5><?php echo $attributes["last-match-team2"]?></h5>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-sm-12 col-md-6 flex-col next-match">

                    <div class="next-match-table">

                        <div class="heading">
                            <h3>NEXT MATCH</h3>
                        </div>

                        <div class="show-match">

                            <div class="team1">
                                <img src="<?php echo $attributes["next-match-team1-logo"]?>" alt="<?php echo $attributes["next-match-team1"]?>">
                                <h5><?php echo $attributes["next-match-team1"]?></h5>
                            </div>

                            <div class="score">
                                <p><?php echo $attributes["next-match-date"]?></p>
                                <p><?php echo $attributes["next-match-time"]?></p>
                                <h5>-- : --</h5>
                            </div>

                            <div class="team2">
                                <img src="<?php echo $attributes["next-match-team2-logo"]?>" alt="<?php echo $attributes["next-match-team2"]?>">
                                <h5><?php echo $attributes["next-match-team2"]?></h5>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>