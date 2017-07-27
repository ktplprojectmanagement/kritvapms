<?php

/**
 * This is the model class for table "IDP".
 *
 * The followings are the available columns in table 'IDP':
 * @property string $KPI_id
 * @property string $IDP_status
 * @property string $IDP_comment
 */
class IDPForm extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'IDP';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			///array('KPI_id, IDP_status, IDP_comment', 'required'),
			array('KPI_id, IDP_status', 'length', 'max'=>100),
			array('IDP_comment', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
// 			array('KPI_id, IDP_status, IDP_comment', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'KPI_id' => 'Kpi',
			'IDP_status' => 'Idp Status',
			'IDP_comment' => 'Idp Comment',
		);
	}

	function get_idp_data($where,$data,$list)
	{
		$connection=Yii::app()->db;
		$sql = "select * from IDP ".' '.$where;
		$command=$connection->createCommand($sql);
		for ($i=0; $i < count($list); $i++) { 
			$command->bindValue(":".$list[$i],$data[$i]);
		}
		$rows=$command->queryAll();
		//print_r($rows);die();
		return $rows;
	}

	function get_emp_idp_submitted($array,$year1)
	{
		
		$connection=Yii::app()->db;
		//$sql = "SELECT DISTINCT `Employee_id` FROM `IDP` WHERE (`Employee_id` IN (".$array.")) AND (`goal_set_year`='$year1')";
		$sql="SELECT DISTINCT `Employee_id` FROM `IDP` WHERE (`Employee_id` IN (".$array.")) AND (`goal_set_year`='$year1')";
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();		
		return $rows;
		$connection=Yii::app()->db;
	
	}

	
	function get_emp_idp_staus($status,$array,$year1){
		$connection=Yii::app()->db;
		$sql = "SELECT DISTINCT `Employee_id` FROM `IDP` WHERE (`Employee_id` IN (".$array.")) AND (`goal_set_year`='$year1') AND (`set_status`='$status')";
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();		
		return $rows;
		$connection=Yii::app()->db;
	}

	function get_emp_mididp_submitted($array,$year1)
	{
		
		$connection=Yii::app()->db;
		//SELECT * FROM `IDP` WHERE `Employee_id` IN ('10000014','111') AND `goal_set_year`='2016-2017' AND `mid_status`!='' 
		$sql = "SELECT DISTINCT `Employee_id` FROM `IDP` WHERE (`Employee_id` IN (".$array.")) AND (`goal_set_year`='$year1') AND (`mid_status`!='')";
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();		
		return $rows;
		$connection=Yii::app()->db;
	
	}
	function get_emp_mididp_notsubmitted($array,$year1)
	{
		
		$connection=Yii::app()->db;
		//SELECT * FROM `IDP` WHERE `Employee_id` IN ('10000014','111') AND `goal_set_year`='2016-2017' AND `mid_status`!='' 
		$sql = "SELECT DISTINCT `Employee_id` FROM `IDP` WHERE (`Employee_id` IN (".$array.")) AND (`goal_set_year`='$year1') AND (`mid_status`=''  )";
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();		
		return $rows;
		$connection=Yii::app()->db;
	
	}

		function get_yearEndIDP_submitted_team($array,$year1)
	{
		$connection=Yii::app()->db;
		$sql = "SELECT DISTINCT `Employee_id` FROM IDP WHERE (`Employee_id` IN (SELECT s.`Employee_id` FROM IDP as s WHERE `idp_final_status` != '')) AND (`Employee_id` IN (".$array.") AND (`goal_set_year`='$year1'))";
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();		
		return $rows;
	}
	function get_pending_yearEndIDP_team($array,$year1)
	{
		//echo $year1;die();
		$connection=Yii::app()->db;
		$sql ="SELECT DISTINCT `Employee_id` FROM IDP WHERE (`Employee_id` IN (SELECT s.`Employee_id` FROM IDP as s WHERE `idp_final_status` = 'Pending')) AND (`Employee_id` IN (".$array.") AND (`goal_set_year`='$year1'))";
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();
		return $rows;
	}
	function get_approved_yearEndIDP_team($array,$year1)
	{
		//echo $year1;die();
		$connection=Yii::app()->db;
		$sql ="SELECT DISTINCT `Employee_id` FROM IDP WHERE (`Employee_id` IN (SELECT s.`Employee_id` FROM IDP as s WHERE `idp_final_status` = 'Approved')) AND (`Employee_id` IN (".$array.") AND (`goal_set_year`='$year1'))";
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();
		return $rows;
	}
	function get_emp_yearEndidp_submitted($array,$year1)
	{
		
		$connection=Yii::app()->db;
		//SELECT * FROM `IDP` WHERE `Employee_id` IN ('10000014','111') AND `goal_set_year`='2016-2017' AND `mid_status`!='' 
		$sql = "SELECT DISTINCT `Employee_id` FROM `IDP` WHERE (`Employee_id` IN (".$array.")) AND (`goal_set_year`='$year1') AND (`idp_final_status`!='')";
		$command=$connection->createCommand($sql);
		$rows=$command->queryAll();		
		return $rows;
		$connection=Yii::app()->db;
	
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('KPI_id',$this->KPI_id,true);
		$criteria->compare('IDP_status',$this->IDP_status,true);
		$criteria->compare('IDP_comment',$this->IDP_comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IDP the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}