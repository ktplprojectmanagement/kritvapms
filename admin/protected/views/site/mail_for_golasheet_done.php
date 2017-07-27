<!DOCTYPE html>
<html>
<head>  
        
</head>

<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
<script type="text/javascript" src="http://cdn.uriit.ru/jsPDF/libs/adler32cs.js/adler32cs.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2014-11-29/FileSaver.min.js
"></script>
<script type="text/javascript" src="libs/Blob.js/BlobBuilder.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.addimage.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.standard_fonts_metrics.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.split_text_to_size.js"></script>
<script type="text/javascript" src="http://cdn.immex1.com/js/jspdf/plugins/jspdf.plugin.from_html.js"></script>

<?php
$notification_data =new NotificationsForm;
        $emploee_data =new EmployeeForm;
        $kra=new KpiAutoSaveForm;
        $where = 'where Employee_id = :Employee_id';
        $list = array('Employee_id');
        $data = array('111');
        $employee_data = $emploee_data->get_employee_data($where,$data,$list);

        $where1 = 'where  Employee_id = :Employee_id and goal_set_year = :goal_set_year';
        $list1 = array('Employee_id','goal_set_year');
        $data2 = array('111','2016-2017');
        $kpi_data = $kra->get_kpi_list($where1,$data2,$list1);  
        //print_r($employee_data);die();
?>
<div id="target" download>
<style type="text/css">
body{

}
table {
    border-collapse: collapse;
    color:black;
}
table, th, td {
    border: 1px solid black;
}
th{
    width: 134px;
    font-size:16px
}
thead{
    background-color: #4c87b9;
    color: #fff;
}
td{
    font-size: 14px;
}
</style>
<lable id='emp_id' style="display: none"><?php echo '111'; ?></lable>
Dear <label><?php if(isset($employee_data['0']['Emp_fname'])) { echo $employee_data['0']['Emp_fname'].' '.$employee_data['0']['Emp_lname']; }?></label>,<br/>
                                                The Goals are successfully submitted </label><br/><br>
<?php
                                            if (isset($kpi_data)) { $cnt_num = 1; ?>
                                            <label class='count_goal' style="display: none"><?php echo count($kpi_data); ?></label>
                                          <?php     
                                        foreach ($kpi_data as $row) {  ?>
                                        <div class="portlet box border-blue-soft bg-blue-soft" id="output_div_<?php echo $row["KPI_id"]; ?>">
                                            <div class="portlet-title">
                                                <div class="caption" style="font-weight:bold; font-size:18px; color: black;">                                                  
                                                    <label id="total_<?php echo $cnt_num; ?>" style="display: none"><?php echo $row['target']; ?></label>
                                                   <?php echo $row['KRA_category']; ?><?php echo "(".$row['target'].")"; ?></div>
                                                <div class="tools" style="font-weight:bold; font-size:18px; color: black;">
                                                    <?php echo "KRA Approval Status : ".$row['KRA_status']; ?>
                                                    <a href="javascript:;" class="collapse">
</a>
                                                </div>
                                            </div>
                                            <div class="portlet-body flip-scroll expand_goal<?php echo $cnt_num; ?>">                         
                                                <table  class="table table-striped table-hover table-bordered" id="sample_editable_1" style="margin-top:20px;border-collapse: collapse;color:black;border: 1px solid black;">
                                                    <thead>
                                                         <tr id="get_target_value">
                                                        <th style=" "> Key Performance Indicator (KPI) description  </th>
                                                        <th style="text-align:center;"> Unit </th>
                                                        <th style="text-align:center;"> KPI Weightage </th>
                                                        <th style="text-align:center;">  Value </th>
                                                        <th style="text-align:center;"> (1)<br>Unsatisfactory <br>Performance </th>
                                                        <th style="text-align:center;"> (2)<br>Needs<br>Improvement </th>
                                                        <th style="text-align:center;"> (3)<br>Good Solid <br>Performance </th>
                                                        <th style="text-align:center;"> (4)<br>Superior <br>Performance </th>
                                                        <th style="text-align:center;">(5)<br>Outstanding <br>Performance </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                                $kpi_list_data = '';
                                                                $kpi_list_data = explode(';',$row['kpi_list']);
                                                                $kpi_list_unit = explode(';',$row['target_unit']);
                                                                $kpi_list_target = explode(';',$row['target_value1']); 
                                if($row['KPI_target_value']=='')
                                {
                                 $KPI_target_value = '';
                                }
                                else
                                {
                                $KPI_target_value = explode(';',$row['KPI_target_value']); 
                                }

                                                                //$KPI_target_value = explode(';',$row['KPI_target_value']);
                                                                $kpi_data_data = 0;
                                                                for ($i=0; $i < count($kpi_list_data); $i++) { 
                                                                    if ($kpi_list_data[$i] != '') {
                                                                        if($kpi_data_data == '')
                                                                        {
                                                                            $kpi_data_data = 1;
                                                                        }
                                                                        else
                                                                        {
                                                                            $kpi_data_data = $kpi_data_data+1;
                                                                        }                                                                        
                                                                    }
                                
                                                            ?>
                                                           <?php
                                                                $cnt = 0;
                                                                for ($i=0; $i < count($kpi_list_data); $i++) { if ($kpi_list_data[$i]!='') { $cnt++;
                                if (!isset($KPI_target_value[$i])) {
                                                                        $KPI_target_value[$i] = '';                                                                       
                                                                    }
                                                                }
                                                            ?>
                                                                <tr>
                                                                    <td style="height: 30px;border: 1px solid black;font-size: 14px;"><?php echo $kpi_list_data[$i]; ?></td>
                                                                    <td style="border: 1px solid black;font-size: 14px;"><?php echo $kpi_list_unit[$i]; ?></td>
                                                                        <?php
                                                                            if ($kpi_list_unit[$i] == 'Units' || $kpi_list_unit[$i] == 'Weight' || $kpi_list_unit[$i] == 'Value') {
                                                                                ?>
                                                                                <td style="border: 1px solid black;font-size: 14px;"><?php echo $kpi_list_target[$i]; ?></td>
                                                                                <td style="border: 1px solid black;font-size: 14px;"><?php echo $KPI_target_value[$i]; ?></td>
                                                                                <td style="border: 1px solid black;font-size: 14px;"></td>
                                                                                <td style="border: 1px solid black;font-size: 14px;"></td>
                                                                                <td style="border: 1px solid black;font-size: 14px;"></td>
                                                                                <td style="border: 1px solid black;font-size: 14px;"></td>
                                                                                <td style="border: 1px solid black;font-size: 14px;"></td>
                                                                        <?php
                                                                            }
                                                                            else
                                                                            {
                                                                        ?>
                                                                                <td style="border: 1px solid black;font-size: 14px;"></td>
                                                                                <td style="border: 1px solid black;font-size: 14px;"><?php echo $KPI_target_value[$i]; ?></td>
                                                                                <?php
                                                                                $value_data = explode('-', $kpi_list_target[$i]);
                                                                                for ($j=0; $j < 5; $j++) { 
                                                                                    if (isset($value_data[$j])) {?>
                                                                                     <td style="border: 1px solid black;font-size: 14px;"><?php echo $value_data[$j]; ?></td>
                                                                                <?php
                                                                                }
                                                                                else
                                                                                {
                                                                                   ?>
                                                                                   <td style="border: 1px solid black;font-size: 14px;"><?php echo ""; ?></td>
                                                                                   <?php 
                                                                                }
                                                                                }
                                                                        ?>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                </tr>
                                                                <?php
                                                                   } }
                                                            ?>                              
                                                    </tbody>
                                                                                              
                                                </table>   
                                                <br><br>                                              
                                            </div>
                                        </div>
                                         <?php 
                                        $cnt_num++; } }
                                        ?>
                                        <span> Please click the link below to check status:<br>
  <a href="http://kritvainvestments.com/pmsuser/index.php?r=PMSlogin/setgaolsheet">http://kritvainvestments.com/pmsuser/index.php?r=Login</a>
                                        <p style="text-align:left; line-height:15px; font-weight: bold">Best Regards,<br/>
                                         <?php if(isset($employee_data1['0']['Emp_fname'])) { echo $employee_data1['0']['Emp_fname'].' '.$employee_data1['0']['Emp_lname']; }?><?php if(isset($employee_data1['0']['Employee_id'])) { echo '(Employee ID : '.$employee_data1['0']['Employee_id'].' )'; }?></p></span> 
                                         <p style="color: #bbb;">
                                        2016 &#169; Kritva Technology Pvt. Ltd.
                                        </p>
                                        </div>

                                       </body>
                                       <script type="text/javascript">
                                           $(function(){
                                            var specialElementHandlers = {
                                                    '#editor': function (element,renderer) {
                                                        return true;
                                                    }
                                                };
                                                var doc = new jsPDF();
                                                doc.fromHTML($('#target').html(), 15, 15, {
                                                    'width': 170,'elementHandlers': specialElementHandlers
                                                });
                                                var base_url = window.location.origin;
                                                var data = {
                                                    doc : $('#target').html(),
                                                    emp_id : $('#emp_id').text()
                                                };
                                                $.ajax({                            
                                                type : 'post',
                                                datatype : 'html',
                                                data : data,
                                                url : base_url+'/pmsuser/index.php?r=Checkattach/check_view1',
                                                success : function(data)
                                                {
                                                    alert(data);
                                                }
                                            });
                                           });
                                       </script>
                                       </html>