<h2>Documents</h2>
<style>
table, td, th {
    border: 0px solid black;
}

table {
    border-collapse: collapse;
    width: 70%;
}

th {
    text-align: left;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
           $("#search").keyup(function(){
               var str=  $("#search").val();
               if(str == "") {
                       $( "#txtHint" ).html("Search results will be listed here...<br><br>"); 
               }else {
                       $.get( "<?php echo base_url();?>home/ajaxsearch?id="+str, function( data ){
                           $( "#txtHint" ).html( data );  
                    });
               }
           });  
        });  
</script>

<div class="container">
    
 <!-- search box container starts  -->
 
    <div class="search">
        <div class="space"></div>
  <form action="" method="get">
    
      <div class="row">
       <div class="col-lg-10 col-lg-offset-1">
        <div class="input-group">
            
            <span class="input-group-addon" >Search</span>
  <input autocomplete="off" id="search"  type="text" class="form-control input-lg" placeholder="search file " >
   
        </div>
       </div>
      </div>   
  </form>
     </div>  
  <!-- search box container ends  -->
    
     <div id="txtHint" style="padding-top:2px;" >

     </div>
     
</div>
<script>
// above script codes... 
</script>



<div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th>ID</th>  
                     <th>File Name</th>     
                </tr> 
      
        
  <?php  
           if($fetch_data->num_rows() > 0)  
           {  
                foreach($fetch_data->result() as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->id; ?></td>  
                     <td><?php echo "<a href='"."file:///C:/xampp/htdocs/updocs/public/".$row->filename."'>".$row->filename. "</a>"; ?></td> 
                      
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
           </table>
           </div>