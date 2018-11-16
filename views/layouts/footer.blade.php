{{--<div class="wrapper">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12 col-sm-12">--}}
                {{--<div class="card" >--}}
                    {{--<div class="card-block">--}}
                        {{--<a class="btn btn-lg btn-success float-right" href="./"><i class="fa fa-arrow-left"></i>&nbsp;Go Back</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<!-- Footer -->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small class="font-15">Copyright © Tilt Systems</small>
        </div>
    </div>
</footer>
<!-- Switcher -->
<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin theme-cl fa fa-cog" aria-hidden="true"></i></button>
<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large theme-bg">Close &times;</button>
    <div class="title-logo">
        <img src="assets/img/logo.html" alt="" class="img-responsive">
        <h4>Choose Your Color</h4>
    </div>
    <ul id="styleOptions" title="switch styling">
        <li>
            <a href="javascript: void(0)" class="cl-box cl-red" data-theme="skins/red"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-green" data-theme="skins/green"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-orange" data-theme="skins/orange"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-blue" data-theme="skins/blue"></a>
        </li>
        <li>
            <a href="javascript: void(0)" class="cl-box cl-default" data-theme="skins/default"></a>
        </li>
    </ul>
</div>
<!-- /Switcher -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded cl-white gredient-bg" href="#page-top">
    <i class="ti-angle-double-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/plugins/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Slick Slider Js -->
<script src="{{asset('assets/plugins/slick-slider/slick.js')}}"></script>

<!-- Slim Scroll -->
<script src="{{asset('assets/plugins/slim-scroll/jquery.slimscroll.min.js')}}"></script>

<!-- Angular Tooltip -->
<script src="{{asset('assets/plugins/angular-tooltip/angular.js')}}"></script>
<script src="{{asset('assets/plugins/angular-tooltip/angular-tooltips.js')}}"></script>
<script src="{{asset('assets/plugins/angular-tooltip/index.js')}}"></script>

<!-- Morris.js charts -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/morris.js/morris.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/chart.js/Chart.js')}}"></script>

<!-- Custom Chart JavaScript -->
<script src="{{asset('assets/dist/js/custom/dashboard/dashboard.js')}}"></script>
<!-- Custom Chartjs JavaScript -->
<script src="{{asset('assets/dist/js/custom/chart/chartjs.js')}}"></script>

<!-- Custom scripts for all pages -->
<script src="{{asset('assets/dist/js/glovia.js')}}"></script>
<script src="{{asset('assets/dist/js/jQuery.style.switcher.js')}}"></script>
<script>
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
    }
    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#styleOptions').styleSwitcher();
    });
</script>

<script>
    $('.dropdown-toggle').dropdown()
</script>

</div>
<!-- Wrapper -->

</body>

<!-- Mirrored from themezhub.com/demo/live-preview-glovia/glovia/layout-one/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Mar 2018 16:30:30 GMT -->
</html>
