<!DOCTYPE html>
<html>

<head>
  <title>SayCheese!</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/canvas2image@1.0.5/canvas2image.min.js"></script>
  <script src="main.js"></script>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="" method="POST" enctype="multipart/form-data">
          <div id="my_camera"></div>
        </form>
      </div>
    </div>
  </div>

  <!-- Configure a few settings and attach camera -->
  <script language="JavaScript">
    Webcam.set({
      width: 640,
      height: 480,
      image_format: 'jpeg',
      jpeg_quality: 90
    });

    Webcam.attach('#my_camera');

    function download() {
      html2canvas(document.querySelector('#my_camera')).then(canvas => {
        document.body.appendChild(canvas);
      });
    }

    function take_snapshot() {
      Webcam.snap(function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
      });
    }
  </script>

</body>

</html>