<form action="validate.php?task=submit_architecture_enquiry" method="post" name="archEnqForm" enctype="multipart/form-data">

            


                     
            
            <div class="row">
              <div class="col-md-offset-2 col-md-4">
            
               
                <!-- File Input -->
                <div class="form-group" style="font-size: 1.5em;">
                  <label for="file-form">File input</label>
                  <input class="form-control" name="images[]" type="file" accept=".jpg , .TIF , .jpeg , .png , .pdf , .cad">
        
                </div>    
                <div class="form-group">
               
                  <input class="form-control" name="images[]" type="file" accept=".jpg , .TIF , .jpeg , .png , .pdf , .cad">
         
                </div>    
                <div class="form-group">
               
                  <input class="form-control" name="images[]" type="file" accept=".jpg , .TIF , .jpeg , .png , .pdf , .cad">
         
                </div>  

                <div class="form-group">
                <label for="select-form">Area (Sq-feet)</label>
                  <select class="form-control" id="select-form" name="selectedArea" required>
                    <option>0-1000</option>
                    <option>1000-2000</option>
                    <option>2000-3000</option>
                    <option>3000-4000</option>
                    <option>4000-5000</option>
                    <option>5000+</option>
                  </select>
                  
                </div>

                 <div class="form-group">
                <label for="inpt-name-forms">Site Location</label>
                  <input type="text" class="form-control" id="inpt-name-forms" >                  
                </div>
                <div class="form-group" style="font-size: 1.3em;">
                <label for="txt-forms">Please mention any specific details if you have:</label>
                  <textarea class="form-control" name="details"  rows="3" placeholder="" maxlength="500"></textarea>
                  
                </div>  
                <button class="btn-ghost" type="submit">NEXT</button>             
              </div><!-- / .col-md-4 -->

             
            </div>


            <div class="row ws-m">
              

              <div class="col-md-12">
             
                <!-- <div class="form-group">
                <label for="txt-forms">Please mention any specific details if you have:</label>
                  <textarea class="form-control" name="textarea" id="txt-forms" rows="9" placeholder="Your Message"></textarea>
                  
                </div>  -->
              </div>
             
                  <?php 
              $array=$array=array("projectType",
"plotArea",
"siteLocation",
"fsiAvailable",
"zone",
"requirement","categoryId","constTypeId","categoryOption");
              foreach ($array as $key) {

               echo '<input type="hidden" name="'.$key.'" value="'.$_GET[$key].'"/>';
              }
              ?>

            </div><!-- / .row -->
          </form>