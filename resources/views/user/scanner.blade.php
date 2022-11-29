<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <title>Document</title>
</head>
<body>
    <div id="reader" width="600px"></div>
</body>
<!-- <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script> -->
<script type="text/javascript">
  // This method will trigger user permissions
  Html5Qrcode.getCameras().then(devices => {
    if (devices && devices.length) {
      var cameraId = devices[0].id;
      const html5QrCode = new Html5Qrcode("reader");
      const qrCodeSuccessCallback = (decodedText, decodedResult) => {
        // alert(decodedText);// 這裡已經可以正確彈出掃描結果，但點按無法跳轉
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
<!-- <script>
    function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
}

var html5QrcodeScanner = new Html5QrcodeScanner(
	"reader", { fps: 100, qrbox: 600 });
html5QrcodeScanner.render(onScanSuccess);
</script> -->
<!-- <script>
    var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
        
function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
    // ...
    html5QrcodeScanner.clear();
    // ^ this will stop the scanner (video feed) and clear the scan area.
}

html5QrcodeScanner.render(onScanSuccess);
</script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
}

function onScanError(errorMessage) {
    // handle on error condition, with error message
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);
</script> -->
</html>