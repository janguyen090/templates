<?php
$arr = [
    "index"
    ];
    
foreach($arr as $item){
    $phpPath = "http://localhost/sacle-templates/index.php";
    $htmlPath = "index.html";
    file_put_contents($htmlPath, fopen($phpPath, "r"));
    echo $htmlPath . "<br>";
    $content1 = file_get_contents($htmlPath);
    $content1 = str_replace(".php",".html",$content1);
    file_put_contents($htmlPath,$content1);
}

?>
