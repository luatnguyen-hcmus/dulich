    <div class="hero l-section--md l-section--bg" style="background-image:url( 'http://www.eldoradostone.com/wp-content/uploads/2015/10/header-12.jpg' );">
    <header class="hero__content l-constrained">
        <h1 class="hero__heading">
        About Us             </h1>
    </header>
</div>

        <div class="l-section--lg bg-mercury">
            <div class="l-constrained">
                <h2>This is your planet. Get to know it.</h2>
                <p class="heading--highlight">Vast, wide, bottomless, and limitless: Welcome to Earth, the universe’s #1 travel destination. There’s more to see, do, touch, smell, and taste on this wondrous little rock than we could possibly cover here, but one thing’s for sure: Wherever you’re headed, we’re already there.</p>

                <div class="pods pods--threeup pods--sm box__products">
                    <?php foreach($listtop as $row) : ?>
                        <?php 
                                $name = convert_vi_to_en($row['name']); 
                                $name = strtolower($name);
                            ?>
                        <div class="pod">
                             <a class="box" href="<?php echo base_url($name.'-c'.$row['id_catalog'])?>" title="<?=$row['name']?>">
                                 <div class="box__image-wrap">
                                     <img class="box__image" src="<?php echo base_url('/upload/catalog/'.$row['image'])?>" alt="<?=$row['name']?>" title="<?=$row['name']?>"  style="width:100%; min-height:300px;" alt="Zinc" data-pin-nopin="true">
                                 </div>
                                 <div class="box__content">
                                     <span class="box__heading"><?=$row['name']?></span>
                                 </div>
                             </a>
                         </div>
                    <?php endforeach ?>

                     

                </div>
            </div>
        </div>

        
    