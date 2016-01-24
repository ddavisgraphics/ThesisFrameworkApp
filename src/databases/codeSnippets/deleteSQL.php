<h5> Generic SQL </h5>
<div class="sqlEditor syntaxHighlight">DELETE FROM table_name
WHERE column=value;</div>

<h5> PHP </h5>
<div class="phpEditor syntaxHighlight mediumBox"><?php print htmlspecialchars('<?php
$db  = db::get($localvars->get("dbConnectionName")); // Created Automatically with engine
$sql = "DELETE FROM `Employee` WHERE firstName=?"; // SQL Statement
$insertData = array("Ned");
$sqlResult = $db->query($sql,$insertData); // Sends it to the DB

// This shows if we have a bad SQL Statement
if ($sqlResult->error()) {
    // do this
}
?>'); ?>
</div>
