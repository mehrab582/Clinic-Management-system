<?php require_once('header.php'); ?>
<?php require_once('body.php'); ?>
			<?php  require_once('menu.php'); ?>
	

<style>

table, th, td {
     border: 1px solid black;
	 height:40px;
	 width:900px;
	 text-align:center;
}
</style>
	<div style="margin:auto; align:center; background:#white; color:black; height:auto; width:900px; padding-top:20px; overflow:hidden; clear:both;">

		<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_patient";

// Create connection
		$conn =mysqli_connect('localhost', 'root', '', 'db_patient');
// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$res = mysqli_query($conn,"select *from tb_room");
			$sqlbgroup ="SELECT id FROM tb_room ";
	
			$sql = "SELECT *FROM tb_room";
			$result = mysqli_query($conn, $sql);

			if(isset($_POST["submit"]))
			{

				$search_item = $_POST['id'];

				$fetch_res = mysqli_query($conn,"select * from tb_room where id ='$search_item' ");

				while($row = mysqli_fetch_array($fetch_res)) 
					{
						
		  
		
							echo "<h2 style='color:white;background:blue; text-align:center;'><td> Room Number : " . $row['r_no'] . " </h2>"; 
		
							echo '<h3 align="center" class="userbox"><table>';
							echo "<tr><th>Room Number </th> <th>Room Type</th> <th>Room Status</th> </tr>";
				
							echo "<tr><td> " . $row['r_no'] . "</td>";
				
							echo "<td> " . $row['r_type'] . "</td>";
			   
							echo "<td> " . $row['r_status'] . "</td></tr>";
			   
							
				

			
					 
					 
							echo '</table></h3>';
							 echo "<h4 style='color:gray;background:pink; text-align:center;'>Registry Managment</h4>"; 
						
					
					}










				if (mysqli_num_rows($result) > 0 )
				{
    // output data of each row
					while($row = mysqli_fetch_assoc($result)) 
					{
						$sqlid=$row["r_no"];
						$bid=$_POST["id"];
		 
		 
						if ($sqlid == $bid)
						{
							echo "<h2 style='color:white;background:blue; text-align:center;'><td> Room Number : " . $row['r_no'] . " </h2>"; 
		
							echo '<h3 align="center" class="userbox"><table>';
							echo "<tr><th>Room Number </th> <th>Room Type</th> <th>Room Status</th> </tr>";
				
							echo "<tr><td> " . $row['r_no'] . "</td>";
				
							echo "<td> " . $row['r_type'] . "</td>";
			   
							echo "<td> " . $row['r_status'] . "</td></tr>";
			   
							
				

			
					 
					 
							echo '</table></h3>';
							 echo "<h4 style='color:gray;background:pink; text-align:center;'>Registry Managment</h4>"; 
						}
						else if (empty($bid))
						{
						echo '<script type="text/javascript">
							window.location = "room_search.php"
							</script>';
						}
					}

	
				} 
				else 
				{
				echo "0 results";
				}

			}

		mysqli_close($conn);
	
		?>
		<a class="btn btn-primary" href="search_form.php" type="button">Back</a>

	</div>						
   
 </body>
</html>

             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>	
             <br>		

           <div class="footer">
				<center><h3>&copy;Tanjina Jahan (14303029)</h3></center>
			</div>	
		</div>
	</div>
</body>
</html>