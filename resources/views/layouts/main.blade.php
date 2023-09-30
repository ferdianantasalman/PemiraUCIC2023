<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PEMIRA UCIC 2023</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_landing/images/logo/logo_tab.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets_landing/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_landing/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_landing/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_landing/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_landing/css/main.css') }}" />
  </head>
  <body>
    <!-- Start Preloader -->
    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-icon">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- End Preloader -->

    @include('layouts.header')

    @yield('content')
    
    @include('layouts.footer')

    
    <!-- Start Scroll Top -->
    <a href="#" class="scroll-top">
      <i class="lni lni-chevron-up"></i>
    </a>
    <!-- End Scroll Top -->


    <script src="{{ asset('assets_landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets_landing/js/main.js') }}"></script>
    <script>
      function openTab(evt, nameTab) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab-links");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].classList.remove("active");
        }
        document.getElementById(nameTab).style.display = "flex";
        evt.currentTarget.classList.add("active");
      }

      // Get the element with id="defaultOpen" and click on it
      document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("defaultOpen").click();
      });
    </script>
    <script>
      (function () {
        var js = "window['__CF$cv$params']={r:'7f80ae741f263fd6',t:'MTY5MjI2MjM1Mi43OTQwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/313d8a27/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement("iframe");
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = "absolute";
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = "none";
        _0xh.style.visibility = "hidden";
        document.body.appendChild(_0xh);
        function handler() {
          var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
          if (_0xi) {
            var _0xj = _0xi.createElement("script");
            _0xj.innerHTML = js;
            _0xi.getElementsByTagName("head")[0].appendChild(_0xj);
          }
        }
        if (document.readyState !== "loading") {
          handler();
        } else if (window.addEventListener) {
          document.addEventListener("DOMContentLoaded", handler);
        } else {
          var prev = document.onreadystatechange || function () {};
          document.onreadystatechange = function (e) {
            prev(e);
            if (document.readyState !== "loading") {
              document.onreadystatechange = prev;
              handler();
            }
          };
        }
      })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7f80ae741f263fd6","version":"2023.8.0","r":1,"b":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}' crossorigin="anonymous"></script>
  </body>
</html>
