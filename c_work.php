<?php 
	include("model/m_work.php");
	/**
	 * 
	 */
	class C_work
	{

		public function index(){
			$m_work = new M_work(); //tạo model M_work
			$work = $m_work->getWork();
			return array('work'=>$work);
		}

		function addWork()
		{
			if(isset($_POST['submit'])){
			$error=null;
			$Workname = $_POST['Workname'];
			$Startingdate = $_POST['Startingdate'];
			$Endingdate = $_POST['Endingdate'];
			$Status = $_POST['Status'];
			if($Workname =="" || $Startingdate =="" || $Endingdate =="" || $Status ==""){
				$error.='Nhập thông tin chưa đầy đủ ! <br>';
			}
			else{
				$work = new M_work();
				$check = $work->checkWork($Workname);
				if(count($check) == 0){
					if($work->addWork($Workname,$Startingdate,$Endingdate,$Status) == true)
					{
						//$error.='Nhập work thành công !<br>';
						header("Location: index.php");
						unset($_POST);
					}
					else{
						$error.='Thất bại !<br>';
					}
				}
				else
				{
					$error.='work đã có !<br>';
				}
			}
		}
		if(isset($error))
		{
			echo"
			<div class='alert alert-warning alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong>$error</strong> 
			</div>";
		}
		}

		function editWork()
		{
			if(isset($_POST['submit'])){
			$error=null;
			$Id=$_POST['Id'];
			$Workname = $_POST['Workname'];
			$Startingdate = $_POST['Startingdate'];
			$Endingdate = $_POST['Endingdate'];
			$Status = $_POST['Status'];
			if($Id==""||$Workname =="" || $Startingdate =="" || $Endingdate =="" || $Status ==""){
				$error.='Nhập thông tin chưa đầy đủ ! <br>';
			}
			else{
				$work = new M_work();
				$check = $work->checkId($Id);
				if(count($check) >= 1){
					if($work->editWork($Id,$Workname,$Startingdate,$Endingdate,$Status) == true)
					{
						$error.='Edit work thành công !<br>';
						unset($_POST);
					}
					else{
						$error.='Thất bại !<br>';
					}
				}
				else
				{
					$error.='work Không có !<br>';
				}
			}
		}
		if(isset($error))
		{
			echo"
			<div class='alert alert-warning alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong>$error</strong> 
			</div>";
		}
		}

	function delWork()
		{
			if(isset($_POST['submit'])){
			$error=null;
			$Id = $_POST['Id'];
			$Workname = $_POST['Workname'];
			if($Id =="" || $Workname ==""){
				$error.='Nhập thông tin chưa đầy đủ ! <br>';
			}
			else{
				$work = new M_work();
				$check = $work->checkIdName($Id,$Workname);
				if(count($check) >= 1){
					if($work->delWork($Id,$Workname) == true)
					{
						$error.='Xóa work thành công !<br>';
						unset($_POST);
					}
					else{
						$error.='Thất bại !<br>';
					}
				}
				else{
					$error.='Không trùng Wordname hoặc Id !<br>';
				}
			}
		}
		if(isset($error))
		{
			echo"
			<div class='alert alert-warning alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong>$error</strong> 
			</div>";
		}
	}


	}
 ?>