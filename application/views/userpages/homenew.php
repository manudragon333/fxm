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
                         
                         <div class="hdr1 f_b m_b_10">Account Verification</div>

                         <div class="m_b_10 reset_alert">
                            <div class="alert_success">Your Account is validated</div>
                            <div class="alert_error">Your Account is not validated</div>
                         </div>
                        
                         <div class="hdr1 f_b m_b_10">Account Summary (USD)</div>

                         <div class="o_h sum_box r_f">
                            <div class="f_l box">
                                <div class="lft_fld">Account Balance</div>
                                <div class="rgt_fld">0.00</div>
                            </div>
                            <div class="f_l box">
                                <div class="lft_fld">Margin</div>
                                <div class="rgt_fld">0.00</div>
                            </div>
                            <div class="f_l box">
                                <div class="lft_fld">Equity</div>
                                <div class="rgt_fld">0.00</div>
                            </div>
                            <div class="f_l box">
                                <div class="lft_fld">Free Margin</div>
                                <div class="rgt_fld">0.00</div>
                            </div>
                            <div class="f_l box">
                                <div class="lft_fld">Unrealized P/L</div>
                                <div class="rgt_fld">0.00</div>
                            </div>
                            <div class="f_l box">
                                <div class="lft_fld">Margin Level</div>
                                <div class="rgt_fld">0%</div>
                            </div>

                         </div>


                         <div class="hdr2 f_b m_t_40 m_b_10">OPEN POSITIONS</div>

                         <table class="data">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Symbol</th>
                                    <th>Lots</th>
                                    <th>Open Price</th>
                                    <th>SL</th>
                                    <th>TP</th>
                                    <th>P/L</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Type</td>
                                    <td>Symbol</td>
                                    <td>Lots</td>
                                    <td>Open Price</td>
                                    <td>SL</td>
                                    <td>TP</td>
                                    <td>P/L</td>
                                </tr>
                               
                            </tbody>
                        </table>

                        <div class="hdr2 f_b m_b_10 m_t_40">PENDING ORDERS</div>

                        <table class="data">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Symbol</th>
                                    <th>Lots</th>
                                    <th>Price</th>
                                    <th>SL</th>
                                    <th>TP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td valign="top" colspan="7" class="dataTables_empty"><div class="grid-msg">No Pending Orders</div></td>
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
    <script type="text/javascript">
            $('.j_submenu_toggle').live('click',function(){
                $(this).next('.lft_sub_menu').slideToggle();
                $(this).toggleClass('right-arrow');
            });
    </script>
</html>