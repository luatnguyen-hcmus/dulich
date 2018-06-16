<main role="main">
    <div class="hero l-section--md l-section--bg" style="background-image:url( 'http://www.eldoradostone.com/wp-content/uploads/2015/10/header-12.jpg' );">
    <header class="hero__content l-constrained">
        <h1 class="hero__heading">
        BLOG             </h1>
    </header>
</div>
    <div class="l-constrained l-section--lg faux faux--primary">
        <div class="l-primary l-padding-td l-primary-wd">
            <?php foreach($list as $row) : ?>
                <div class="row">
                        <div class="pod">
                             <a class="box" href="<?php echo base_url('tour/view/'.$row->id)?>" title="<?=$row->name?>">
                                 <div class="box__image-wrap medium-3 column">
                                     <img class="box__image" src="<?php echo base_url('/upload/tour/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">
                                 </div>
                                 

                                 <div class="medium-3 column" style="float: right;">
                                        <span class="from"><i>from</i></span>
                                        <p class="">
                                          <?php if($row->discount > 0) :?>
                                              <?php $price_new = $row->price - $row->discount; ?>
                                              <strong style=" font-size: 18px; text-decoration: line-through; color: red; margin-right: 10px;">
                                                  <?php echo number_format($row->price) ?> đ 
                                              </strong>
                                              <span style=" font-weight: bold; color:#0261A9"> <?php echo number_format($price_new) ?>đ</span>
                                          <?php else : ?>
                                                <span style="font-weight: bold; color:#0261A9"><?php echo number_format($row->price) ?>đ</span>
                                          <?php endif ?>
                                        </p>
                                        <a class="btn booktour" href="<?php echo base_url('tour/view/'.$row->id)?>" title="<?=$row->name?>" style='width:80%;'>See more</a>
                                  </div>


                                  <div class="medium-6 column">
                                     <h1 class="box__heading" style="font-size:20px;"><?=$row->name?></h1>
                                     <?php 
                                          if(strlen($row->site_title) < 200){
                                              echo '<span>'.$row->site_title.'</span>';
                                          }else{
                                              echo '<span>'.mb_substr($row->site_title,0,200,'utf8').'...'.'</span>';
                                          }
                                      ?>
                                      
                                 </div>

                                  <div class="clearfix"></div>
                             </a>
                         </div>
                    </div>
                    <div style="margin:3px 0;"></div>
            <?php endforeach?>
             <div class='pagination'>
                                    <?php echo $this->pagination->create_links() ?>
                            </div>
        </div>
        <div class="l-secondary l-padding-td l-secondary-wd">
            <aside class="widget l-padding-desktop-hd">
                    <h2 class="title-h3">More Orther Tour</h2>
                    <?php foreach($list_orther as $row) : ?>
                        <span>
                            <a href="<?php echo base_url('tour/view/'.$row->id)?>" title="<?=$row->name?>"><span class="cta-box__link"><i class="fa fa-chevron-right" role="presentation"></i><?=$row->name?> </span></a>
                            <hr />
                        </span>
                  <?php endforeach ?>
            </aside>
        </div>
    </div>
</main>


<style>
    .box{
      background-color: transparent !important;
    }
    .pagination {
          display: block;
          padding: 5px 10px;
          float:right;
      }
      .pagination a {
          background: #fff;
          border: 1px solid #ffab1d;
          border-radius: 2px;
          box-shadow: 0 1px 0 #eaeaea, 0 1px 0 #ffffff inset;
          color: #ffab1d;
          display: inline-block;
          float: left;
          font-weight: 700;
          line-height: 25px;
          margin-right: 4px;
          min-height: 25px;
          padding: 0 10px;
          text-decoration: none;
      }
      .pagination strong{
          background: #ffab1d;
          border: 1px solid #ffab1d;
          border-radius: 2px;
          box-shadow: 0 1px 0 #ffab1d, 0 1px 0 #ffab1d inset;
          color: #fff;
          display: inline-block;
          float: left;
          font-weight: 700;
          line-height: 25px;
          margin-right: 4px;
          min-height: 25px;
          padding: 0 10px;
          text-decoration: none;
      }
</style>