<div class="container">
  <h2>Employees</h2>          
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Employee ID</th>
        <th>National ID Number</th>
        <th>Login ID</th>
        <th>Title</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach($employeeArray as $employee) {
    		echo "<tr>";
			echo "<td>" . $employee->getEmployeeID() . "</td>";
			echo "<td>" . $employee->getNationalIDNumber() . "</td>";
			echo "<td>" . $employee->getLoginID() . "</td>";
			echo "<td>" . $employee->getTitle() . "</td>";
			echo "</tr>";
		} ?>
    </tbody>
  </table>
</div>