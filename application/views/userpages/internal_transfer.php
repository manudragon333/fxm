<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ForexRay - Inter-Account Transfer</title>
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
                    <div class="rightNav_head">Inter-Account Transfer</div>
                    <div class="rightNav_cnt">
                       
                        <div class="hdr1 f_b m_b_10">Transfer Money Between Own Accounts</div>

                        <p  class="help_text">Please complete the below form to request a transfer. XM will contact you if any further information is required. Kindly note that this is not an automated function. The transfer will be completed within 24 hours.</p>
                        <p  class="help_text m_t_20"><i>*NOTE: Internal transfers are available only between accounts belonging to the same client.</i></p>

                        <div class="o_h sum_box r_f m_t_20">

                            <div class="log_bankdet">
                                <label>XM Account ID:</label> <b class="col_blk">2134627</b>
                                <br/>
                                <label>XM Account Name:</label> <b class="col_blk">Nagoor Basha Shaik</b>
                            </div>
                            <div class=" col_blk f_14 f_b  m_t_20">Deposit To:</div>
                            <input type="text" class="ip r_f m_t_20" />
                            <br/>
                            
                            <input type="text" class="ip r_f m_t_20" />
                            <br/>
                            
                            <input type="text" class="ip r_f m_t_20" />
                            <br/>
                            
                            <a class="button yellow m_t_20 cur_def">Send Request</a>

                        </div>

                        <div class="hdr2 f_b m_b_10 m_t_40">PAYMENT PROTECTION AND DATA SECURITY</div>
                        <p  class="help_text">Please note that XM does not receive and/or store any personal credit card or payment information. All transactions are processed and protected by Level 1 PCI-DSS Certified Independent International Payment Gateways.</p>
                        
                    </div>
                </div>
            </div> 
            
            <?php $this->load->view('common/userpages/footer_new'); ?>
               
        </div>    
        
    </body>
</html>