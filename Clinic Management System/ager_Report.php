<?php require_once('header.php'); ?>


<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>

            	
             	

<style>
table, th, td {
     border: 1px solid black;
	 border-collapse:collapse;
     text-align: center;
     margin: auto;
     width: 860px;
}
</style>
	<div >
		
		
		<form action="" method="post">

		   <p align="center"> 
				Patient ID :<input name="id" type="text" placeholder="Patient ID">
				<input type="submit" name='submit' value="Search"><br><br>
			</p>
		</form>		
		
			
				
				<center><h2><?php if(isset($success)){ echo $success; }  ?></h2></center>
					
	</div>	

			<?php
			$conn =new mysqli('localhost', 'root', '', 'db_patient');
			
			$id =$_REQUEST['id'];

			$result = mysqli_query($conn,"SELECT * FROM tb_patient  WHERE p_id='$id'");
			$test = mysqli_fetch_array($result);
			if (!$result) 
			            {
			            die("Error: Data not found..");
			            }
			                        $fn1=$test['p_id'] ;
			                        $fn2= $test['p_name'] ;                          
			                        $fn3=$test['p_age'] ;
			                        $fn4=$test['p_gender'] ;
									$fn5=$test['p_address'] ;
			                        $fn6= $test['p_contact'] ;                          
			                        $fn7=$test['admission_date'] ;
			                        $fn8=$test['discharge_date'] ;
									$fn9=$test['disease'] ;
			
			$id =$_REQUEST['id'];

			$result = mysqli_query($conn,"SELECT * FROM tb_doctor  WHERE d_id='$id'");
			$test = mysqli_fetch_array($result);
			if (!$result) 
			            {
			            die("Error: Data not found..");
			            }
			                        $fn10=$test['d_id'] ;
			                        $fn11= $test['d_name'] ;                          
			                        $fn12=$test['dept'] ;
			$id =$_REQUEST['id'];

			$result = mysqli_query($conn,"SELECT * FROM tb_room  WHERE 	r_no='$id'");
			$test = mysqli_fetch_array($result);
			if (!$result) 
			            {
			            die("Error: Data not found..");
			            }
			                        $fn13=$test['r_no'] ;
			                        $fn14= $test['r_type'] ;                          
			                        $fn15=$test['r_status'] ;                        
			

			$id =$_REQUEST['id'];  
			

			$result = mysqli_query($conn,"SELECT * FROM tb_bill WHERE bill_no='$id'");
			$test = mysqli_fetch_array($result);
			if (!$result) 
			            {
			            die("Error: Data not found..");
			            }
			                        $fn16=$test['bill_no'] ;
			                        $fn17=$test['date'] ;
			                        $fn18= $test['room_charge'];
									$fn19= $test['pathology_fees'];
									$fn20= $test['doctor_fees'];
			                        

			mysqli_close($conn);
			?>
<!--             <br>
            <br>
            <br>
            <br>
            <br> -->
            <br>

<div id="printableArea">
<h3>IBN SINA DIAGONISTIC & CONSULTATION CENTER</h3>	
			<div class="table">
				
<!-- 					<h2 align="center"> Patient Discharge </h2>
					<table border="1" align="center"> -->


									<div class="bill_box">	
										<div class="client">
											<?php 

											$id = $fn1;
										      $name = $fn2;
											  $age = $fn3;
											  $gender = $fn4;
											  $address = $fn5;
											  $contact = $fn6;
											  $admission = $fn7;
											  $discharge = $fn8;
											  $disease = $fn9;
											  $dname= $fn11;
											  $rno=$fn13;
											  $rtype=$fn14;
											  $roomcharge = $fn18;
											  $pathologyfee = $fn19;
											  $doctorfee = $fn20;
											  
											  $total = ($roomcharge+$pathologyfee+$doctorfee);
											  
											?>
											
											<label for="">Patient ID :</label><?php echo$id ?><br><br>
											<label for="">Patient Name :</label><?php echo$name ?>
											<label for="">Age :</label><?php echo$age?>
											<label for="">Gender :</label><?php echo$gender?>
											<label for="">Patient Address :</label><?php echo$address?><br><br>
											<label for="">Patient Contact :</label><?php echo $contact?>
											
											<label for="">Date of Admission :</label><?php echo $admission?>
											<label for="">Date of Discharge :</label><?php echo $discharge?><br><br>
											<label for="">Disease :</label><?php echo $disease?>
											<label for="">Doctor Name :</label><?php echo $dname?>
											<label for="">Room Number :</label><?php echo $rno?>
											<label for="">Room Type :</label><?php echo $rtype?>
											
											<br><br>
									</div>
									<div class="bill">
									<br><br><br>
										<table>
											<tr>
												<th>SL</th>
												<th>Description</th>
												<th>Taka</th>
												
											</tr>
											<tr>
												<td>1.</td>
												<td>Room Charge</td>
												<td><?php echo $roomcharge?></td>

											</tr>
											<tr>
												<td>2.</td>
												<td>Pathology Fees</td>
												<td><?php echo $pathologyfee?></td>
											</tr>
											<tr>
												<td>3.</td>
												<td>Doctor Fees</td>
												<td><?php echo $doctorfee ?></td>
											</tr>
											
											
											
											
											<tr>
												<td>4.</td>
												<td>Total</td>
												<td>TK-<?php echo $total?></td>
											</tr>
										</table>
									</div>
									<div class="sign">
										<div class="emp_sign">
											    <h4>Employee :</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
										<div class="client_sign">
											    <h4>Patient Party:</h4>
											<label>Sign.............</label><br>
											<label>Date.............</label><br>
										</div>
									</div>

							    
<!-- 				</table> -->
				</div>
</div>	
<div class="footer">
				<center><h3>&copy;Tanjina Jahan (14303029)</h3></center>
		</div> 
		
</div>
					                    <input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print" />




										<script>
										function printDiv(divName) {
										    var printContents = document.getElementById(divName).innerHTML;
										    var originalContents = document.body.innerHTML;
										    document.body.innerHTML = printContents;
										    window.print();
										    document.body.innerHTML = originalContents;
										}</script>

										    
			
<!-- This is for print portin for our print perpose -->



						
			 	

              <!-- the end of mid -->
	