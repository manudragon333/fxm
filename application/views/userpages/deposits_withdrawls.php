<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ForexRay - Funding History</title>
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
                    <div class="rightNav_head">Funding History</div>
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


                        <table class="data m_t_40">
                            <thead>
                                <tr>
                                    <th>Trans#</th>
                                    <th>Time</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   <td valign="top" colspan="5" class="dataTables_empty"><div class="grid-msg">No Results</div></td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div> 
            
            <?php $this->load->view('common/userpages/footer_new'); ?>
              
        </div>    
        
    </body>
</html>