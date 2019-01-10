<?php

/**
 * Created by PhpStorm.
 * User: l1f16bscs0017
 * Date: 1/10/2019
 * Time: 5:47 PM
 */



function ProductByBrandCat($conn, $brand_id, $cat_id)
{
    $query = "SELECT * FROM products WHERE pro_cat = '$cat_id' AND pro_brand = '$brand_id'";
    $rows = mysqli_query($conn, $query);
    return $rows;
}

    function CategoryName($conn, $id)
        {
            $query = "SELECT cat_title FROM categories WHERE cat_id = '$id'";
            $rows = mysqli_query($conn, $query);
            return mysqli_fetch_assoc($rows)['cat_title'];
        }
            function Brand($conn){
        $query = "SELECT * FROM brands";
        $rows = mysqli_query($conn, $query);
        return $rows;
    }

function ProductsByCat($conn, $cat_id)
{
    $query = "SELECT * FROM products WHERE pro_cat = '$cat_id'";
    $rows = mysqli_query($conn, $query);
    return $rows;
}


function Category($conn){
    $query = "SELECT * FROM category";
    $query = "SELECT * FROM categories";
    $rows = mysqli_query($conn, $query);
    return $rows;
}


	function BrandName($conn, $id)
    {
        $query = "SELECT brand_title FROM brands WHERE brand_id = '$id'";
        $rows = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($rows)['brand_title'];
    }


	function AllProducts($conn)
    {
        $query = "SELECT * FROM products";
        $rows = mysqli_query($conn, $query);
        return $rows;
    }
	function ProductsByBrand($conn, $brand_id)
    {
        $query = "SELECT * FROM products WHERE pro_brand = '$brand_id'";
        $rows = mysqli_query($conn, $query);
        return $rows;
    }
