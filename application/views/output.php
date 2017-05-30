<?php
echo "Search results:";
	if(!empty($booktable ))  
 { 
    
      $output = '';
      $outputdata = '';  
      $outputtail ='';

      $output .= '<div class="table-responsive">
                   <table class="table table-bordered">
	                <thead>
                          <tr>
                              <th>File name</th>
                              <th>Description</th>
                              <th>Category</th>
 		          </tr>
				   
                   </thead>
                   <tbody>
                   ';
                  
      foreach ($booktable as $objects)    
	   {   
           $outputdata .= ' 
                
                    <tr> 
		            <td ><a href="file:///C:/xampp/htdocs/updocs/public/'.$objects->filename.'" target="_blank">'.$objects->title.'</a></td>
                <td >'.$objects->description.'</td>
                <td >'.$objects->name.'</td>
                    </tr> 
                
           ';
        //  echo $outputdata; 
                
          }  

         $outputtail .= ' 
                         </tbody>
                         </table>
                         </div>';
         
         echo $output; 
         echo $outputdata; 
         echo $outputtail; 
 }  
 
 else  
 {  
      echo 'No files found';  
 } 
 echo "<br><br>";