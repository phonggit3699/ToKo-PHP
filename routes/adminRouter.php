<?php
class adminRouter
{
    public $name = "page";
    public static $sourcePath;
    // public $sourcePathCss = ""

    public function __construct()
    {
        if ($this->getGET("action")=="logout"){
            unset($_SESSION["userAdID"]);
            setcookie("login","", time() - 3600);
            header('Location: http://localhost/toko/views/admin/login.php');
        }
    }

    public function getSourcePath($sourcePath = ""){
        if($sourcePath){
            self::$sourcePath = $sourcePath;
        }
        return $this;
    }

    public function getGET($name){
        if($name !==null){
            return isset($_GET[$name]) ? $_GET[$name] : null;
        }
        return $_GET;
    }

    public function getPOST($name =null){
        if($name !==null){
            return isset($_POST[$name]) ? $_POST[$name] : null;
        }
        return $_POST;
    }

    public function router(){
        $url = $this->getGET($this->name);
        if (!$url) {
            $url = "product";
        } 
        $path = self::$sourcePath."/".$url.".php";
        if(file_exists($path)){
            return include_once($path) ;
        }
        else{
            echo " PAGE NOT FOUND 404";
        }
    }

    public function routerCss($sourcePathCss){
        $url = $this->getGET($this->name);
        if (!$url) {
            $url = "product";
        } 
        $path = $sourcePathCss.ucfirst($url).".css";
        if(file_exists($path)){
            return $path;
        }
    }
}
