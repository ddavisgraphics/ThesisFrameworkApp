<h5> SQL </h5>
<div class="sqlEditor syntaxHighlight">INSERT INTO `Employee`(birthDay,firstName,lastName,gender,hireDate,salary) VALUES (?,?,?,?,?,?);</div>

<h5> PHP </h5>
<div class="phpEditor syntaxHighlight mediumBox"><?php print htmlspecialchars('<?php
$db  = db::get($localvars->get("dbConnectionName")); // Created Automatically with engine
$sql = "INSERT INTO `Employee`(birthDay,firstName,lastName,gender,hireDate,salary) VALUES (?,?,?,?,?,?)"; // SQL Statement

$insertData = array(
    "1999-02-24",
    "Arya",
    "Stark",
    "male",
    "2032-05-18",
    "Free",
);

$sqlResult = $db->query($sql,$insertData); // Sends it to the DB

// This shows if we have a bad SQL Statement
if ($sqlResult->error()) {
    // do this
}
?>'); ?>
</div>
