<?php
	
		require("db.php");
		
		@$id 			= $_POST['deduction_id'];
		@$philhealth 	= $_POST['MEDICAL'];
		@$bir 			= $_POST['PF'];
		@$gsis 			= $_POST['INCOME_TAX'];
		@$love 			= $_POST['PROFESSION_TAX'];
		@$loans 		= $_POST['LOANS'];


		$sql = mysqli_query($c,"UPDATE deductions SET PF='$bir', INCOME_TAX='$gsis', PROFESSION_TAX='$love', LOANS='$loans', MEDICAL='$philhealth' WHERE deduction_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Deductions successfully updated...');
		            window.location.href='home_deductions.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>