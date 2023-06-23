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


<center>
	<b><u><h1 style="color: white">ADD PRICE</h1></u></b><br><br>
<form method="POST"  enctype="multipart/form-data">
	<table>
		<tr>
			<td>Platform Name</td><td><input type="text" name="pname" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<!-- <tr>
			<td>Email</td><td><input type="email" name="mail" class="form-control"  style="margin-bottom: 8px;margin-left: 8px"></td>
		</tr> -->
		<tr>
			<td>Product Category</td><td><input type="text" name="category" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<!-- <tr>
			<td>Aadhar Number</td><td><input type="text" name="adno" class="form-control"  style="margin-bottom: 8px;margin-left: 8px"></td>
		</tr> -->
		<tr>
			<td>Company</td><td><input type="text" name="company" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Model</td><td><input type="text" name="model" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Price</td><td><input type="text" name="price" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" pattern="(?=.*[0-9]).{1,10}" title="Numbers Only" required></td>
		</tr>
		<tr>
			<td>Link</td><td><input type="text" name="link" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
       <td>Photo</td><td><input type="file" name="photo" required> </td>
     </tr>
     <tr><td>.</td></tr>
		<tr>
			<td></td><td><input type="submit" name="submit" value="submit" class="btn btn-success" style="padding: 10px 25px"></td>
		</tr>

	</table>
	
</form>
</center>
</div>
</div>
</div>
</div>
</div>
</section>


<?php

 $uname='admin@gmail.com'; 
if(isset($_POST['submit'])){
	 $target_dir = "pic/";
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        //echo "The file ". htmlspecialchars(basename( $_FILES["photo"]["name"])). " has been uploaded.";
   } else {
        echo "Sorry, there was an error uploading your file.";
    }
	$name=$_POST['pname'];
	//$mail=$_POST['mail'];
	$aadharno=$_POST['category'];
	$phno=$_POST['company'];
	$email=$_POST['model'];
	$price=$_POST['price'];
	$link=$_POST['link'];
	$q="INSERT into price(platform,email,p_category,p_company,p_model,price,link,photo) values('$name','$uname','$aadharno','$phno','$email','$price','$link','$target_file')";
	// echo $q;
	if(mysql_query($q,$conn))
	{
		
					echo "<script>alert('Price Added!');
							location.href='a_addprice.php';
					</script>";
	}
	else
	{
		echo "<script>alert('Can't Add Price!');
							location.href='a_addprice.php';
					</script>";
	}
	}





?>


