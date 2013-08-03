<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/css3-buttons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/app.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/cssua.min.js"></script>
        
        <!-- @@ START, FILE UPLOADER FILES-->
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/file_uploader/jquery.fileupload-ui.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>misc/widgets/css/bootstrap.min.css" />
        
        <script src="<?php echo base_url(); ?>public/js/file_uploader/jquery.ui.widget.js"></script>
        <script src="<?php echo base_url(); ?>public/js/file_uploader/jquery.fileupload.js"></script>
        <script src="<?php echo base_url(); ?>public/js/file_uploader/jquery.iframe-transport.js"></script>
        <script>
            /*jslint unparam: true */
            /*global window, $ */
            $(function () {
                'use strict';
                // Change this to the location of your server-side upload handler:
                var url= "<?php echo site_url('userpages/upload_documents_handler'); ?>";
                $('#fileupload').fileupload({
                    url: url,
                    dataType: 'json',
                    done: function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            if(console) console.log(file);
                            if(file.error){
                                $('<div class="alert_error"/>').text(file.error).appendTo('#files');
                                setTimeout(function(){ $('.alert_error').slideUp('fast'); }, 10000);
                            }else{
                                $('<p/>').text(file.name).appendTo('#files');
                                $('<input type="hidden" name="proof_of_identity[]" />').val(file.name).appendTo('#files');
                                $('<input type="hidden" name="proof_of_identity_full_path[]" />').val(file.url).appendTo('#files');
                            }
                            
                        });
                        $('#progress').hide();
                        $('#progress .bar').css(
                            'width','0px'
                        );
                    },
                    progressall: function (e, data) {
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        $('#progress').show();
                        $('#progress .bar').css(
                            'width',
                            progress + '%'
                        );
                    }
                }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
                
                $('#fileupload_2').fileupload({
                    url: url,
                    dataType: 'json',
                    done: function (e, data) {
                        $.each(data.result.files, function (index, file) {
                            if(console) console.log(file);
                            if(file.error){
                                $('<div class="alert_error"/>').text(file.error).appendTo('#files_2');
                                setTimeout(function(){ $('.alert_error').slideUp('fast'); }, 10000);
                            }else{
                                $('<p/>').text(file.name).appendTo('#files_2');
                                $('<input type="hidden" name="proof_of_residence[]" />').val(file.name).appendTo('#files_2');
                                $('<input type="hidden" name="proof_of_residence_full_path[]" />').val(file.url).appendTo('#files_2');
                            }
                        });
                        $('#progress_2').hide();
                        $('#progress_2 .bar').css(
                            'width','0px'
                        );
                    },
                    progressall: function (e, data) {
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        $('#progress_2').show();
                        $('#progress_2 .bar').css(
                            'width',
                            progress + '%'
                        );
                    }
                }).prop('disabled', !$.support.fileInput)
                .parent().addClass($.support.fileInput ? undefined : 'disabled');
            });
        </script>
        <!-- @@ END, FILE UPLOADER FILES-->
        
        
    </head>
    <body class="app">
        <div id="wrap">
            <div class="header animation_setting bounceInDown">
                <div class="logo_inner p_a"></div>
                <div class="p_a app_interaction">
                    <a class="f_l chat first tf_animation">Chat</a>
                    <a class="f_l logged_user tf_animation p_r">
                        <span class="usr_ico icon p_a tf_animation"></span>Admin
                    </a>
                    <a class="f_l logout last">logout</a>
                    <div class="c_b"></div>
                </div>
            </div>
            <div class="contentarea p_r">
                <div class="leftNav p_f tf_animation animation_setting fadeInLeft">
                    <ul class="nav_emt">
                        <li><a href="" class="active">Home</a></li>
                        <li><a href="">Deposit</a></li>
                        <li><a href="">Withdrawal</a></li>
                        <li><a href="" class="collapse j_submenu_toggle">Reports</a></li>
                        <ul class="lft_sub_menu">
                            <li>
                               <a href=""> Trading History </a>
                            </li>
                            <li>
                                <a href=""> Open positions </a>
                            </li>
                            <li>
                                <a href=""> Deposits/Withdrawals </a>
                            </li>
                        </ul>
                        <li><a href="" class="collapse j_submenu_toggle">My Account</a></li>
                        <ul class="lft_sub_menu">
                            <li>
                               <a href=""> Change Leverage </a>
                            </li>
                            <li>
                                <a href=""> Internal Transfer </a>
                            </li>
                        </ul>

                    </ul>
                </div>
                <div class="rightNav">
                    <div class="rightNav_head">Upload Documents</div>
                    <div class="rightNav_cnt">
                       
                        <p  class="help_text">ForexRay is legally required to hold on record (to file) the necessary documentation in support of your application. Trading access and/or withdrawals will not be permitted until your documents have been received and verified.</p>
                        <p  class="help_text m_t_20">Please scan and upload the documentation specified below.</p>
                        <p  class="help_text">Accepted file formats: .GIF, .JPG, .PNG, .PDF</p>
                        
                        <div class="hdr2 f_b m_b_10 m_t_40">PROOF OF IDENTITY:</div>
                        
                        <div class="o_h sum_box r_f m_t_20">

                            <span class="btn btn-success  fileinput-button ">
                                <i class="icon-plus icon-white"></i>
                                <span>Select files...</span>
                                <!-- The file input field used as target for the file upload widget -->
                                <input id="fileupload" type="file" name="files[]" multiple>
                            </span>
                            <br/><br/>
                            <!-- The global progress bar -->
                            <div id="progress" class="progress progress-success progress-striped hide">
                                <div class="bar"></div>
                            </div>
                             <!-- The container for the uploaded files -->
                            <div id="files" class="files reset_alert"></div>

                        </div>
                        <p  class="help_text">A copy of valid passport or other official state ID (e.g. driver's license, identity card, etc). The ID must be valid and contain the client's full name, an issue or expiry date, the client's place and date of birth OR tax identification number and the client's signature.</p>
                        
                        
                        <div class="hdr2 f_b m_b_10 m_t_40">PROOF OF RESIDENCY:</div>
                        
<!--                        <div class="o_h sum_box r_f m_t_20">

                            <input type="text" class="ip r_f m_t_20" />
                            <br/>

                        </div>-->
                        
                        <div class="o_h sum_box r_f m_t_20">
                            <span class="btn btn-success  fileinput-button ">
                                <i class="icon-plus icon-white"></i>
                                <span>Select files...</span>
                                <!-- The file input field used as target for the file upload widget -->
                                <input id="fileupload_2" type="file" name="files[]" multiple>
                            </span>
                            <br/><br/>
                            <!-- The global progress bar -->
                            <div id="progress_2" class="progress progress-success progress-striped hide">
                                <div class="bar"></div>
                            </div>
                             <!-- The container for the uploaded files -->
                            <div id="files_2" class="files reset_alert"></div>
                        </div>
                        <p class="help_text">A recent utility bill (e.g. electricity, gas, water, phone, oil, Internet and/or cable TV connections) dated within the last 3 months confirming your registered address.</p>
                        
                        
                        <div class="o_h sum_box r_f m_t_20 m_b_10">

                            <a class="button yellow m_t_20 cur_def">Upload your documents</a>

                        </div>
                        
                    </div>
                </div>
            </div> 
            <div id="footer" class="p_f bounceInUp animation_setting">
                <a href="">Site Map</a>
                <a href="">Contact us</a>
            </div>    
        </div>    
        
    </body>
</html>