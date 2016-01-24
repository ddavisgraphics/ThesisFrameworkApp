<div class="phpEditor syntaxHighlight smallBox"><?php print htmlspecialchars('<?php
// instantiate router and add clean urls
    $router = router::getInstance();
    $router->defineRoute("/", "displayRoute");
    $router->defineRoute("/{model}", "displayRoute");
    $router->defineRoute("/{model}/{action}", "displayRoute");
    $router->defineRoute("/{model}/{action}/{item}", "displayRoute");
    $router->route();
?>');?>
</div>

<h4> Display Route Function </h4>
<p> Engine leaves the rest up to you on how you want to use the router.  To keep in similar to Meteor and based on personal preference, I have created a few functions and classes that help developing and keeping organized. </p>

<div class="phpEditor syntaxHighlight smallBox"><?php print htmlspecialchars('<?php
function displayRoute($url, $vars){
    $localvars  = localvars::getInstance();
    $model  = (isset($vars["model"]) ? $vars["model"] : null);
    $action = (isset($vars["action"]) ? $vars["action"] : null);
    $item   = (isset($vars["item"]) ? $vars["item"] : null);
    // expected pages
    $expectedModels = array(
        "customers",
        "projects",
        "timeTracker"
    );
    if(in_array($model, $expectedModels)){
        $pageVariables = array(
            "model"  => ucfirst($model),
            "action" => $action,
            "item"   => $item
        );
        $view  = new View($model, $pageVariables);
    } else if(isnull($model) || $model == "/" || $model == "home"){
        $pageVariables = array(
            "model" => ucfirst($model)
        );
        $view = new View("Home", $pageVariables);
    }
    else {
        $pageVariables = array(
            "model" => ucfirst($model)
        );
        // send to 404 error
        $view  = new View("Error", $pageVariables);
    }
    $html  = $view->render();
    $localvars->set("content", $html);
}
?>');?>
</div>

<h4> Views Class </h4>
<div class="phpEditor syntaxHighlight smallBox"><?php print htmlspecialchars('<?php
 class View {
    public $templateExsist;
    public $path;
    public $variables;
    public $data;
    public function __construct($template, $variables = array()){
        try {
            $viewsPath = "/home/timeTracker/public_html/src/includes/views/";
            $file      = $viewsPath . strtolower($template) . ".php";
            $this->path = $file;
            $this->variables = $variables;
            $this->extractVariables();
            if(file_exists($file)){
                $this->templateExsist = true;
            } else {
                throw new Exception("Template " . $template . " not found!");
            }
        } catch (Exception $e) {
            errorHandle::errorMsg($e->getMessage());
            $this->templateExsist = false;
        }
    }
    public function render(){
        try {
            $file  = $this->path;
            if(isnull($file)){
                throw new Exception("Path is null.  We can\"t have a null path, something is crazy.");
            }
            ob_start();
            include($file);
            $renderView = ob_get_contents();
            ob_end_clean();
            return $renderView;
        } catch (Exception $e) {
            errorHandle::errorMsg($e->getMessage());
            return false;
        }
    }
    private function extractVariables(){
        $variables = $this->variables;
        foreach ($variables as $varName => $varValue) {
            $this->data[$varName] = $varValue;
        }
    }
}
?>');?>
</div>