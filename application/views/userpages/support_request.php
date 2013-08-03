<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ForexRay - Support Request</title>
        <?php $this->load->view('common/userpages/head_links_new'); ?>
    </head>
    <body class="app">
        <div id="wrap">
            
            <?php $this->load->view('common/userpages/header_new'); ?>
            
            <div class="contentarea p_r">
                <div class="leftNav p_f tf_animation animation_setting fadeInLeft">
                    <?php $this->load->view('common/userpages/leftnav_new'); ?>
                </div>
                <div class="rightNav">
                    <div class="rightNav_head">Support Request</div>
                    <div class="rightNav_cnt">
                       
                        <?php $this->load->view('common/userpages/notifications'); ?>
                        
                        <div class="hdr1 f_b m_b_10">Support Request</div>

                    
                        <div class="o_h sum_box r_f m_t_20">
                            <form method="post" action="<?php echo site_url('contact_us/save_cs'); ?>" class="j_general_validate">
                                <input type="hidden" class="hide" name="page" value="support_request" />
                                <div class="log_bankdet">
                                    <label>Please enter your message below:</label> 
                                    <br/>
                                </div>

                                <select name="department_id" class="sl_bx required" title="Please select a department">
                                    <?php echo selectBox('Select Department', 'departments', 'id,name', '', 0, ''); ?>
                                </select>
                                <br/>


                                <input type="text" class="ip r_f m_t_20 required" placeholder="Subject" title="Please enter a Subject" />
                                <br/>

                                <textarea class="t_ar m_t_10 r_f required" placeholder="Enter your message" title="Enter your message"></textarea>
                                <br/>

                                <a class="button yellow m_t_20 cur_def j_general_submit">Submit</a>
                                <?php echo formtoken::getField(); ?>
                            </form>
                        </div>


                    </div>
                </div>
            </div> 
            
            <?php $this->load->view('common/userpages/footer_new'); ?>
              
        </div>    
        
    </body>
</html>