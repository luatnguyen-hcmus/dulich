<div class="l-constrained">
    <div class="medium-4 columns" id="footer_nav">
        <hr class="footer-divider-1">
        <h3 style="color: #F37920; font-weight: 800;">THE BEST TOUR</h3>
        <ul class="menu-horizontal row">
            <?php foreach($tour_mores as $row) : ?>
                  <li style="line-height: 20px;">
                    <a href="<?php echo base_url('tour/view/'.$row->id) ?>">
                    <?=$row->name?></a>
                  </li>
            <?php endforeach ?>
        </ul>
                
    </div>
            <!--Stay Connected-->
    <div class="medium-4 columns">
          <hr class="footer-divider-2">
          <h3 style="color: #F37920; font-weight: 800;">CONTACT US</h3>

          <ul class="menu-horizontal row">
              <li style="line-height: 20px;"><i class="fas fa-map-marker-alt " style="font-size:18px;color:#F37920;margin-right:5px;"></i><a href="">13 Tran Van Giap Street, Hiep Ten block, Tan Phu District, HCM City</a></li>
              <li style="line-height: 20px;"> <i class="fas fa-phone-volume"  style="font-size:18px;color:#F37920;margin-right:5px;"></i>
                    <?php  foreach($more_phone_list as $mpl):?>
                        <a href="tel: <?=$mpl->phone?>"> 
                          <?=$mpl->phone_show?>
                        </a> | 
                    <?php endforeach?>
                </li>
                                     
                <li style="line-height: 20px;"><i class="fa fa-envelope"  style="font-size:18px;color:#F37920;margin-right:5px;"></i>
                      <?php  foreach($email_list as $el):?>
                          <a href="mailto:<?=$el->email?>"> 
                             <?=$el->email?>
                          </a>
                      <?php endforeach?>
                </li>
          </ul>
    </div>
    <div class="medium-4 columns">    
          <hr class="footer-divider-2">
          <h3 style="color: #F37920; font-weight: 800;">TRIPADVISOR <i class="fab fa-tripadvisor"></i></h3>
          <ul class="menu-horizontal row">
            <li><a>Đăng kí để nhận Email:</a></li>
            <li style="width: 100%;">
              <form action="<?php echo base_url()?>" method="post">
                  <input type="email" name="mailnhan" style="width: 70%; height:30px;" required />
                  <input class="" type="submit" name="btnmail" value="gửi" style="width:25%;height:30px;">
              </form>
              
            </li>
          </ul>
    </div>
    <a href="#" id="gototop">
        <img src="<?php echo public_url('site/images/go-top.png')?>"/>
      </a>
</div>

<script type="text/javascript">
          $(document).ready(function(){
              // $('#gototop').fadeOut();
              $('#gototop').click(function() {
                  $('html, body').animate({scrollTop:0},"slow");
             });
             // go top
             $(window).scroll(function() {
                  if($(window).scrollTop() > 200) {
                      $('#gototop').fadeIn();
                  } else {
                      $('#gototop').fadeOut();
                  }
             });
          });
    </script>

<style type="text/css">
  a{
    text-decoration: none !important;
  }
  #gototop {
      bottom: 10px;
      color: #666;
      cursor: pointer;
      padding: 5px;
      position: fixed;
      right: 15px;
      text-align: center;
      text-decoration: none;
      width: auto;
  }
</style>

