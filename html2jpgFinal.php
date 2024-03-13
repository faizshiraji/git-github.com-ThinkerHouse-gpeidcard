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
  <!-- <meta property="og:description" content="ChatGPT is an AI language model developed by OpenAI" /> -->
  <meta property="og:image" content="https://test.thinkerhouse.co/ChatGPT_logo.png" />

  <!-- Project Asset -->
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- <script src="assets/js/bootstrap.min.js"></script> -->

  <!-- Project Asset -->
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

  <!-- HTML TO JPG -->
  <script type="text/javascript" src="assets/js/html2canvas.min.js"></script>
  <script type="text/javascript" src="assets/js/html2canvas.esm.js"></script>
  <script type="text/javascript" src="assets/js/html2canvas.js"></script>

  <style type="text/css">

    /* Style Start */
/*    * {
        margin: 0;
        padding: 0;
    }*/
    .dynamic-wrapper{
/*        max-height: 1000px;
        max-width: 1200px;*/
        /*position: relative;*/
    }

    .dynamic-main-page {
        /*max-height: 100vh;*/
        /*max-width: 100vw;*/
        /*position: relative;*/
    }

    .dynamic-main-page img{
        max-height: 1000px;
        max-width: 2000px;
        display: block;
    }

    .dynamic-info-inner {
        position: absolute;
        top: 72%;
        left: 8%;
        transform: translateY(-45%);
        z-index: 1;
    }

    .dynamic-client-info {
        height: 300px;
        width: 300px;
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

    .custom_button {
        width: 100%;
        margin-bottom: 5px;
        margin-left: -15px;
        margin-top: 10px;
    }

    .submit-btn {
        font-size: 14px;
        font-weight: 500;
        background-color: #6fd0f4;
        color: #fff;
        padding: 8px 15px;
        border: none;
        cursor: pointer;
        transition: .3s;
    }

    .submit-btn:hover {
        opacity: .8;
    }


  </style>

</head>
<body style="background-color: #9ECF99">
  
  <button type="button" id="download" class="submit-btn" name="submit">Download</button>
  <button type="button" onclick="copyURL()" class="submit-btn" name="submit">Link</button>
  <button type="button" class="fb-share-button submit-btn" data-href="#link" data-layout="button" id="share_button"></button>

  <!-- <div id="photo"> -->

      <div class="dynamic-wrapper">
          <div class="dynamic-main-page" id="photo">
              <img src="GP_EidCard_BG.jpg" alt="Background Image" class="img img-responsive">
              <div class="dynamic-info-inner">
                  <div class="dynamic-client-info">
                      <div class="dynamic-image">
                          <img src="images/userImages/6495b04a9f234_ab01f2d306635b44_mohammadshahadat.jpg" alt="">
                      </div>
                      <div class="dynamic-name-address">
                          <span>Shahadat Hossain</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  <!-- </div> -->

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>

<script type="text/javascript">
   
   jQuery(document).ready(function(){

        var url = window.location.href;
        let link = document.querySelector('#share_button');
        let oldHref = link.href;
        link.removeAttribute('href');
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
     var link = document.createElement('a');
     if(typeof link.download !== 'string'){
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
    }(document, 'script', 'facebook-jssdk'));

</script>

</body>
</html>

</html>