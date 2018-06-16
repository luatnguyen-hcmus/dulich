<div class="site-header">
  <div id="top" class="l-constrained">
    <div class="logo-wrap" style="float:left;display: block;position: relative;">
      <a class="logo menu-horizontal" href="<?php echo base_url() ?>" >
          <img style="position:absolute;top:-40px;" class="logo__image" src="<?php echo public_url('site/images/logo.png')?>" width="130px" height="100px" alt="Eldorado Stone">
          <span style="position:relative;left: 92px;top: 20px;"  style="font-size:20px ;color: #F37920;font-family: 'Cookie', cursive;">|MyproGuide.com.vn</span>
      </a>
    </div>

    <div class="nav-wrap hide-on-print">
      <a id="nav-open-btn" class="menu-toggle js-menu-toggle" href="#offcanvas">
        <span class="menu-toggle__line"></span><span class="visuallyhidden">Menu</span>
      </a>
        <div class="offcanvas-wrap l-header-content">
          <div id="offcanvas" class="offcanvas">
            <a id="nav-close-btn" class="menu-toggle menu-toggle--close" href="#top">
              <span class="menu-toggle__line"></span><span class="visuallyhidden">Close</span>
            </a>

            <nav class="l-header-main" role="navigation">
              <ul id="menu-quick-links" class="quick hide-on-mobile">
                <!-- <ul id="menu-quick-links" class="quick hide-on-mobile"> -->
                <?php foreach($menu_list_top as $mlt) : ?>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom">
                    <a href="<?=$mlt->url?>"><?=$mlt->title?></a>
                  </li>
                <?php endforeach?>
                <li id="contactss">
                <span>
                    <?php foreach($phone_list as $pl) : ?>
                        <a href="tel:<?=$pl->phone?>">
                            <i class="fas fa-phone-volume"></i>
                            <?=$pl->phone_show;?>
                        </a>    
                    <?php endforeach?>
                </span>
                <span id="maills" style="margin-left: 20px;">
                    <?php foreach($email_list as $el) : ?>
                        <a href="">
                            <i class="fa fa-envelope"></i> 
                            <?=$el->email?>
                        </a>
                    <?php endforeach?>
                </span>  
            </li>

            <li id="forms">
                <form role="search" method="get" id="searchform" class="form--search" action="<?php echo base_url('tour/search') ?>">
                  <div>
                    <label class="screen-reader-text visuallyhidden" for="s"></label>
                    <input type="text" id="key-search" name="key-search" value="<?php echo isset($key) ? $key : "" ?>" placeholder="Search Keys" />
                    <button class="form__submit" type="submit" name="submit">
                        <span class="visuallyhidden">Submit</span>
                        <i class="icon-search"></i>
                    </button>
                  </div>
                </form>
              </li>
            <style type="text/css">
              .quick>li#contactss:after{
                    content: '.';
                    opacity: 0.1;
              }
              .quick>li#forms:after{

                    content: '.';
                    opacity: 0.1;
              }
            </style>                
            
              <li id="social">
                  <div>
                      <a href="https://www.facebook.com/" target="_blank">
                        <img src="<?php echo public_url('site/images/fb.png') ?>"/>
                      </a>
                      <a href="https://zalo.me/" target="_blank">
                        <img src="<?php echo public_url('site/images/zalo.png') ?>"/>
                      </a>

                      <a href="https://www.viber.com/" target="_blank">
                          <img src="<?php echo public_url('site/images/viber.png') ?>"/>
                      </a>
                      <a href="https://www.tripadvisor.com.vn/Attraction_Review-g293924-d8290098-Reviews-Swallow_Travel-Hanoi.html" target="_blank" class="zaloo" >
                          <img src="<?php echo public_url('site/images/tripadvisor.png') ?>"/>
                      </a>
                  </div>
              </li>


              </ul>
              

              <!-- hien thy trn mobile -->
              <form role="search" method="get" id="searchform" class="form--search quick hide-on-desktop" action="<?php echo base_url('tour/search') ?>">
                        <div>
                          <label class="screen-reader-text visuallyhidden" for="s"></label>
                          <input type="text" id="key-search" name="key-search" value="<?php echo isset($key) ? $key : "" ?>" placeholder="Search Keywords" />
                          <button class="form__submit" type="submit" name="submit">
                              <span class="visuallyhidden">Submit</span>
                              <i class="icon-search"></i>
                          </button>
                        </div>
                  </form>
                  <ul class="quick hide-on-desktop">
                    <li id="contactss">
                      <span>
                          <?php foreach($phone_list as $pl) : ?>
                              <a href="tel:<?=$pl->phone?>">
                                  <i class="fas fa-phone-volume"></i>
                                  <?=$pl->phone_show;?>
                              </a>    
                          <?php endforeach?>
                      </span>
                      <span id="maills" style="margin-left: 20px;">
                          <?php foreach($email_list as $el) : ?>
                              <a href="">
                                  <i class="fa fa-envelope"></i> 
                                  <?=$el->email?>
                              </a>
                          <?php endforeach?>
                      </span>  
                    </li>
                    <li id="social" >
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" style="float:left;">
                              <img src="<?php echo public_url('site/images/fb.png') ?>"/>
                            </a>
                            <a href="https://plus.google.com/" target="_blank" style="float:left;">
                              <img src="<?php echo public_url('site/images/zalo.png') ?>"/>
                            </a>

                            <a style="float:left;" href="http://zalo.vn" target="_blank">
                                <img src="<?php echo public_url('site/images/viber.png') ?>"/>
                            </a>
                            <a style="float:left;" href="https://www.tripadvisor.com.vn/" target="_blank" class="zaloo" >
                                <img src="<?php echo public_url('site/images/tripadvisor.png') ?>"/>
                            </a>
                        </div>
                    </li>
                  </ul>

              <ul id="menu-main-menu" class="main" style="clear:both;">
                <?php foreach($menu_list as $row) : ?>
                <li class="menu-item menu-item-type-post_type menu-item-object-page <?php  if(!empty($row->subs)) echo 'menu-item-has-children'; else echo ''; ?>">
                  <a href="<?php echo base_url($row->url)?>"><?=$row->title?></a>
                  <?php  if(count($row->subs) > 0) : ?>
                  <ul class="sub-menu">
                    <?php foreach($row->subs as $rows) : ?>
                        <?php 
                            $name = convert_vi_to_en($rows->name); 
                            $name = strtolower($name);
                        ?>
                          <li class="menu-item menu-item-type-taxonomy menu-item-object-type ">
                            <a href="<?php echo base_url($name.'-c'.$rows->id) ?>"><?=$rows->name?> </a>
                          </li>
                    <?php endforeach ?>
                  </ul>
                  <?php endif ?>
                </li>
                <?php endforeach ?>
                
                <ul id="menu-quick-links-1" class="quick hide-on-desktop">
                  <?php foreach($menu_list_top as $mlt) : ?>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                      <a href="<?=$mlt->url?>"><?=$mlt->title?></a>
                    </li>
                  <?php endforeach ?>
                </ul> 
              </ul>               
              </nav>
            </div>
          </div>
      </div>
  </div>
</div>
<style type="text/css">
    ul li a{
      font-size: 13px !important;
    }
    #menu-main-menu li a{
      font-size: 18px !important;
    }
  
   ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #d16c00 !important;
        opacity: 1; /* Firefox */
        font-size:14px !important;
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #d16c00 !important;
        font-size:14px !important;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: #d16c00 !important;
        font-size:14px !important;
    }
</style>