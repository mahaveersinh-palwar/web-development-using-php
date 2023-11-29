<?php
        $p_id = $_POST['pro_id'];
        $p_name = $_POST['pro_name'];
        $p_description = $_POST['pro_description'];
        $p_category = $_POST['pro_category'];
        $p_price = $_POST['pro_price'];
        $p_sku = $_POST['Pro_sku'];
        $p_barcode = $_POST['Pro_barcode'];
        $p_weight = $_POST['pro_weight'];
        $p_dimension = $_POST['pro_dimensions'];
        $p_quantity = $_POST['pro_quantity'];
        $p_variants = $_POST['pro_variants'];
        $p_shipping_information = $_POST['pro_shipping'];
        $p_seo_information = $_POST['pro_seo'];
        $p_brand = $_POST['pro_brand'];
        $p_features = $_POST['pro_features'];
        $p_benefits = $_POST['pro_benefits'];
        $p_related = $_POST['pro_related'];
        $p_review = $_POST['pro_review'];
        $p_createdat = $_POST['pro_createdat'];
        $p_img = $_FILES["pro_img"]["name"];
        $tempname = $_FILES["pro_img"]["tmp_name"];
        $folder = "./images/" . $p_img;
        move_uploaded_file($tempname,$folder);


        $connection = mysqli_connect("localhost","root","","15618223075");

        $insert = "INSERT INTO `add_product`(`product_name`, `product_description`, `product_category`, `product_price`, `product_sku`, `product_barcode`, `product_weight`, `product_dimensions`, `product_quantity`, `product_variants`, `shipping_info`, `seo_info`, `product_brand`, `product_features`, `product_benefits`, `related_products`, `product_reviews`, `created_at`, `image_filenames`) 
        VALUES ('$p_name','$p_description','$p_category','$p_price','$p_sku','$p_barcode','$p_weight','$p_dimension',' $p_quantity',' $p_variants',' $p_shipping_information','$p_seo_information ','$p_brand ','$p_features','$p_benefits','$p_related','$p_review','$p_createdat','$folder')";

        $execute = mysqli_query($connection,$insert);

        if($execute == TRUE)
         {
           echo "<script>alert('Data Insert Successfully');</script>";
           //echo "<script>window.location='../client/data_display.php'</script>";
         }  
        else
         {
           echo "<script>alert('Failed To Insert Data');</script>";
           //echo "<script>window.location='client/registration_design.php.php'</script>";
         }  
 ?> 