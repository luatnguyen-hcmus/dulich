
<div class="panels js-slideshow" style="height:670px;">
    <?php $i=0; foreach($slide_list as $row) :$i++; ?>
        <div class="panel" style="height:670px;background-image: url( '<?php echo base_url()?>/upload/slide/<?=$row->image_link?>');">
            <div class="panel__content <?php 
                    if($i==1){ echo 'bl';}
                    else if($i==2) { echo 'tl' ; }
                    else if($i==3) { echo 'tr' ; }
                    else if($i==4) { echo 'br'; }
                    else if($i==5){ echo 'bl';}
                    else if($i==6) { echo 'tl' ; }
                    else if($i==7) { echo 'tr' ; }
                    else if($i==8) { echo 'br'; }
                    else if($i==9){ echo 'bl';}
                    else if($i==10) { echo 'tl' ; }
                    else if($i==11) { echo 'tr' ; }
                    else if($i==12) { echo 'br'; }
                    else{echo 'tl' ;}
                    ?>">
            <div class="l-constrained">
                <h2 class="panel__heading"><?=$row->info?></h2>
                <a class="btn btn--primary" href="<?=$row->link?>" style="width:auto;"><?=$row->name?></a>
            </div>
            </div>
        </div>
    <?php endforeach?>


    <!-- <div class="panel" style="background-image: url( 'http://www.eldoradostone.com/wp-content/uploads/2015/10/swan-1500x608.jpg' );">
        <div class="panel__content tl">
        <div class="l-constrained">
            <h2 class="panel__heading">Warm<br />
Sophistication</h2>
            <a class="btn btn--primary" href="http://www.eldoradostone.com/types/fireplaces/">Shop Fireplaces</a>
        </div>
        </div>
    </div>
    <div class="panel" style="background-image: url( 'http://www.eldoradostone.com/wp-content/uploads/2015/10/exterior-4-1500x608.jpg' );">
        <div class="panel__content tr">
        <div class="l-constrained">
            <h2 class="panel__heading">A Lasting First Impression</h2>
            <a class="btn btn--primary" href="http://www.eldoradostone.com/collections/modern/">Explore Modern Collection</a>
        </div>
        </div>
    </div>
    <div class="panel" style="background-image: url( 'http://www.eldoradostone.com/wp-content/uploads/2015/10/marbella-2-1500x608.jpg' );">
        <div class="panel__content br">
        <div class="l-constrained">
            <h2 class="panel__heading">Spring's Around The Corner</h2>
            <a class="btn btn--primary" href="http://www.eldoradostone.com/types/fire-bowls/">Shop Fire Bowls</a>
        </div>
        </div>
    </div>  -->
</div>