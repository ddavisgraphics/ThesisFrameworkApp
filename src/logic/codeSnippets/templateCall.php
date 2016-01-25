<div class="phpEditor sytnaxHighlight mediumBox"><?php print htmlspecialchars('<?php function getCompanyName($id){
        $localvars   = localvars::getInstance();
        $validate    = new validate;
        $customers   = new Customers;
        $returnValue = "";
        if(isnull($id) && !$validate->integer($id)){
            throw new Exception("not valid integer");
            return false;
        }
        else {
            $data        = $customers->getRecords($id);
            $returnValue = $data[0]["companyName"];
            return $returnValue;
        }
    }?>');?>
</div>

<h4> Examining Classes </h4>
<p> PHP also uses logic in classes, and it can be a little more difficult to use.  I prefer functional programming to classes, but classes put everything in an organizational namespace.  That is why many of my classes will be made up of small static functions that provide help in different ways. </p>

<div class="phpEditor sytnaxHighlight bigBox"><?php print htmlspecialchars('<?php class Customers {
public function getRecords($id = null){
    try {
        // call engine
        $engine    = EngineAPI::singleton();
        $localvars = localvars::getInstance();
        $db        = db::get($localvars->get("dbConnectionName"));
        $sql       = "SELECT * FROM `customers`";
        $validate  = new validate;
        // test to see if Id is present and valid
        if(!isnull($id) && $validate->integer($id)){
            $sql .= sprintf("WHERE id = %s LIMIT 1", $id);
        }
        // if no valid id throw an exception
        if(!$validate->integer($id) && !isnull($id)){
            throw new Exception("I want to be tried!");
        }
        // get the results of the query
        $sqlResult = $db->query($sql);
        // if return no results
        // else return the data
        if ($sqlResult->error()) {
            throw new Exception("ERROR SQL" . $sqlResult->errorMsg());
        }
        if ($sqlResult->rowCount() < 1) {
           return "There are no customers in the database.";
        }
        else {
            $data = array();
            while($row = $sqlResult->fetch()){
                $data[] = $row;
            }
            return $data;
        }
    } catch (Exception $e) {
        errorHandle::errorMsg($e->getMessage());
    }
}

public function deleteRecord($id = null){
    try {
        // call engine
        $engine    = EngineAPI::singleton();
        $localvars = localvars::getInstance();
        $db        = db::get($localvars->get("dbConnectionName"));
        $validate  = new validate;
        // test to see if Id is present and valid
        if(isnull($id) || !$validate->integer($id)){
            throw new Exception(__METHOD__."() -Delete failed, improper id or no id was sent");
        }
        // SQL Results
        $sql = sprintf("DELETE FROM `customers` WHERE id=%s LIMIT 1", $id);
        $sqlResult = $db->query($sql);
        if(!$sqlResult) {
            throw new Exception(__METHOD__."Failed to delete customers.");
        }
        else {
            return "Successfully deleted the message";
        }
    } catch (Exception $e) {
        errorHandle::errorMsg($e->getMessage());
        return $e->getMessage();
    }
}
public function renderDeleteData($id){
    try {
        $engine    = EngineAPI::singleton();
        $localvars = localvars::getInstance();
        $validate  = new validate;
        if(isnull($id) || !$validate->integer($id)){
            throw new Exception("Id is null or not an integer.  Please try again.");
        }
        else {
            $dataRecord = self::getRecords($id);
            $output = "";
            foreach($dataRecord as $data){
                 $output .= sprintf("<div class="customerRecord">
                                        <h2 class="company">%s</h2>
                                        <div class="name">
                                            <strong>Customer Name:</strong>
                                            %s
                                        </div>
                                        <div class="contactInfo">
                                            <div class="email">%s</div>
                                            <div class="phone">%s</div>
                                            <div class="website"><a href="%s">%s</a></div>
                                        </div>
                                        <div class="actions">
                                            <a href="/customers/delete/%s"> <span class="glyphicon glyphicon-ok"></span> </a>
                                            <a href="/customers"> <span class="glyphicon glyphicon-remove"></span> </a>
                                        </div>
                                    </div>",
                        $data["companyName"],
                        $data["firstName"]." ".$data["lastName"],
                        $data["email"],
                        $data["phone"],
                        $data["website"],
                        $data["website"],
                        $data["ID"]
                );
            }
            return $output;
        }
    } catch (Exception $e) {
        errorHandle::errorMsg($e->getMessage());
        return $e->getMessage();
    }
}
public function renderSingleRecord($id){
    try {
        $engine    = EngineAPI::singleton();
        $localvars = localvars::getInstance();
        $validate  = new validate;
        if(isnull($id) || !$validate->integer($id)){
            throw new Exception("Id is null or not an integer.  Please try again.");
        }
        else {
            $dataRecord = self::getRecords($id);
            $output = "";
            foreach($dataRecord as $data){
                $output .= sprintf("<div class="customerRecord">
                                        <h2 class="company">%s</h2>
                                        <div class="name">
                                            <strong>Customer Name:</strong>
                                            %s
                                        </div>
                                        <div class="contactInfo">
                                            <div class="email">%s</div>
                                            <div class="phone">%s</div>
                                            <div class="website"><a href="%s">%s</a></div>
                                        </div>
                                        <div class="actions">
                                            <a href="/customers/edit/%s"> <span class="glyphicon glyphicon-edit"></span> </a>
                                            <a href="/customers/delete/%s"><span class="glyphicon glyphicon-trash"></span> </a>
                                        </div>
                                    </div>",
                        $data["companyName"],
                        $data["firstName"]." ".$data["lastName"],
                        $data["email"],
                        $data["phone"],
                        $data["website"],
                        $data["website"],
                        $data["ID"],
                        $data["ID"]
                );
            }
            return $output;
        }
    } catch (Exception $e) {
        errorHandle::errorMsg($e->getMessage());
        return $e->getMessage();
    }
}
public function getJSON($id = null){
    $validate = new validate;
    if(!isnull($id) && $validate->integer($id)){
        $data = self::getRecords($id);
    } else {
        $data = self::getRecords();
    }
    return json_encode($data);
}
}
?>');?>
</div>
