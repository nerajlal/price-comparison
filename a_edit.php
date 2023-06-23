<?php
	include('a_header.php');
	include('dbconnect.php');

?>

<div id="sticky_header"></div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="site_wrapper bg_white"> 
  <section id="home" class="section_scroll welcome_area" data-scroll-index="0"> 
  	<div class="bg_overlay bg_image page_cover" style="background-image:url('image/price.jpg')"></div>
            <div id="particles-js"></div>
            <div class="home_wrapper_info"> 
              <div class="container"> <div class="row justify-content-center"> 
                <div class="col-lg-12">
                 <div class="home_text_block text-center">


<br><br><br><br><br><br><br><br>
<form method="POST">
 <table >
               
<?php
$id=$_GET['id'];
//$id=1;

                  $q="SELECT * fROM price where p_id='$id'";
                  $m=mysql_query($q,$conn);
                  while($r=mysql_fetch_assoc($m))
                    {
                      $id=$r['p_id'];
                      $category=$r['p_category'];
                      $company=$r['p_company'];
                      $model=$r['p_model'];
                      $price=$r['price'];
                     
?>
                    <tr>
                      
                       <td>Category</td> <td><input type="text" name="category" placeholder="<?php echo $category; ?>" required></td></tr><tr>
                       <td>Company</td> <td><input type="text" name="company" placeholder="<?php echo $company; ?>" required></td></tr><tr>
                        <td>Model</td> <td><input type="text" name="model" placeholder="<?php echo $model; ?>" required></td></tr><tr>
                        <td>Price</td> <td><input type="text" name="price" placeholder="<?php echo $price; ?>"  pattern="(?=.*[0-9]).{1,10}" title="Numbers Only" required></td></tr><tr>
                      </td></tr>
                      </table>

                        <br>
                         <input type="submit" name="submit" value="UPDATE"></form>
                  
<?php
}
?>

<?php
 if(isset($_POST['submit']))
                             {
                                
                                 $sql="update price set p_category='$_POST[category]',p_company='$_POST[company]',p_model='$_POST[model]',price='$_POST[price]' where p_id=$id";

                                 //echo"$sql";
                                 $result=mysql_query($sql,$conn);
                                if($result)
                                {
                                    echo "<script>alert('Details Updated!');location.href='a_price.php';</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Can't Update Details!');location.href='a_price.php';</script>";
                                }
                             }  
                              
                        ?>