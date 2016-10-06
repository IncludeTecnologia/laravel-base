
<!--   Core JS Files   -->
{!! HTML::script('frontend/js/jquery-1.10.2.js') !!}
{!! HTML::script('frontend/js/bootstrap.min.js') !!}

<!--  Checkbox, Radio & Switch Plugins -->
{!! HTML::script('frontend/js/bootstrap-checkbox-radio.js')!!}

<!--  Charts Plugin -->
{!! HTML::script('frontend/js/chartist.min.js') !!}

<!--  Notifications Plugin    -->
{!! HTML::script('frontend/js/bootstrap-notify.js')!!}

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
{!! HTML::script('frontend/js/paper-dashboard.js')!!}



<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'ti-gift',
            message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

        },{
            type: 'success',
            timer: 4000
        });

    });
</script>