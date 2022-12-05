<div class="team-header-container">
    <div class="team-header">
        <span>Team</span>
        <div id="team" class="team-selector">
            <span class="active" onclick="toggleTeamView('player')">Player</span>
            <span onclick="toggleTeamView('coaches')">Coaches</span>
        </div>
    </div>
</div>

<div class="player-container">
<?php foreach($attributes["playerrepeater"] as $playerrepeater): ?>
                <div class="player-hero col-12">
                    <div class="player-hero-img ">
                        <img class="fadeUpOnSeen" src="<?php echo $playerrepeater["playerimg"]?>" alt="">
                    </div>
                    <div class="player-hero-info">
                        <span class="player-hero-info__number fadeUpOnSeen"><?php echo $playerrepeater["playernumber"]?></span>
                        <span class="player-hero-info__name fadeUpOnSeen"><?php echo $playerrepeater["playername"]?></span>
                        <span class="player-hero-info__lastname fadeUpOnSeen"><?php echo $playerrepeater["playerlastname"]?></span>
                        <span class="player-hero-info__age fadeUpOnSeen"><?php echo $playerrepeater["playerage"]?></span>
                        <span class="player-hero-info__position fadeUpOnSeen"><?php echo $playerrepeater["playerposision"]?></span>
                        <span class="player-hero-info__stickside fadeUpOnSeen"><?php echo $playerrepeater["playerstickside"]?></span>
                        <span class="player-hero-info__country fadeUpOnSeen"><?php echo $playerrepeater["playercountry"]?></span>
                    </div>
                    
                </div>
<?php break; endforeach ?>

<div class="player-icons col-12 " >
    <?php foreach($attributes["playerrepeater"] as $playerrepeater): ?>
                <div class="player-icon" 
                data-number="<?php echo $playerrepeater["playernumber"]?>"
                data-name="<?php echo $playerrepeater["playername"]?>"
                data-lastname="<?php echo $playerrepeater["playerlastname"]?>"
                data-age="<?php echo $playerrepeater["playerage"]?>"
                data-position="<?php echo $playerrepeater["playerposision"]?>"
                data-stickside="<?php echo $playerrepeater["playerstickside"]?>"
                data-country="<?php echo $playerrepeater["playercountry"]?>">

                    <img src="<?php echo $playerrepeater["playerimg"]?>" alt="">
                </div>
    <?php endforeach ?>

</div>
</div>
