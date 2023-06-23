<?php
include('shead.php');
include('dbconnect.php');

?>

<div id="sticky_header"></div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="site_wrapper bg_white"> 
  <section id="home" class="section_scroll welcome_area" data-scroll-index="0"> 
          <div class="bg_overlay bg_image page_cover" style="background-image:url('image/price.jpg')"></div>
          
            <div class="home_wrapper_info"> 
              <div class="container"> <div class="row justify-content-center"> 
                <div class="col-lg-12">
 <form action="" method="GET">


<div class="main">
    <h1 style="color:white">....My Prices....</h1>


 <table border='2' style="color:white" >
                    <tr>
                        <td>Category</td>
                        <td>Company</td>
                        <td>Model</td>
                        <td>Price</td>
                        <td>Link</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
<?php
session_start();
 $uname=$_SESSION['email']; 
                  $q="SELECT * fROM price where email='$uname'";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
                      $id=$r['p_id'];
                      $category=$r['p_category'];
                      $company=$r['p_company'];
                      $model=$r['p_model'];
                      $price=$r['price'];
                      $link=$r['link'];
                     
?>
                    <tr>
                      
                        <td><?php echo $category; ?></td>
                        <td><?php echo $company; ?></td>
                        <td><?php echo $model; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $link; ?></td>
                        
                      
                      <td>
                        <a href="a_edit.php?id=<?php echo $id ?>">Edit</a></td>
                      <td>
                        <a href="sdelete.php?id=<?php echo $id ?>">Delete</button></a></td>
                      </tr>
                     
                  
<?php
}
?>
</table>
</div>
</form></div></div></div></div></section></div>

