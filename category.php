<?php
/**
 * Created by PhpStorm.
 * User: l1f16bscs0017
 * Date: 1/10/2019
 * Time: 5:26 PM
 */
	require "database.php";
	function getCategories()
    {
        global $conn;
        $categoryQuery = "select * from categories";
        $categoriesResult = mysqli_query($conn,$categoryQuery);
        while($row = mysqli_fetch_assoc($categoriesResult))
        {
            $id = $row['category_id'];
            $title = $row['categoty_name'];
            echo "<li><a class='nav-link'  href='#'>$title</a></li>";
        }
    }
	function getBrands()
    {
        global $conn;
        $brandsQuery = "select * from Brands";
        $brandsResult = mysqli_query($conn,$brandsQuery);
        while($row = mysqli_fetch_assoc($brandsResult))
        {
            $id = $row['Brand_id'];
            $title = $row['Brand_name'];
            echo "<li><a class='nav-link' href='#'>$title</a></li>";
        }
    }
?>