
<section class="content">
<div class="row">
    <?php
      foreach($systems_list as $system) {
        if(in_array($system->SYSTEM_ID,$user_systems_access)){
    ?>
    <div class="col-lg-3 col-xs-6" style="min-height:300px;">
          <!-- small box -->
        <div class="small-box <?php echo $system->HTML_PANE_BG_COLOR;?> div_link" data-link="<?php echo $system->LINK;?>" style="cursor:pointer;" >
            <div class="inner">
              <h3><?php echo $system->SYSTEM_NAME;?></h3>

            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <?php
              if(in_array($system->SYSTEM_ID,$user_systems_access)){
            ?>
               <a href="#" class="small-box-footer"><?php echo $system->LINK_DESCRIPTION;?> <i class="fa fa-arrow-circle-right"></i></a>
            <?php
              } else {
            ?>
              <a href="#>" class="small-box-footer">Access privileges was disabled <i class="fa fa-arrow-circle-right"></i></a>
            <?php
              }
            ?>
          </div>
        </div>
    <?php
        }
      }
    ?>
</div>
</section>
<script>
$(document).ready(function(){
$("body").on("click",".div_link",function(){
    window.location.href = "//"+$(this).data("link");
});
});
</script>