<!-- Required Jqurey -->
<script src="<?php echo URLROOT; ?>/assets/plugins/Jquery/dist/jquery.min.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="<?php echo URLROOT; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Scrollbar JS-->
<script src="<?php echo URLROOT; ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="<?php echo URLROOT; ?>/assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="<?php echo URLROOT; ?>/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Sparkline charts -->
<script src="<?php echo URLROOT; ?>/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

<!-- Counter js  -->
<script src="<?php echo URLROOT; ?>/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo URLROOT; ?>/assets/plugins/countdown/js/jquery.counterup.js"></script>

<!-- Echart js -->
<script src="<?php echo URLROOT; ?>/assets/plugins/charts/echarts/js/echarts-all.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>

<!-- custom js -->
<script type="text/javascript" src="<?php echo URLROOT; ?>/assets/js/main.min.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/assets/pages/dashboard.js"></script>
<script type="text/javascript" src="<?php echo URLROOT; ?>/assets/pages/elements.js"></script>
<script src="<?php echo URLROOT; ?>/assets/js/menu.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
<script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        }
        else {
            nav.removeClass('active');
        }
    });
</script>
</body>

</html>