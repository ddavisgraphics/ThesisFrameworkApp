<h5> SQL </h5>
<div class="sqlEditor syntaxHighlight">SELECT * FROM `Employee`; -- selects all items from the employee db
SELECT * FROM `Employee` WHERE `employeeID`=2 LIMIT 1; -- Selects only that employeeID expected one results so we can limit it to one results</div>

<h5> PHP </h5>
<div class="phpEditor syntaxHighlight mediumBox"><?php print htmlspecialchars('<?php
$db  = db::get($localvars->get("dbConnectionName")); // Created Automatically with engine
$sql = "SELECT * FROM `Employee`"; // SQL Statement
$sqlResult = $db->query($sql); // Sends it to the DB

// This shows if we have a bad SQL Statement
if ($sqlResult->error()) {
    // do this
}

// This shows if there are no
if ($sqlResult->rowCount() < 1) {
   // do this
}

// Loops through the data rows and populates a new array item for use later
$data = array();
while($row = $sqlResult->fetch()){
    $data[] = $row;
}
?>'); ?>
</div>
