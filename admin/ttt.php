 <table class="table table-bordered" id="vendorsTable">
	                    <thead>
	                        <tr class="text-uppercase text-nowrap">
	                        <th>Action</th>
	                        	<th>Date</th>	                     
	                        	<th>Order Id</th>
	                            <th>Name</th>
	                            <th>Email</th>
	                            <th>Mobile</th>
	                            <?php foreach ($formEle as $key => $value) {
	                            	echo "<th>".$value."</th>";
	                            }
	                            ?>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php foreach ($users as $row) {
	                    		if($row['Paid'] == "YES"){
								?>
								
	                    		<tr style="background-color:#7fdd7f;">
	                    		<td>	<a href="javascript:delpost('<?php echo $row['userId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
	                    		     <td><?php echo $row['entryTime'];?></td>
	                    			<td><?php echo $row['enqId'];?></td>
	                    			<td><?php echo $row['name'];?></td>
	                    			<td><?php echo $row['email'];?></td>
	                    			<td><?php echo $row['mobile'];?></td>
	                    			 <?php foreach ($formEle as $key => $value) {
										 if($value == "Payment Doc"){
											 echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
											 
										 }else if($value == "File"){
											if($row[$key]) echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
											else echo "<td>Not uploaded</td>";
										 }else if($value == "category"){
											  if($row[$key] == '1')echo "<td>Residential</td>";
											 if($row[$key] == '2')echo "<td>Commercial</td>";
											 if($row[$key] == '3')echo "<td>Hospitality</td>";
											 if($row[$key] == '4')echo "<td>Institutional</td>";
											 
										 }else{
		                            	echo "<td>".$row[$key]."</td>";
										 }
		                            }
		                            ?>
	                    		</tr>
								
								
	                    		<?php
								}else{
									?>
									
									
									<tr>
									<td><a href="javascript:delpost('<?php echo $row['enqId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
									<td><?php echo $row['entryTime'];?></td>
	                    			<td><?php echo $row['enqId'];?></td>
	                    			<td><?php echo $row['name'];?></td>
	                    			<td><?php echo $row['email'];?></td>
	                    			<td><?php echo $row['mobile'];?></td>
	                    			 <?php foreach ($formEle as $key => $value) {
										 if($value == "Payment Doc"){
											 if($row[$key]){
											 echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
											 }else{
												 echo "<td></td>";
												 
											 }
										 }else if($value == "File"){
											 
											if($row[$key]) echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
											else echo "<td>Not uploaded</td>";
										 }else if($value == "category"){
											  if($row[$key] == '1')echo "<td>Residential</td>";
											 if($row[$key] == '2')echo "<td>Commercial</td>";
											 if($row[$key] == '3')echo "<td>Hospitality</td>";
											 if($row[$key] == '4')echo "<td>Institutional</td>";
											 
										 }else{
		                            	echo "<td>".$row[$key]."</td>";
										 }
		                            }
		                            ?>
	                    		</tr>
								
									
									
									<?php
									
								}
	                    	}
	                    	?>
	                    </tbody>
	                </table> 