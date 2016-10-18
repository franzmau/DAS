<?php
function show_table($id){
	//create a table and a row for each report the user has. 

	 define('DB_SERVER', 'localhost');
	 define('DB_USERNAME', 'root');
	 define('DB_PASSWORD', 'password');
	 define('DB_DATABASE', 'Das_Project');
	 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);


     $ses_sql=mysqli_query($db,"select * from Report where id_user = '$id' ");
			 
	 $count = mysqli_num_rows($ses_sql);
	 if($count>0){
	 	echo "<h3> Your older financial plans</h3>
	 	<table style='text-align: center; width:100%;'><tr>
				    <th  style='text-align: center;'>Income </th>
				    <th  style='text-align: center;'>Expense</th>
				    <th  style='text-align: center;'>Date</th>
				  </tr>

	 	";
	 		while($row = mysqli_fetch_array($ses_sql)){   //Creates a loop to loop through results
		echo "<form action='../Controller/action.php' method='post'><tr><td style='text-align: center;'> " . $row['income'] . "</td><td  style='text-align: center;' >" . $row['costs'] . "</td><td  style='text-align: center;'>" . $row['date'] . "</td><td  style='text-align: center;' > <input type='hidden' name='id' value=". $row['id']." /></td> <td>
          <i><input  style='text-align: center;' type='submit' name='delete'  onclick='return confirm(\"Are you sure you want to delete it? You won t be able to recover again \")' value='Delete'/></i> <i><input name='view' type='submit' value='view'/></i> </td>  </tr></form>";  
			}
			echo "</table>";
	   	

	 }


}
?>