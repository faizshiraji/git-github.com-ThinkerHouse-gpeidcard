<?php 
error_reporting(0);
// ini_set ('display_errors', 1);  
// ini_set ('display_startup_errors', 1);  
// error_reporting (E_ALL);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GP Digital Eid Card</title>
    <!-- Project Asset -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="wrapper">

<!--         <div class="main-page">
            <img src="GP_EidCard_BG.jpg" alt="Background Image" class="img img-responsive">
        </div>
 -->
        <!-- Registration section -->
        <div class="registration-form">
            <div class="form">
                <!-- <div class="close-btn">Close</div> -->
                <div class="form-head">
                    <h3>Registration</h3>

                    <?php

                    if(isset($_POST['submit'])){

                        $name = $_POST["name"];
                        $imageTemp = $_FILES['file']['tmp_name'];

                        $sourceProperties = getimagesize($imageTemp);

                        $uploadImageType = $sourceProperties[2];
                        $sourceImageWidth = $sourceProperties[0];
                        $sourceImageHeight = $sourceProperties[1];

                        $resizeFileName = time();

                        $message = "";
                        $status = 0;

                        if(!empty($name) && !empty($imageTemp)){

                            $concatenatedName = strtolower(str_replace(' ', '', $name));

                            $uploadDir = 'images/userImages/';
                            $uploadFile = $uploadDir . basename($_FILES['file']['name']);
                            $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));

                            // Generate a unique image name
                            $imageName = uniqid() . '_' . $resizeFileName . '_' . $concatenatedName;
                            $imageFullName = $imageName . '.' . $imageFileType;
                            $uploadFile = $uploadDir . $imageFullName;

                            // Check if a file was uploaded
                            if ($_FILES['file']['tmp_name'] !== '') {
                                // Check if the file is an image
                                $check = getimagesize($_FILES['file']['tmp_name']);
                                if ($check !== false) {

                                    $allowedFormats = array('jpg', 'jpeg', 'png');
                                    $maxFileSize = 2 * 1024 * 1024; // 5 MB

                                    // if ($_FILES['file']['size'] <= $maxFileSize && in_array($imageFileType, $allowedFormats)) {
                                    if (in_array($imageFileType, $allowedFormats)) {

                                        // if ($sourceImageWidth == 200 && $sourceImageHeight == 200) {
                                            // Move the uploaded file to the specified directory
                                            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
                                                // echo 'File uploaded successfully.';
                                                $message = 'File uploaded successfully.';
                                                $status = 1;
                                            } else {
                                                // echo 'Error uploading the file.';
                                                $message = 'Error uploading the file.';
                                            }
                                        // } else {
                                        //     $message = 'Image height & width are not same';
                                        // }

                                    } else {
                                        // $message = 'Invalid file format or size exceeded.';
                                        $message = 'Invalid file format';
                                    }

                                } else {
                                    $message = 'Invalid image file.';
                                }
                            } else {
                                $message = 'No file was uploaded.';
                            }
                        }else{
                            if(empty($name)){
                                $message = "Please enter your full name";
                                $status = 0;
                            }else if(empty($imageTemp)){
                                $message = "Please choose your image";
                                $status = 0;
                            }else{
                                $message = "Please enter your name & choose your image";
                                $status = 0;
                            }
                        }

                        
                        if($status==1){
                            echo "<b style='color: green'>".$message."</b>";

                            $filename = 'dynamic/'.$imageName.'.php'; // The name of the file to create
                            $content = '<!DOCTYPE html>
<html lang="en">
<head>
  <title>GP Dynamic Eid Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Meta tage here -->
  <meta property="og:url" content="https://test.thinkerhouse.co/share.html" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="About ChatGPT" />
  <meta property="og:description" content="ChatGPT is an AI language model developed by OpenAI" />
  <meta property="og:image" content="https://test.thinkerhouse.co/ChatGPT_logo.png" />

  <!-- Project Asset -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <!-- HTML TO JPG -->
  <script type="text/javascript" src="../assets/js/html2canvas.min.js"></script>
  <script type="text/javascript" src="../assets/js/html2canvas.esm.js"></script>
  <script type="text/javascript" src="../assets/js/html2canvas.js"></script>

  <style type="text/css">
     .dynamic-wrapper{
        max-height: 100vh;
        max-width: 100vw;
        position: relative;
    }

    .dynamic-main-page {
        max-height: 100vh;
        max-width: 100vw;
        /*position: relative;*/
    }

    .dynamic-main-page img{
        height: 100vh;
        width: 100%;
        display: block;
    }

    .dynamic-image {
        height: 100%;
        width: 100%;
        /*display: flex;*/
        align-items: flex-end;
        /*justify-content: center;*/
    }

    .dynamic-image img {
/*        height: 100%;
        width: 100%;*/
    }

    .custom_button, .fb-share-button {
        width: 100%;
        margin-bottom: 10px;
        /*margin-left: -15px;*/
        margin-top: 10px;
    }


    /* Extra Extra small devices (phones, 300px and down) */
    @media only screen and (max-width: 300px) {

        .dynamic-info-inner {
            position: absolute;
            top: 47%;
            left: 16%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            height: 70px;
            width: 70px;
            background-color: #e3c014;
            border-radius: 50%;
            border: 5px solid #fff;
            text-align: center;
            overflow: hidden;
        }

        .dynamic-name-address span {
            background-color: #fff;
            padding: 1px;
            font-size: 3px;
            font-weight: 500;
        }

        .dynamic-name-address {
            min-width: 100px;
            flex-direction: column;
            color: #5555ee;
            position: absolute;
            left: 50%;
            top: 62%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .title_button {
            /* min-width: 60px; */
            margin-top: -30px;
            margin-left: -20px;
            line-height: 1px;
            color: #5555ee;
            background-color: #ffffff;
        }

        .title_button span {
            font-size: 5px;
        }

    }


    /* Extra Extra small devices (phones, 301px and up) */
    @media only screen and (min-width: 301px) {

        .dynamic-info-inner {
            position: absolute;
            top: 47%;
            left: 14%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            height: 80px;
            width: 80px;
            background-color: #e3c014;
            border-radius: 50%;
            border: 5px solid #fff;
            text-align: center;
            overflow: hidden;
        }

        .dynamic-name-address {
            /*min-width: 100px;*/
            flex-direction: column;
            color: #5555ee;
            position: absolute;
            left: 50%;
            top: 67%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .dynamic-name-address span {
            background-color: #fff;
            padding: 1px;
            font-size: 3px;
            /*font-weight: 500;*/
        }

        .title_button {
            /* min-width: 90px; */
            margin-top: -30px;
            margin-left: -20px;
            line-height: 2px;
            color: #5555ee;
            background-color: #ffffff;
        }

        .title_button span {
            font-size: 6px;
        }

    }

    /* Extra Extra small devices (phones, 401px and up) */
    @media only screen and (min-width: 401px) {

        .dynamic-info-inner {
            position: absolute;
            top: 47%;
            left: 14%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            height: 130px;
            width: 130px;
            background-color: #e3c014;
            border-radius: 50%;
            border: 5px solid #fff;
            text-align: center;
            overflow: hidden;
        }

        .dynamic-name-address {
            min-width: 100px;
            flex-direction: column;
            color: #5555ee;
            position: absolute;
            left: 50%;
            top: 75%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .dynamic-name-address span {
            background-color: #fff;
            padding: 1px;
            font-size: 6px;
            font-weight: 500;
        }


        .title_button {
            /* min-width: 140px; */
            /* margin-top: -10px; */
            line-height: 7px;
            color: #5555ee;
            background-color: #ffffff;
        }

        .title_button span {
            font-size: 9px;
        }

    }

    /* Extra Extra small devices (phones, 501px and up) */
    @media only screen and (min-width: 501px) {

        .dynamic-info-inner {
            position: absolute;
            top: 47%;
            left: 14%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            min-height: 160px;
            min-width: 160px;
            background-color: #e3c014;
            border-radius: 50%;
            border: 5px solid #fff;
            text-align: center;
            overflow: hidden;
        }

        .dynamic-name-address {
            min-width: 150px;
            flex-direction: column;
            color: #5555ee;
            position: absolute;
            left: 50%;
            top: 78%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .dynamic-name-address span {
            background-color: #fff;
            padding: 2px;
            font-size: 7px;
            font-weight: 500;
        }


        .title_button {
            min-width: 150px;
            /*margin-top: -30px;*/
            margin-left: -10px;
            color: #5555ee;
            background-color: #ffffff;
            width: 100%;
        }

        .title_button span {
            /*font-size: 11px;*/
        }

    }

    /* Small devices (portrait tablets and large phones, 601px and up) */
    @media only screen and (min-width: 601px) {

        .dynamic-info-inner {
            position: absolute;
            top: 45%;
            left: 14%;
            transform: translateY(-42%);
            z-index: 1;
        }

        .dynamic-client-info {
            min-height: 220px;
            min-width: 220px;
            background-color: #e3c014;
            border-radius: 50%;
            border: 5px solid #fff;
            text-align: center;
            overflow: hidden;
        }

        .dynamic-name-address {
            min-width: 150px;
            flex-direction: column;
            color: #5555ee;
            position: absolute;
            left: 50%;
            top: 80%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .dynamic-name-address span {
            background-color: #fff;
            padding: 5px;
            font-size: 10px;
            font-weight: 500;
        }


        .title_button {
            /*min-width: 200px;*/
            margin-top: -45px;
            line-height: 10px;
            color: #5555ee;
            background-color: #ffffff;
            width: 100%;
        }

        .title_button span {
            font-size: 10px;
        }

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
      
        .dynamic-info-inner {
            position: absolute;
            top: 45%;
            left: 18%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            min-height: 230px;
            min-width: 230px;
            background-color: #e3c014;
            border-radius: 50%;
            border: 5px solid #fff;
            text-align: center;
            overflow: hidden;
        }

        .dynamic-name-address {
            min-width: 150px;
            flex-direction: column;
            color: #5555ee;
            position: absolute;
            left: 50%;
            top: 80%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .dynamic-name-address span {
            background-color: #fff;
            padding: 5px;
            font-size: 11px;
            font-weight: 500;
        }

        .title_button {
            /*min-width: 200px;*/
            /*margin-top: -30px;*/
            line-height: 11px;
            color: #5555ee;
            background-color: #ffffff;
            width: 100%;
        }

        .title_button span {
            font-size: 12px;
        }

    } 

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
      
        .dynamic-info-inner {
            position: absolute;
            top: 47%;
            left: 13%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            min-height: 230px;
            min-width: 230px;
            background-color: #e3c014;
            border-radius: 50%;
            border: 5px solid #fff;
            text-align: center;
            overflow: hidden;
        }

        .dynamic-name-address {
            min-width: 150px;
            flex-direction: column;
            color: #5555ee;
            position: absolute;
            left: 50%;
            top: 80%;
            transform: translateX(-50%);
            bottom: 35px;
        }

        .dynamic-name-address span {
            background-color: #fff;
            padding: 5px;
            font-size: 11px;
            font-weight: 500;
        }

        .title_button {
            margin-top: -45px;
            line-height: 12px;
            color: #5555ee;
            background-color: #ffffff;
            width: 100%;
        }

        .title_button span {
            font-size: 14px;
        }


    } 

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
      
        .dynamic-info-inner {
            position: absolute;
            /*top: 47%;*/
            left: 17%;
            /*transform: translateY(-50%);*/
            z-index: 1;
        }

        .dynamic-client-info {
            min-height: 240px;
            min-width: 240px;
            background-color: #e3c014;
            border-radius: 50%;
            border: 5px solid #fff;
            text-align: center;
            overflow: hidden;
        }

        .dynamic-name-address {
            min-width: 150px;
            flex-direction: column;
            color: #5555ee;
            position: absolute;
            left: 50%;
            /*top: 77%;*/
            transform: translateX(-50%);
            bottom: 35px;
        }

        .dynamic-name-address span {
            background-color: #fff;
            /*padding: 5px;*/
            font-size: 12px;
            font-weight: 500;
        }

        .title_button {
            /* min-width: 200px; */
            /*margin-top: -40px;*/
            line-height: 16px;
            color: #5555ee;
            background-color: #ffffff;
            width: 100%;
        }

        .title_button span {
            font-size: 16px;
        }

    }
  </style>

</head>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="padding-bottom: 10px;">
            <div class="col-md-4">
                <button type="button" class="btn btn-info custom_button" id="download">Download</button>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-info custom_button" onclick="copyURL()">Link</button>
            </div>
            <div class="col-md-4">
                    <a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]=https://eidcard.thinkerhouse.co/dynamic/dynamicNew.php" target="_blank" onclick="window.open(this.href,"targetWindow","toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250"); return false">
                    <button style="width:100%; margin-top:10px;" type="button" class="btn btn-info"><i class="fa fa-facebook fa-2"></i> Share on Facebook</button>
                </a>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">

            <div class="col-md-12" id="photo">
                
                <img src="../GP_EidCard_BG.jpg" alt="Background Image" class="img img-responsive">

                <div class="dynamic-info-inner">
                    <div class="dynamic-client-info">
                        <div class="dynamic-image">
                        <img src="../'.$uploadFile.'" alt="" class="img img-responsive">
                    </div>
                 </div>

                <div class="col-md-12">
                    <center><button type="button" class="btn title_button" style="border: none; cursor: pointer; background-color: none;"><span><b>'.$name.'</b></span></button></center>
                </div>
     
            </div>

        </div>

        <div id="fb-root"></div>
    </div>
</div>

<script type="text/javascript">
   
   jQuery(document).ready(function(){
       jQuery("#download").click(function(){
           screenshot();
       });
   });

   function screenshot(){
       html2canvas(document.getElementById("photo")).then(function(canvas){
          downloadImage(canvas.toDataURL(),"GP_EidCard.png");
       });
   }

   function downloadImage(uri, filename){
     var link = document.createElement("a");
     if(typeof link.download !== "string"){
        window.open(uri);
     }
     else{
         link.href = uri;
         link.download = filename;
         accountForFirefox(clickLink, link);
     }
   }

   function clickLink(link){
       link.click();
   }

   function accountForFirefox(click){
       var link = arguments[1];
       document.body.appendChild(link);
       click(link);
       document.body.removeChild(link);
   }

    function copyURL() {
        var url = window.location.href;
        navigator.clipboard.writeText(url)
        .then(function() {
            alert("Copied");
        })
        .catch(function(error) {
            console.error("Failed to copy:", error);
        });
    }

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, "script", "facebook-jssdk"));

</script>

</body>
</html>

</html>'; // The content of the file


                            // Create the file
                            $file = fopen($filename, 'w');

                            // Check if the file was successfully created
                            if ($file !== false) {
                                // Write the content to the file
                                fwrite($file, $content);

                                // Close the file
                                fclose($file);

                                // echo 'File created successfully.';
                                $location = "https://eidcard.thinkerhouse.co/" . $filename;
                                // $location = "https://localhost/Task/gp-offer/" . $filename;
                                header('Location: ' . $location);
                                // $redirect = "<script>window.location.href = '$location';</script>";
                                // echo $redirect;
                                exit;
                            } else {
                                echo 'Error creating the file.';
                            }


                        }else{
                            echo "<b style='color: red'>".$message."</b>";
                        }

                    }
                ?>



                </div>

                <form action="" id="registration-form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >Full Name</label>
                        <input type="text" name="name" placeholder="Enter your full name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" id="file" name="file">
                        <small style="font-weight: bold;">You can only upload JPG, JPEG & PNG Photo!</small>
                        <!-- <small style="font-weight: bold;">Image Specification : Max Size - 2 MB, Height - 200px, Width - 200px</small> -->
                    </div>
                    <button type="submit" id="click" class="submit-btn" name="submit">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Project Asset -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- <script src="assets/js/main.js"></script> -->
</body>
</html>