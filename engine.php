<?php
include_once('helpers/inflector_helper.php');

$db=new Mysqli("localhost","root","","php18002");

$sql="show tables";

$stmt=$db->prepare($sql);

$stmt->execute();

$tResult=$stmt->get_result();
$path="app/";
@mkdir($path);

$repoPath=$path."repositories";
@mkdir($modelPath);
@mkdir($repoPath);

$tablePrefix=array('tbl_','mst_');

function removePrefix($table){
    global $tablePrefix;

    foreach($tablePrefix as $p){
        if(substr($table, 0, strlen($p)) === $p){
            return str_replace($p,'',$table);
        }
    }
    return $table;
}

function writeFile($file,$content){
    $fp=fopen($file,"w+");
    fwrite($fp,$content);
    fclose($fp);
}
while($trow=$tResult->fetch_row()){
     $table=$trow[0];
     echo "Generating model ".$table;
     echo "\r\n";
   
      
    $className=ucfirst(camelize(singular(removePrefix($table))));
    $content=file_get_contents('templates/interface.tpl');
    $content=str_replace("[PHP_TAG]","<?php",$content);
    $content=str_replace("[CLASS_NAME]",$className,$content);
    $content=str_replace("[NAMESPACE]",str_replace("/","\\",$repoPath),$content);

    writeFile($repoPath."/".$className."Interface.php",$content);
    generateModel($path,$table);


}

function generateModel($path,$table){
    global $db;
    $modelPath=$path."models";
    @mkdir($modelPath);
    $sql="desc ".$table;
    $className=ucfirst(camelize(singular(removePrefix($table))));
    $content=file_get_contents("templates/model.tpl");
    $content=str_replace("[PHP_TAG]","<?php",$content);
    $content=str_replace("[CLASS_NAME]",$className,$content);
    $content=str_replace("[NAMESPACE]",str_replace("/","\\",$modelPath),$content);

    $stmt=$db->prepare($sql);
    $stmt->execute();
    $cResult=$stmt->get_result();
    $protectedVars="";
    $getters="";
    $setters="";
    while($crow=$cResult->fetch_assoc()){
        $protectedVars .="protected \$".$crow["Field"] .";\r\n";
        $field=ucfirst(camelize($crow["Field"]));
        $getters .="\tpublic function get".$field."(){
    \treturn \$this->".$crow["Field"].";
\t}\n";

        $setters .="\tpublic function set".$field."(\$".$crow["Field"]."){
    \t\$this->".$crow["Field"]."=\$".$crow["Field"].";
\t}\n";
    }

    $content=str_replace("[PRIVATE_VARIABLES]",$protectedVars,$content);
    $content=str_replace("[GETTERS]",$getters,$content);
    $content=str_replace("[SETTERS]",$setters,$content);

    $className=ucfirst(camelize(singular(removePrefix($table))));
    writeFile($modelPath."/".$className.".php",$content);

}