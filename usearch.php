<?php
include('uhead.php');
include('dbconnect.php');
?>
<html>
<head>
  <title>Search</title>
  <style>
/* CSS styles */
.search-container {
  position: relative;
  display: inline-block;
}

input[type="text"] {
  padding: 10px 20px;
  border-radius: 30px;
  border: 2px solid #ccc;
  font-family: 'FontAwesome';
}

input[type="text"]::placeholder {
  font-family: 'FontAwesome';
}

button[type="submit"] {
  position: absolute;
  right: 0;
  top: 0;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 30px;
  cursor: pointer;
}
button[type="submit"]::before {
  content: "\f002";
  font-family: 'FontAwesome';
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Poppins', sans-serif;
    clear: both;
    line-height: 1.2em;
    color: #41d9e2;
}
  </style>
</head>
<div id="sticky_header"></div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="site_wrapper bg_white"> 
  <section id="home" class="section_scroll welcome_area" data-scroll-index="0"> 
          <div class="bg_overlay bg_image page_cover" style="background-image:url('image/price.jpg')"></div>
            
            <div class="home_wrapper_info"> 
              <div class="container"> <div class="row justify-content-center"> 
                <div class="col-lg-12">
<form method="get" action="">
    <div class="search-container">
    <input type="text" name="place" id="search" placeholder=" Company" required>
    <input type="text" name="search" id="search" placeholder=" Model" required>
    <button type="submit">
      <span class="visually-hidden"></span>
    </button>
  </div>
<?php
if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $place = $_GET['place'];
  $sql="select * from price where p_company='$place' and p_model='$search' order by price";
                  $m=mysql_query($sql,$conn);
                           
                  while($r=mysql_fetch_array($m))
                    {
                  $platform=$r['platform'];
                  $category=$r['p_category'];
                  $company=$r['p_company'];
                  $model=$r['p_model'];
                  $price=$r['price'];
                  $link=$r['link'];
                  ?>
                  <br>
<!-- <div class="col-md-6"> -->
                <!-- <div class="product-item"> -->
                 <h3> <?php echo $r['platform']; echo("<br>");?></h3>
                  <!-- <a href="car-details.php?id=<?php echo $key?>"> -->
                    <img src="<?php echo $r['photo']?>" alt="" height="200 px" width="200 px"></a>
                  <div class="down-content">
                    <!-- <a href="car-details.php"><h4><?php echo $r['quantity']?> -->
                     <h3> <?php echo $r['p_company']?><?php echo $r['p_model']?>
                      <?php echo $r['p_category']?> <br> <?php echo $r['price']?><br>
                      <a href="../../www.google.com/<?php echo $r['link']?>"> <?php echo $r['link']?></a></h3>
                      <!-- <h4> -->
                      <!-- <a href="details.php?id=<?php echo $username ?>"> <?php echo 'More Photos'?></a></h4> -->
                    <!-- <h6><small><del> </del></small>  <?php echo $r['price']?></h6> -->

                    <br>
                   



                  <?php
                } 
}
?>


