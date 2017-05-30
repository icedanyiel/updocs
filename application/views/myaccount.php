
<h1>MyAccount</h1>
   <h2>Welcome <?php echo $email; ?>!</h2>
    
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th>ID</th>  
                     <th>File Name</th>
					 <th>Description</th>
                </tr> 
			
				
           <?php  
           if($fetch_data->num_rows() > 0)  
           {  
                foreach($fetch_data->result() as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->id; ?></td>  
                     <td><?php echo "<a href='"."file:///C:/xampp/htdocs/updocs/public/".$row->filename."'>".$row->title. "</a>"; ?></td>
					 <td><?php echo $row->description; ?></td>
					 <td><a href="MyAccount/delete_data" class="delete_data" id="<?php echo $row->id;?>">Delete</a></td>
                      
                </tr> 
				
				<?php       
                }  
           }  
           else  
           {  
           ?>  
                <tr>  
                     <td colspan="2">No Data Found</td>  
                </tr>  
           <?php  
           } 
	 		   
           ?>  
				
   <a href="MyAccount/logout" class="btn btn-default" >LogOut</a>
