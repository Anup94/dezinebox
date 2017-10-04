<style type="text/css">
.gray-bg {
  background-color: #FFF !important;
}
.divSeparator {
  display: none;
}
</style>
<form action="validate.php?task=submit_architecture_enquiry" method="post" name="archEnqForm" enctype="multipart/form-data">
  
            <div class="row">
              <div class="col-md-offset-3 col-md-6 col-lg-5">
             <div class="form-group">
                  <label for="file-form">Name</label>
                      <input type="name" class="form-control" name="fname" placeholder="Enter your name" required>    
        
                </div>  
                 <div class="form-group">
                  <label for="file-form">Email</label>
                      <input type="name" class="form-control" name="femail" placeholder="Enter your email address" required>    
        
                </div>  
                 <div class="form-group">
                  <label for="file-form">Mobile Number</label>
                      <input type="name" class="form-control" name="fmobile" placeholder="Enter your Mobile number" required>    
        
                </div>  
        
                <div class="form-group">
                <label for="inpt-name-forms">Site Address</label>
                  <input type="text" class="form-control" placeholder="Input your site full address" required name="siteLocation" >                  
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
                <label for="inpt-name-forms">Permissible Built-up Area (Sq-feet)</label>
                  <input type="number" class="form-control" name="plotArea" required id="inpt-name-forms" min="0" >                  
                </div>
                <div class="form-group">
                 <label for="select-form">Budget</label>
                  <select class="form-control" id="select-form" name="budget" required="">
                    <option>Rs. 5 Lakh-10 Lakh</option>
                    <option>Rs. 10 Lakh-20 Lakh</option>
                    <option>Rs. 20 Lakh-40 Lakh</option>
                    <option>Rs. 40 Lakh-60 Lakh</option>
                    <option>Rs. 60 Lakh AND ABOVE</option>
                  </select>
                  
                </div>
                 <div class="form-group">
                  <label for="file-form">File input (max 5 MB  - prefered zip file)</label>
                  <input class="form-control" name="file" type="file" id="file-form" accept=".jpg , .TIF , .jpeg , .png , .pdf , .cad, .zip" >
        
                </div>    
                <div class="form-group">
                   <label for="select-form">Share Drive Link</label>
                  <input type="url" name="driveLink" class="form-control" id="inpt-name-forms" value="http://"  placeholder="Share your drive link with public access">                 
                </div>
                <div class="form-group" >
                <label for="txt-forms">Any Specific Details (max 1000 characters)</label>
                  <textarea class="form-control" name="details" required  rows="3" placeholder="Cultural Influence , Specific Style , Material & texture preference " maxlength="500"></textarea>
                  
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
"requirement","categoryId","constTypeId","categoryOption","subCategoryOption","driveLink");
              foreach ($array as $key) {
                if(isset($_GET[$key]))
               echo '<input type="hidden" name="'.$key.'" value="'.$_GET[$key].'"/>';
              }
              ?>

            </div><!-- / .row -->
          </form>