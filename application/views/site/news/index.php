<main role="main">
    <div class="hero l-section--md l-section--bg" style="background-image:url( 'http://www.eldoradostone.com/wp-content/uploads/2015/10/header-12.jpg' );">
    <header class="hero__content l-constrained">
        <h1 class="hero__heading">
        BLOG             </h1>
    </header>
</div>
    <div class="l-constrained l-section--lg faux faux--primary">
        <div class="l-primary l-padding-td l-primary-wd">
            <?php foreach($news_list as $row) : ?>
                <div class="row">
                        <div class="pod">
                             <a class="box" href="<?php echo base_url('news/view/'.$row->id)?>" title="<?=$row->title?>">
                                 <div class="box__image-wrap medium-4 column">
                                     <img class="box__image" src="<?php echo base_url('/upload/news/'.$row->image_link)?>" alt="<?=$row->title?>" title="<?=$row->title?>">
                                 </div>
                                 <div class="medium-8 column">
                                     <h1 class="box__heading" style="font-size:20px;"><?=$row->title?></h1>
                                     <?php 
                                          if(strlen($row->intro) < 200){
                                              echo '<span>'.$row->intro.'</span>';
                                          }else{
                                            echo '<span>'.mb_substr($row->intro,0,200,'utf8').'...'.'</span>';
                                          }
                                      ?>
                                 </div>
                             </a>
                         </div>
                    </div>
                    <div style="margin:3px 0;"></div>
            <?php endforeach?>

        </div>
        <div class="l-secondary l-padding-td l-secondary-wd">
            <aside class="widget l-padding-desktop-hd">
                    <h2 class="title-h3">More Orther Tour</h2>
                    <?php foreach($tour_mores as $row) : ?>
                        <span>
                            <a href="<?php echo base_url('tour/view/'.$row->id)?>" title="<?=$row->name?>"><span class="cta-box__link"><i class="fa fa-chevron-right" role="presentation"></i><?=$row->name?> </span></a>
                            <hr />
                        </span>
                  <?php endforeach ?>
            </aside>
        </div>
    </div>
</main>