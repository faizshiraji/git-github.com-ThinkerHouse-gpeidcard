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

    .dynamic-info-inner {
        position: absolute;
        top: 45%;
        left: 12%;
        transform: translateY(-50%);
        z-index: 1;
    }

    .dynamic-client-info {
        height: 210px;
        width: 210px;
        background-color: #e3c014;
        border-radius: 50%;
        /*padding-top: 15px;*/
        border: 5px solid #fff;
        text-align: center;
        /*position: relative;*/
        overflow: hidden;
    }

    .dynamic-image {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .dynamic-image img {
        height: 100%;
        width: 100%;
    }

    .dynamic-name-address {
        min-width: 150px;
        /*display: flex;*/
        flex-direction: column;
        color: #5555ee;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 35px;
    }

    .dynamic-name-address span:nth-child(1) {
        background-color: #fff;
        padding: 5px;
        font-size: 13px;
        font-weight: 500;
    }

    .dynamic-name-address span:nth-child(2) {
        background-color: #6fd0f4;
        padding: 2px 5px;
        font-size: 16px;
        font-weight: 400;
    }

    .custom_button, .fb-share-button {
        width: 100%;
        margin-bottom: 5px;
        margin-left: -15px;
        margin-top: 10px;
    }

  </style>

</head>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-4">
                <button type="button" class="btn btn-info custom_button" id="download">Download</button>
            </div>
            <div class="col-md-4">
                <button type="button" class="btn btn-info custom_button" onclick="copyURL()">Link</button>
            </div>
            <div class="col-md-4" style="margin-top: 6px">
                <div class="fb-share-button" data-href="#link" data-layout="button" id="share_button"></div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2" id="photo">

            <div class="dynamic-wrapper">
                <div class="dynamic-main-page">
                    <img src="../GP_EidCard_BG.jpg" alt="Background Image" class="img img-responsive">
                    <div class="dynamic-info-inner">
                        <div class="dynamic-client-info">
                            <div class="dynamic-image">
                            <img src="../images/userImages/64968d07b027e_1687588103_md.faizshirajidoller.jpg" alt="">
                        </div>
                        <div class="dynamic-name-address">
                            <span>Md. Faiz Shiraji Doller</span>
                        </div>
                     </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="fb-root"></div>
    </div>
</div>

<script type="text/javascript">
   
   jQuery(document).ready(function(){

        var url = window.location.href;
        let link = document.querySelector("#share_button");
        let oldHref = link.href;
        link.removeAttribute("href");
        link.setAttribute("data-href", url);
        console.log(link);

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