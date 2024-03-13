let closeBtn = document.querySelector(".close-btn")
let fromSection = document.querySelector(".registration-form")

closeBtn.addEventListener("click", function() {
    fromSection.classList.add("form-popup-hide")
})

// $(document).ready(function(){
//     // Get value on button click and show alert
//     $("#click").click(function(){
//         var str = $("#name").val();
//         alert(str);
//     });
// });


$(document).ready(function() {
  // Assuming you have an input element with ID 'upload'
  $('#click').on('click', function(event) {
    var file = event.target.files[0];

    // Create a FileReader to read the uploaded file
    var reader = new FileReader();

    // When the FileReader has loaded the file
    reader.onload = function(event) {
      // Create an image element
      var image = new Image();

      // When the image has loaded
      $(image).on('load', function() {
        // Create a canvas element
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');

        // Set the canvas dimensions to match the image
        canvas.width = image.width;
        canvas.height = image.height;

        // Draw the image on the canvas
        ctx.drawImage(image, 0, 0);

        // Convert the canvas image to PNG format
        var pngImage = canvas.toDataURL('image/png');

        // Set the converted image as the background of another element
        $('#file').css('background-image', 'url(' + pngImage + ')');
      });

      // Set the source of the image element to the uploaded file
      image.src = event.target.result;
    };

    // Read the uploaded file as a data URL
    reader.readAsDataURL(file);
  });
});
