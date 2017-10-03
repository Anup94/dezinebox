<style type="text/css">
.divSeparator {
  display: none;
}
.gray-bg {
  background-color: #FFF !important;
}
</style>
<form action="validate.php?task=submit_interior_enquiry" name="interiorEnqForm" method="post" enctype="multipart/form-data">

            


                     
            
            <div class="row">
            <div class="col-md-offset-3 col-md-6 col-lg-5">

            	 <div class="form-group">
                  <label for="file-form">Name</label>
                      <input type="name" class="form-control" name="fname" placeholder="Enter your name" required>    
        
                </div>  
                 <div class="form-group">
                  <label for="file-form">Email</label>
                      <input type="name" class="form-control" name="email" placeholder="Enter your email address" required>    
        
                </div>  
                 <div class="form-group">
                  <label for="file-form">Mobile Number</label>
                      <input type="name" class="form-control" name="mobile" placeholder="Enter your Mobile number" required>    
        
                </div>  
              <div class="form-group">
                  <label for="file-form">Site Address</label>
                      <input type="name" class="form-control" name="siteLocation" placeholder="Input your site full address" required>    
        
                </div>  
            
               <!-- <div class="form-group" style="font-size: 1.3em;">
                <label for="txt-forms">Tell Us more</label>
                  <textarea class="form-control" name="moreDetails" id="txt-forms" rows="3" placeholder="City , Country" maxlength="500" required></textarea>
                  
                </div>  --> 

                 <div class="form-group">
                 <label for="select-form">Area (Sq-feet)</label>
                  <select class="form-control" name="selectedArea" required>
                    <option>0-250</option>
                    <option>250-500</option>
                    <option>500-1000</option>
                    <option>1000-1500</option>
                    <option>1500-2000</option>
                    <option>2000+</option>
                  </select>
                  
                </div>

                 <div class="form-group">
                 <label for="select-form">Budget</label>
                  <select class="form-control" name="budget" required>
                     <option>0 - Rs 50,000</option>
                    <option>Rs.50,000-Rs.1 Lakh</option>
                    <option>Rs. 1 Lakh-Rs. 5 Lakh</option>
                    <option>Rs. 5 Lakh-10 Lakh</option>
                    <option>Rs. 10 Lakh-15 Lakh</option>
                    <option>Rs. 15 Lakh-25 Lakh</option>
                    <option>Rs. 25 Lakh AND ABOVE</option>
                  </select>
                  
                </div>
                                     
                <!-- File Input -->
               <div class="form-group">
                  <label for="file-form">File input (max 5 MB  - prefered zip file)</label>
                  <input class="form-control" name="file" type="file" id="file-form" accept=".jpg , .TIF , .jpeg , .png , .pdf , .cad, .zip">
        
                </div>    
               

                 <div class="form-group">
               
                   <label for="select-form">Share Drive Link</label>
                  <input type="url" class="form-control" name="driveLink" value="http://" placeholder="Share your drive link with public access">                  
                </div>
                <div class="form-group">
                <label for="inpt-name-forms">Any Specific Details (max 1000 characters)</label>
                 <textarea class="form-control" name="specificDetails" id="txt-forms" rows="3" placeholder="Colors , Fabrics , Textures , Patterns  preferences . " maxlength="500" required></textarea>               
                </div>

                
                <button type="submit" class="btn-ghost">NEXT</button>    
              </div><!-- / .col-md-4 -->

                
            </div>

<br>
   
             <?php 
              $array=array("categoryId","constTypeId","categoryOption","subCategoryOption");
              foreach ($array as $key) {

               echo '<input type="hidden" name="'.$key.'" value="'.$_GET[$key].'"/>';
              }
              ?>
              
          </form>