
@extends('user/dataUser/base/base')

@section('content')

  <section id="" class="pt-36 min-h-screen">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-extrabold text-xl text-rose-500 mb-2">
            Scanner QR Code
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-8">
            Scanner QR Code Tamu Undangan
          </h2>
          <div class="w-full border">
          <div class="w-full md:w-2/3 border md:mx-auto">
            <div id="reader" class="" width="500px"></div>
          </div>
          </div>
        </div>
        <div class="w-full flex flex-wrap justify-center xl:mx-auto">
          <div class="overflow-x-auto ml-8 relative shadow-md border-rose-200 border sm:rounded-lg">

          </div>
        </div>
          
      </div>
    </div>
  </section>
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
  <script type="text/javascript">
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
            width: 200,
            height: 200
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

  
@endsection