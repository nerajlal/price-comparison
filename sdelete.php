<?php
$id=$_GET['id'];
include('dbconnect.php');
 $sql="delete From price where p_id=$id";

                                 //echo"$sql";
                                 $result=mysql_query($sql,$conn);
                                if($result)
                                {
                                    echo "<script>alert('PRODUCT DELETED!');location.href='sprice.php';</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Can't Delete Product!');location.href='sprice.php';</script>";
                                }
                                ?>