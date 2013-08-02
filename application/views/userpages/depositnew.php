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
                       
                        <div class="hdr1 f_b m_b_10">Deposit Options</div>

                        <div class="deposit_view">
                            <div class="box_placeholder o_h m_t_20">
                                <div class="box_place chn_img r_f f_l">
                                    Chinese Debit/Credit Cards Instant
                                </div>
                                <a class="button yellow f_l m_l_10">More Info</a>
                            </div>

                            <div class="box_placeholder o_h m_t_20">
                                <div class="box_place visa r_f f_l">
                                    Credit/Debit Cards
                                </div>
                                <a class="button yellow f_l m_l_10">More Info</a>
                            </div>

                            <div class="box_placeholder o_h m_t_20">
                                <div class="box_place skrill r_f f_l">
                                    Skrill (MoneyBookers)
                                </div>
                                <a class="button yellow f_l m_l_10">More Info</a>
                            </div>

                            <div class="box_placeholder o_h m_t_20">
                                <div class="box_place neteller r_f f_l">
                                    Neteller
                                </div>
                                <a class="button yellow f_l m_l_10">More Info</a>
                            </div>

                            <div class="box_placeholder o_h m_t_20">
                                <div class="box_place bankwire r_f f_l">
                                    Bank Wire Transfer
                                </div>
                                <a class="button yellow f_l m_l_10">More Info</a>
                            </div>

                            <div class="box_placeholder o_h m_t_20">
                                <div class="box_place moneygram r_f f_l">
                                    MoneyGram
                                </div>
                                <a class="button yellow f_l m_l_10">More Info</a>
                            </div>

                            <div class="box_placeholder o_h m_t_20">
                                <div class="box_place wstun r_f f_l">
                                    Western Union
                                </div>
                                <a class="button yellow f_l m_l_10">More Info</a>
                            </div>

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