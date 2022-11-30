{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="reader" width="400px"></div>
</body>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script src="html5-qrcode.min.js"></script>
<script type="text/javascript">
  // This method will trigger user permissions
  Html5Qrcode.getCameras().then(devices => {
    if (devices && devices.length) {
      var cameraId = devices[0].id;
      const html5QrCode = new Html5Qrcode("reader");
      const qrCodeSuccessCallback = (decodedText, decodedResult) => {
        confirm(window.location = decodedText);
      };
      const config = {
        fps: 25,
        qrbox: {
          width: 600,
          height: 600
        }
      };
      html5QrCode.start({
        facingMode: "environment"
      }, config, qrCodeSuccessCallback);
    }
  }).catch(err => {
    // handle err
  });
</script>
<script>
  function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
}

var html5QrcodeScanner = new Html5QrcodeScanner(
	"reader", { fps: 10, qrbox: 600 });
html5QrcodeScanner.render(onScanSuccess);
</script>
</html>  --}}

