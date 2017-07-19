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
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url('images/living.jpg'); max-width: 100%; width: auto; height: auto;">
                  <br><br><br><br><br><br>
                  
                 
              
                </div></div>
              </div>
              <!-- Item 2 -->
             <div class="col-lg-3 col-md-6 mb-sm-50"><h4><span>Dining&nbsp;<input type="checkbox" class="categoryOpt" value="Dining"/></span></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Dining');?>">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url('images/dining1.jpg'); max-width: 100%; width: auto; height: auto;">
                  <br><br><br><br><br><br>
                  
                 
              
                </div></div>
              </div>
              <!-- Item 3 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4><span>Kitchen&nbsp;<input type="checkbox" class="categoryOpt" value="Kitchen"/></span></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Kitchen');?>">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url('images/kitchen.jpg'); max-width: 100%; width: auto; height: auto;">
                  <br><br><br><br><br><br>
                  
                 
              
                </div></div>
              </div>
              <!-- Item 4 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Master Bed&nbsp;<input type="checkbox" class="categoryOpt" value="Master Bed"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Master Bed');?>">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url('images/MasterBedroom.jpg'); max-width: 100%; width: auto; height: auto;">
                  <br><br><br><br><br><br>
                  
                 
              
                </div></div>
                 <br><br><BR>              </div>

               

              <!-- Item 5 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Kid's Bedroom &nbsp;<input type="checkbox" class="categoryOpt" value=" Kid's Bedroom"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode(" Kid's Bedroom");?>">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url('images/bedroom.jpg'); max-width: 100%; width: auto; height: auto;">
                  <br><br><br><br><br><br>
                  
                 
              
                </div></div>
              </div>
              <!-- Item 6 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Worship Space&nbsp;<input type="checkbox" class="categoryOpt" value="Worship Space"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Worship Space');?>">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url('images/worship.jpg'); max-width: 100%; width: auto; height: auto;">
                  <br><br><br><br><br><br>
                  
                 
              
                </div></div>
              </div>
              <!-- Item 7 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Guest Room&nbsp;<input type="checkbox" class="categoryOpt" value="Guest Room"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Guest Room');?>">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url('images/guest.jpg'); max-width: 100%; width: auto; height: auto;">
                  <br><br><br><br><br><br>
                  
                 
              
                </div></div>
              </div>
              <!-- Item 8 -->
              <div class="col-lg-3 col-md-6 mb-sm-50"><h4>Toilet&nbsp;<input type="checkbox" class="categoryOpt" value="Toilet"/></h4><br/><div href="get-your-box.php?categoryId=<?php echo $categoryId;?>&constTypeId=<?php echo $constTypeId;?>&categoryOpt=<?php echo urlencode('Toilet');?>">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="background-image: url('images/toilet.jpg'); max-width: 100%; width: auto; height: auto;">
                  <br><br><br><br><br><br>
                  
                 
              
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
