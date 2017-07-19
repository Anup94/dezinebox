<form action="get-your-box.php" method="get">

            <div class="row ws-m">
              <div class="col-md-offset-2 col-md-4">
                <!-- Name -->
                <div class="form-group">
                <label for="inpt-name-forms">Type of Project</label>
                  <input type="name" class="form-control" name="projectType" required >                  
                </div>
                <!-- Email -->
                <div class="form-group">
                     <label for="inpt-email-forms">Plot Area</label>
                  <input type="number" class="form-control" name="plotArea" required>
                </div>
                <!-- Password -->
                <div class="form-group">
                 <label for="inpt-email-forms">Site Location</label>
                 <input type="text" class="form-control" name="siteLocation" required>
                 
                </div>
              </div><!-- / .col-md-4 -->

              <div class="col-md-4">
                <!-- Textarea -->
                <div class="form-group">
                  <div class="form-group">
                   <label for="inpt-name-forms">FSI Available</label>
                  <input type="name" class="form-control" name="fsiAvailable" required> 
                </div>
                <!-- Email -->
                <div class="form-group">
                  <label for="inpt-email-forms">Zone if Any</label>
                  <input type="text" class="form-control" name="zone">
                </div>
                <!-- Password -->
                <div class="form-group">
                 <label for="inpt-pass-forms">Any Specific requirement</label>
                  <input type="text" class="form-control" name="requirement">
                 
                </div>
                </div> 
              </div><!-- / .col-md-4 -->
            </div><!-- / .row -->


            
            
            <div class="row">
              <div class="col-md-offset-2 col-md-4">
                <!-- Disabled Input -->
                
                <!-- File Input -->
                             
              </div><!-- / .col-md-4 -->
              
              <?php 
              $array=array("categoryId","constTypeId","categoryOption");
              foreach ($array as $key) {

               echo '<input type="hidden" name="'.$key.'" value="'.$_GET[$key].'"/>';
              }
              ?>
              <input type="hidden" name="completed" value="step1"/>
                <div class="col-md-4 mb-sm-30"><button class="btn-ghost">Submit</button></div>
            </div><!-- / .row -->
          </form>