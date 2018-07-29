<?php 
	include("database.php");
	/**
	 * 
	 */
	class M_work extends database
	{
		//CHECK WORKNAME
		function checkWork($Workname){
			$sql="SELECT *FROM work WHERE Workname='$Workname' ";
			$this->setQuery($sql);
			return $this->loadAllRows1(array($Workname));
		}
		// ADD WORK
		function addWork($Workname,$Startingdate,$Endingdate,$Status){
			$sql="INSERT INTO work(Workname,Startingdate,Endingdate,Status) VALUES('$Workname','$Startingdate','$Endingdate','$Status')";
			$this->setQuery($sql);
			return $this->execute(array($Workname,$Startingdate,$Endingdate,$Status));	
		}
		//check id
		function checkId($Id){
			$sql="SELECT * FROM work WHERE Id='$Id'";
			$this->setQuery($sql);
			return $this->loadAllRows1(array($Id));
		}
		//edit
		function editWork($Id,$Workname,$Startingdate,$Endingdate,$Status){
			$sql="UPDATE work SET Workname='$Workname',Startingdate='$Startingdate',Endingdate='$Endingdate',Status='$Status' WHERE Id='$Id'";
			$this->setQuery($sql);
			return $this->execute(array($Id,$Workname,$Startingdate,$Endingdate,$Status));	
		}
		//check id and workname
		function checkIdName($Id,$Workname){
			$sql="SELECT * FROM work WHERE Id='$Id' AND Workname='$Workname'";
			$this->setQuery($sql);
			return $this->loadAllRows1(array($Id,$Workname));
		}
		//del

		function delWork($Id,$Workname){
			$sql="DELETE FROM work WHERE Id='$Id' AND Workname='$Workname'";
			$this->setQuery($sql);
			return $this->execute(array($Id,$Workname));
		}
		//lấy danh sách tất cả các work
		function getWork()
		{
			$sql = 'SELECT * FROM work';
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}
 ?>