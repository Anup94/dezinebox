<style type="text/css">
.divSeparator {
  display: none;
}
</style>
<script type="text/javascript">
function submitResForm() {
  //debugger;
  var ret=false;
  var checkedEle = $(".categoryOpt:checked");
  if(!checkedEle.length) {
    alert("Please select some options.");
  } else {
    var val=[];
    checkedEle.each(function() {
      val.push($(this).val());
    });
    $("[name='categoryOption']").val(val.join());
    ret=true;
  }
  return ret;
}
</script>
<form name="resForm" method="get" onsubmit="return submitResForm()" action="get-your-box.php">
<!-- Item 1 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4><span>Living&nbsp;<input type="checkbox" class="categoryOpt" value="Living"/></span></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Living');?>">
                 <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" >
                 <img src="images/living.jpg" class="ft-item img-responsive" style="margin:auto;  max-width: 100%; width: auto; height: auto;">               
                  </div></div>
              </div>
              <!-- Item 2 -->
             <div class="col-lg-3 col-md-6 mb-sm-50"><h4><span>Dining&nbsp;<input type="checkbox" class="categoryOpt" value="Dining"/></span></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Dining');?>">
              <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" >
                 <img src="images/dining1.jpg" class="ft-item img-responsive" style="margin:auto;  max-width: 100%; width: auto; height: auto;">               
                  </div></div>
              </div>
              <!-- Item 3 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4><span>Kitchen&nbsp;<input type="checkbox" class="categoryOpt" value="Kitchen"/></span></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Kitchen');?>">
                <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" >
                 <img src="images/kitchen.jpg" class="ft-item img-responsive" style="margin:auto;  max-width: 100%; width: auto; height: auto;">               
                  </div></div>
              </div>
              <!-- Item 4 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Master Bed&nbsp;<input type="checkbox" class="categoryOpt" value="Master Bed"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Master Bed');?>">
                               <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" >
                 <img src="images/MasterBedroom.jpg" class="ft-item img-responsive" style="margin:auto;  max-width: 100%; width: auto; height: auto;">               
                  </div></div>
                 <br><br><BR>              </div>

               

              <!-- Item 5 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Kid's Bedroom &nbsp;<input type="checkbox" class="categoryOpt" value=" Kid's Bedroom"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode(" Kid's Bedroom");?>">
                               <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" >
                 <img src="images/bedroom.jpg" class="ft-item img-responsive" style="margin:auto;  max-width: 100%; width: auto; height: auto;">               
                  </div></div>
              </div>
              <!-- Item 6 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Worship Space&nbsp;<input type="checkbox" class="categoryOpt" value="Worship Space"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Worship Space');?>">
                <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" >
                 <img src="images/worship.jpg" class="ft-item img-responsive" style="margin:auto;  max-width: 100%; width: auto; height: auto;">               
                  </div></div>
              </div>
              <!-- Item 7 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Guest Room&nbsp;<input type="checkbox" class="categoryOpt" value="Guest Room"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Guest Room');?>">
                             <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" >
                 <img src="images/guest.jpg" class="ft-item img-responsive" style="margin:auto;  max-width: 100%; width: auto; height: auto;">               
                  </div></div>
              </div>
              <!-- Item 8 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Toilet&nbsp;<input type="checkbox" class="categoryOpt" value="Toilet"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Toilet');?>">
                               <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" >
                 <img src="images/toilet.jpg" class="ft-item img-responsive" style="margin:auto;  max-width: 100%; width: auto; height: auto;">               
                  </div></div>
              </div>
               <div class="col-xs-12">
                <br>
                <button class="btn-ghost" type="submit" style="margin-left: 45%">NEXT</button>
              </div>
              <div class="col-xs-12">
                <br>
              </div>
              <input type="hidden" value="Living" name="categoryOption">
              <input type="hidden" value="<?php echo $categoryId;?>" name="categoryId">
              <input type="hidden" value="<?php echo $constTypeId;?>" name="constTypeId">
</form>
