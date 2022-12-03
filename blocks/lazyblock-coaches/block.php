<div class="coach-container hidden">
    <div class="coach-items">
        <?php foreach($attributes["coaches"] as $coaches): ?>
                <div class="coach-item col-4 col-xs-12">
                        <img src="<?php echo $coaches["img"]?>" alt="">
                        <span class="coach-item__name"><?php echo $coaches["name"]?></span>
                        <span class="coach-item__email"><?php echo $coaches["email"]?></span>
                </div>  
        <?php endforeach ?>
    </div>
</div>
