<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Schedule</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')?>" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url('assets/vendors/normalize-css/normalize.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')?>" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="<?php echo base_url('assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')?>" rel="stylesheet">

    <link href="<?php echo base_url('assets/vendors/cropper/dist/cropper.min.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <!-- include tabbar  -->
            <?php include('tab_bar_view.php') ?>
            <!-- /include tabbar  --> 

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel" style="">
                            <div class="x_title">
                                <h2><i class="fa fa-calendar"></i>  ลงตารางเวลาทำงาน</h2>                        
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="<?php echo base_url('index.php/ScheduleController/insert_schedule'); ?>"  method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class='col-md-4 col-sm-4 col-xs-12'>                                           
                                            <div class="form-group">
                                                <p><center>Time start:</center></p>
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" name="time_start"/>
                                                    <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-md-1 col-sm-1 col-xs-12">
                                            <p><center>To</center></p>
                                        </div>
                                        <div class='col-md-4 col-sm-4 col-xs-12'>                                           
                                            <div class="form-group">
                                                <p><center>Time end:</center></p>
                                                <div class='input-group date' id='datetimepicker2'>
                                                    <input type='text' class="form-control" name="time_end" />
                                                    <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12"><br><br>
                                            <center>
                                                <input type="submit" class="btn btn-success" value="Submit">
                                                <button type="reset" class="btn btn-default">Cencel</button>                                                
                                            </center>
                                        </div>
                                    </div>                    
                                </form>
                            </div>
                        </div>            
                    </div> 
                </div>
            </div>

            <!-- Show the time in modal -->
            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="getCroppedCanvasTitle">Cropped</h4>
                            </div>
                            <div class="modal-body">                              
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.png">Download</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal -->
             <!-- /page content -->

        </div>      
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js')?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets/vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url('assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>
    <!-- Ion.RangeSlider -->
    <script src="<?php echo base_url('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')?>"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="<?php echo base_url('assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')?>"></script>
    <!-- jquery.inputmask -->
    <script src="<?php echo base_url('assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')?>"></script>
    <!-- jQuery Knob -->
    <script src="<?php echo base_url('assets/vendors/jquery-knob/dist/jquery.knob.min.js')?>"></script>
    <!-- Cropper -->
    <script src="<?php echo base_url('assets/vendors/cropper/dist/cropper.min.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js')?>"></script>
    
    <!-- Initialize datetimepicker -->
    <script>
        $('#datetimepicker1').datetimepicker({
            format: 'DD/MM/YYYY HH:mm'
        });
        
        $('#datetimepicker2').datetimepicker({
            format: 'DD/MM/YYYY HH:mm'
        });
        
        $("#datetimepicker1").on("dp.change", function(e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });
        
        $("#datetimepicker2").on("dp.change", function(e) {
            $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
        });
    </script>
  </body>
</html>