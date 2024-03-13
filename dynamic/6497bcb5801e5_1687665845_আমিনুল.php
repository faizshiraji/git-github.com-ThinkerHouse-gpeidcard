<!DOCTYPE html>
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
        /*height: 100%;*/
        /*width: 100%;*/
    }

    .custom_button, .fb-share-button {
        width: 100%;
        margin-bottom: 5px;
        /*margin-left: -15px;*/
        margin-top: 10px;
    }


    /* Extra Extra small devices (phones, 299px and down) */
    @media only screen and (max-width: 299px) {

        .dynamic-info-inner {
            position: absolute;
            top: 45%;
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

        .dynamic-name-address span {
            background-color: #fff;
            padding: 1px;
            font-size: 3px;
            font-weight: 500;
        }

    }


    /* Extra Extra small devices (phones, 300px and up) */
    @media only screen and (min-width: 300px) {

        .dynamic-info-inner {
            position: absolute;
            top: 46%;
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
            min-width: 100px;
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
            font-weight: 500;
        }

    }

    /* Extra Extra small devices (phones, 400px and up) */
    @media only screen and (min-width: 400px) {

        .dynamic-info-inner {
            position: absolute;
            top: 45%;
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

    }

    /* Extra Extra small devices (phones, 500px and up) */
    @media only screen and (min-width: 500px) {

        .dynamic-info-inner {
            position: absolute;
            top: 45%;
            left: 14%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            height: 160px;
            width: 160px;
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

    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {

        .dynamic-info-inner {
            position: absolute;
            top: 45%;
            left: 14%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            height: 220px;
            width: 220px;
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

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
      
        .dynamic-info-inner {
            position: absolute;
            top: 43%;
            left: 18%;
            transform: translateY(-45%);
            z-index: 1;
        }

        .dynamic-client-info {
            height: 230px;
            width: 230px;
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

    } 

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
      
        .dynamic-info-inner {
            position: absolute;
            top: 47%;
            left: 13%;
            transform: translateY(-50%);
            z-index: 1;
        }

        .dynamic-client-info {
            height: 230px;
            width: 230px;
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
            height: 240px;
            width: 240px;
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
                        <img src="../images/userImages/6497bcb5801e5_1687665845_আমিনুল.jpeg" alt="" class="img img-responsive">
                    </div>
                    <div class="dynamic-name-address">
                        <span>আমিনুল </span>
                    </div>
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

</html>