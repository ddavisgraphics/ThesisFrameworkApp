<h5> SQL </h5>
<div class="sqlEditor syntaxHighlight">UPDATE `Employee` SET firstName=?, lastName=? WHERE firstName=?</div>

<h5> PHP </h5>
<div class="phpEditor syntaxHighlight mediumBox"><?php print htmlspecialchars('<?php
$db  = db::get($localvars->get("dbConnectionName")); // Created Automatically with engine
$sql = "UPDATE `Employee` SET firstName=?, lastName=? WHERE firstName=?"; // SQL Statement

$insertData = array(
    "Jon"
    "Snow",
    "Arya",
);

$sqlResult = $db->query($sql,$insertData); // Sends it to the DB

// This shows if we have a bad SQL Statement
if ($sqlResult->error()) {
    // do this
}
?>'); ?>
</div>
