<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/css3-buttons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/app.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>public/js/cssua.min.js"></script>
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
                    <div class="rightNav_head">Home</div>
                    <div class="rightNav_cnt">
                       
                        <div class="hdr1 f_b m_b_10">Funding History</div>

                        <div class="o_h sum_box fund_date r_f m_t_20">
                            <ul>
                                <li><div class="lbl">Date from:</div></li>
                                <li><input type="text" class="ip r_f"></li>
                                <li><div class="lbl">To:</div></li>
                                <li><input type="text" class="ip r_f"></li>
                                <li class="butadj"><a class="button yellow cur_def">Generate Report</a></li>
                            </ul>
                        </div>


                        <table class="data m_t_40 datagrid ">
                            <thead>
                               <tr role="row">
                                    <th rowspan="2" style="width: 56px;" colspan="1">Order</th>
                                    <th rowspan="2" style="width: 48px;" colspan="1">Type</th>
                                    <th rowspan="2" colspan="1" style="width: 70px;">Symbol</th>
                                    <th rowspan="2" style="width: 45px;" colspan="1">Lots</th>
                                    <th colspan="2" rowspan="1">Opening</th>
                                    <th rowspan="2" style="width: 30px;" colspan="1">TP</th>
                                    <th rowspan="2" style="width: 30px;" colspan="1">SL</th>
                                    <th colspan="2" rowspan="1">Closing</th>
                                    <th rowspan="2" style="width: 115px;" colspan="1">Commisions</th>
                                    <th rowspan="2" style="width: 66px;" colspan="1">Swaps</th>
                                    <th rowspan="2" style="width: 35px;" colspan="1">P/L</th>
                               </tr>
                                <tr role="row">
                                    <th style="width: 49px;" colspan="1">Time</th>
                                    <th style="width: 52px;" rowspan="1" colspan="1">Price</th>
                                    <th style="width: 49px;" rowspan="1" colspan="1">Time</th>
                                    <th style="width: 52px;" rowspan="1" colspan="1">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td valign="top" colspan="13" class="dataTables_empty"><div class="grid-msg">No Results</div></td>
                                </tr>
                            </tbody>
                        </table>


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