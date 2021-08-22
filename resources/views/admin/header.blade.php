<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vora - Saas Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/admin/images/favicon.png')}}">
    <link href="{{url('/admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{url('/admin/vendor/chartist/css/chartist.min.css')}}">
     <!-- Custom Stylesheet -->
    <link href="{{url('/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{url('/admin/css/style.css')}}" rel="stylesheet">
	 <!-- Datatable -->
    <link href="{{url('/admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<!-- Vectormap -->
    <link href="{{url('/admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{url('/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{url('/admin/css/style.css')}}" rel="stylesheet">
	<link href="{{url('/admin/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<call-us 
     style="position: fixed; right: 20px; bottom: 20px; 
         font-family: Arial; 
         z-index: 99999; 
         --call-us-form-header-background:#186c77;
         --call-us-main-button-background:#05d6d6;
         --call-us-client-text-color:#d4d4d4;
         --call-us-agent-text-color:#eeeeee;
         --call-us-form-height:330px;" 
     id="wp-live-chat-by-3CX" 
     channel-url="https://rizqifauzan.my3cx.sg" 
     files-url="https://rizqifauzan.my3cx.sg" 
     minimized="true" 
     animation-style="none" 
     party="rizqifauzan" 
     minimized-style="BubbleRight" 
     allow-call="true" 
     allow-video="true" 
     allow-soundnotifications="true" 
     enable-onmobile="true" 
     offline-enabled="true" 
     enable="true" 
     ignore-queueownership="false" 
     authentication="both" 
     operator-name="Support" 
     show-operator-actual-name="true" 
     channel="phone" 
     aknowledge-received="true" 
     gdpr-enabled="false" 
     gdpr-message="I agree that my personal data to be processed and for the use of cookies in order to engage in a chat processed by COMPANY, for the purpose of Chat/Support for the time of  30 day(s) as per the GDPR." 
     message-userinfo-format="both" 
     message-dateformat="both" 
     start-chat-button-text="Chat" 
     window-title="Live Chat & Talk" 
     button-icon-type="Default" 
     invite-message="Hello! How can we help you today?" 
     authentication-message="Could we have your name and email?" 
     unavailable-message="We are away, leave us a message!" 
     offline-finish-message="We received your message and we'll contact you soon." 
     ending-message="Your session is over. Please feel free to contact us again!" 
     greeting-visibility="none" 
     greeting-offline-visibility="none" 
     chat-delay="2000" 
     offline-name-message="Could we have your name?" 
     offline-email-message="Could we have your email?" 
     offline-form-invalid-name="I'm sorry, the provided name is not valid." 
     offline-form-maximum-characters-reached="Maximum characters reached" 
     offline-form-invalid-email="I'm sorry, that doesn't look like an email address. Can you try again?" 
     >
</call-us>


<script defer src="https://cdn.3cx.com/livechat/v1/callus.js" id="tcx-callus-js"></script>
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
     <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @yield('nav_header')
         <!--**********************************
            Nav header end
        ***********************************-->
        
		
		<!--**********************************
            Chat box start
        ***********************************-->

        <!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

   

		<!--**********************************
            Sidebar start
        ***********************************-->
        @yield('sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

		@yield('content')
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        @yield('footer')
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{url('/admin/vendor/global/global.min.js')}}"></script>
	<script src="{{url('/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{url('/admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{url('/admin/js/custom.min.js')}}"></script>
	<script src="{{url('/admin/js/dlabnav-init.js')}}"></script>
	<script src="{{url('/admin/vendor/owl-carousel/owl.carousel.js')}}"></script>
		
	
	<!-- Chart piety plugin files -->
    <script src="{{url('/admin/vendor/peity/jquery.peity.min.js')}}"></script>

    <!-- Datatable -->
    <script src="{{url('/admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('/admin/js/plugins-init/datatables.init.js')}}"></script>
	
	<!-- Apex Chart -->
	<script src="{{url('/admin/vendor/apexchart/apexchart.js')}}"></script>
	
	
	<!-- Dashboard 1 -->
	<script src="{{url('/admin/js/dashboard/dashboard-1.js')}}"></script>

    <!-- Jquery Validation -->
    <script src="{{url('/admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{url('/admin/js/plugins-init/jquery.validate-init.js')}}"></script>
	
</body>
</html>