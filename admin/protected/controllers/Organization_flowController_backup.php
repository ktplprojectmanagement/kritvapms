<?php

class Organization_flowController extends Controller
{
	
	public function actionIndex()
	{
		$model=new KRAStructureForm;
		$employee = new EmployeeForm;
		$cluster_name = new ClusterForm;
		$employee_result = $employee->getdata();
		$kra_result = $model->get_all_kra();
		$appraiser_list = $employee->get_appraiser_list();
		//print_r($appraiser_list['0']['Reporting_officer1_id']);die();
		$appraiser_list_data = '';
		$employee_list = '';
		$cnt = 0;
		if (count($appraiser_list)>0) {
			for ($i=0; $i < count($appraiser_list); $i++) {
			$where = 'where Reporting_officer1_id = :Reporting_officer1_id';
			$list = array('Reporting_officer1_id');
			$data = array($appraiser_list[$i]['Reporting_officer1_id']);
			$employee_list[$i] = $employee->get_employee_data($where,$data,$list);
			}
		}
		if (count($appraiser_list)>0) {
			$cnt = 0;
			for ($i=0; $i < count($appraiser_list); $i++) {
			$where = 'where Email_id = :Email_id';
			$list = array('Email_id');
			$data = array($appraiser_list[$i]['Reporting_officer1_id']);
			$appraiser_list_data[$cnt] = $employee->get_employee_data($where,$data,$list);
			//print_r($appraiser_list_data);die();
			$cnt++;
			}
		}

		$where = 'where Reporting_officer1_id = :Reporting_officer1_id';
		$list = array('Reporting_officer1_id');
		$data = array('mssadafule@gmail.com');
		$head_branch_data = $employee->get_employee_data($where,$data,$list);
	//print_r($employee_list);die();
		$diff_Department = $employee->get_department_list();
		$diff_cluster = $cluster_name->get_distinct_list('cluster_name','where 1');
		$diff_reporting_head = $employee->get_distinct_list('Reporting_officer1_id','where 1');
		//print_r($diff_reporting_head);die();
		$dep_head_data = '';
		for ($i=0; $i < count($diff_reporting_head); $i++) { 
			$where = 'where Email_id = :Email_id';
			$list = array('Email_id');
			$data = array($diff_reporting_head[$i]['Reporting_officer1_id']);
			$dep_head_data[$i] = $employee->get_employee_data($where,$data,$list);
		}
		//print_r($dep_head_data);die();
		$this->render('//site/script_file');
		//$this->render('//site/admin_header_view');	
		$this->render('//site/org_chart_view',array('model'=>$model,'employee_list'=>$employee_result,'kra_result'=>$kra_result,'employee_list_data'=>$employee_list,'appraiser_list'=>$appraiser_list,'diff_Department'=>$diff_Department,'head_branch_data'=>$head_branch_data,'diff_cluster'=>$diff_cluster,'diff_reporting_head'=>$diff_reporting_head,'dep_head_data'=>$dep_head_data));
		$this->render('//site/admin_footer_view');
	}

	function actiongetdata()
	{
		$employee = new EmployeeForm;
		$cluster_name = new ClusterForm;
		if ($_POST['Department'] == 'All' && $_POST['cluster_name'] == 'All') {
			$dept_vise_emp_data = $employee->getdata();
		}
		else if($_POST['Department'] != 'All' && $_POST['cluster_name'] == 'All')
		{
			$where = 'where Department = :Department';
			$list = array('Department');
			$data = array($_POST['Department']);
			$dept_vise_emp_data = $employee->get_employee_data($where,$data,$list);
		}
		else if ($_POST['Department'] == 'All' && $_POST['cluster_name'] != 'All') {
			$where = 'where cluster_name = :cluster_name';
			$list = array('cluster_name');
			$data = array($_POST['cluster_name']);
			$dept_vise_emp_data = $employee->get_employee_data($where,$data,$list);
		}
		else if ($_POST['Department'] != 'All' && $_POST['cluster_name'] != 'All') {
			$where = 'where Department = :Department and cluster_name = :cluster_name';
			$list = array('Department','cluster_name');
			$data = array($_POST['Department'],$_POST['cluster_name']);
			$dept_vise_emp_data = $employee->get_employee_data($where,$data,$list);
		}
		//print_r($dept_vise_emp_data);die();	
		//$diff_Department = $employee->get_department_list();
		$diff_Department = $employee->get_distinct_list('Reporting_officer1_id','where 1');
		$dep_head_data = '';
		for ($i=0; $i < count($diff_Department); $i++) { 
			$where = 'where Email_id = :Email_id';
			$list = array('Email_id');
			$data = array($diff_Department[$i]['Reporting_officer1_id']);
			$dep_head_data[$i] = $employee->get_employee_data($where,$data,$list);
		}
		$diff_cluster = $cluster_name->get_distinct_list('cluster_name','where 1');		
		//print_r($diff_cluster);die();
		$print_data = '';
		$cls_data = '';
		 if (isset($diff_cluster) && count($diff_cluster)>0) {
                foreach ($diff_cluster as $row1) {
                    // echo '<option value="'.$row1['cluster_name'].'">'.$row1['cluster_name'].'</option>';
                    if ($cls_data == '') {
                    	$cls_data = '<option value="'.$row1['cluster_name'].'">'.$row1['cluster_name'].'</option>';
                    }
                    else
                    {
                    	$cls_data = $cls_data.'<option value="'.$row1['cluster_name'].'">'.$row1['cluster_name'].'</option>';
                    }
       
                }
            }
        $dpt_data = '';
		if (isset($diff_Department) && count($diff_Department)>0) {
			$cnt = 0;
            foreach ($diff_Department as $row1) {
                    // echo '<option value="'.$row1['cluster_name'].'">'.$row1['cluster_name'].'</option>';
                    if ($dpt_data == '') {
                    	$dpt_data = '<option value="'.$row1['Reporting_officer1_id'].'">'.$dep_head_data[$cnt]['0']['Emp_fname']." ".$dep_head_data[$cnt]['0']['Emp_lname'].'</option>';
                    }
                    else
                    {
                    	$dpt_data = $dpt_data.'<option value="'.$row1['Reporting_officer1_id'].'">'.$dep_head_data[$cnt]['0']['Emp_fname']." ".$dep_head_data[$cnt]['0']['Emp_lname'].'</option>';
                    }
       				$cnt++;
                }
         }
		foreach ($dept_vise_emp_data as $row) {
			if ($print_data == '') {
				$tr = '<tr>';
				$td = '<td><input id="checkbox1" class="md-check" type="checkbox" value="'.$row['Employee_id'].'"></td>'.'<td>'.$row['Employee_id'].'</td>'.'</td>'.'<td>'.$row['Emp_fname'].'</td>'.'<td>'.$row['Designation'].'</td>'.'<td>'.$row['Department'].'</td>'.'<td>'.$row['Reporting_officer1_id'].'</td>'.'<td>
				 <select class="form-control change_dpt_head" style="width: 186px;"name="get_cluster">
		                        <option value="All">All</option>'.$cls_data.'</select></td>'.'<td>
				<select class="form-control" style="width: 186px;"name="get_cluster" id="get_cluster_dept">
		                        <option value="All">All</option>'.$dpt_data.'</select></td>';
				$cls_tr = '</tr>';
				$print_data = $tr.$td.$cls_tr;
			}
			else
			{
				$tr = '<tr>';
				$td = '<td><input id="checkbox1" class="md-check" type="checkbox" value="'.$row['Employee_id'].'"></td>'.'<td>'.$row['Employee_id'].'</td>'.'<td>'.$row['Emp_fname'].'</td>'.'<td>'.$row['Designation'].'</td>'.'<td>'.$row['Department'].'</td>'.'<td>'.$row['Reporting_officer1_id'].'</td>'.'<td>
				 <select class="form-control change_dpt_head cluster_based_id-'.$row['Employee_id'].'" style="width: 186px;"name="get_cluster">
		                        <option value="All">All</option>'.$cls_data.'</select></td>'.'<td>
				<select class="form-control dept_based_id-'.$row['Employee_id'].'" style="width: 186px;"name="get_cluster" id="get_cluster_dept">
		                        <option value="All">All</option>'.$dpt_data.'</select></td>';
				$cls_tr = '</tr>';
				$print_data = $print_data.$tr.$td.$cls_tr;
			}			
		}
		print_r($print_data);
	}

	function actionchng_dept_head()
	{
		$employee = new ClusterForm;
		$employee_data = new EmployeeForm;
		if (isset($_POST['cluster_name']) && $_POST['cluster_name'] != 'All') {
			$where = 'where cluster_name="'.$_POST['cluster_name'].'"';
		}
		else
		{
			$where = 'where cluster_name="All"';
		}

		//$diff_Department = $employee->get_department_list();
		$diff_cluster = $employee->get_distinct_list('cluster_appraiser',$where);
		$dep_head_data = '';
		for ($i=0; $i < count($diff_cluster); $i++) { 
			$where1 = 'where Email_id = :Email_id';
			$list1 = array('Email_id');
			$data1 = array($diff_cluster[$i]['cluster_appraiser']);
			$dep_head_data[$i] = $employee_data->get_employee_data($where1,$data1,$list1);			
		}		
		//print_r($dep_head_data);die();
		$print_data = '';
		$cls_data = '';
		 if (isset($diff_cluster) && count($diff_cluster)>0) {
		 	$cnt = 0;
                foreach ($diff_cluster as $row1) {
                    // echo '<option value="'.$row1['cluster_name'].'">'.$row1['cluster_name'].'</option>';
                    if ($cls_data == '') {
                    	$cls_data = '<option value="'.$row1['cluster_appraiser'].'">'.$dep_head_data[$cnt]['0']['Emp_fname']." ".$dep_head_data[$cnt]['0']['Emp_lname'].'</option>';
                    }
                    else
                    {
                    	$cls_data = $cls_data.'<option value="'.$row1['cluster_appraiser'].'">'.$dep_head_data[$cnt]['0']['Emp_fname']." ".$dep_head_data[$cnt]['0']['Emp_lname'].'</option>';
                    }
                    $cnt++;
       
                }
            }
		print_r($cls_data);
	}

	function actionchng_dept_head_data()
	{
		if (isset($_POST['employee_id'])) {
			$emp_id = explode(',',$_POST['employee_id']);
			$emp_id_cluster = explode(';',$_POST['clustr_name_list']);
			$emp_id_head = explode(';',$_POST['reporting_head']);
			$update_count = 0;
			//print_r($emp_id);die();
			for ($i=0; $i < count($emp_id); $i++) { 
				$employee = new EmployeeForm;
				$data = array(
					'cluster_name' => $emp_id_cluster[$i],
					'Reporting_officer1_id' => $emp_id_head[$i], 
				);
				$update = Yii::app()->db->createCommand()->update('Employee',$data,'Employee_id=:Employee_id',array(':Employee_id'=>$emp_id[$i]));
				//print_r($update);
				if($update!=0)
				{
					$update_count++;
				}
				else
				{
					$update_count = 0;
				}

			}
			if ($update_count!=0) {
				print_r("success");
			}
			else
			{
				print_r($emp_id_head);die();
			}
		}

	}
	
}