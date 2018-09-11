<style>
    a {
        display: inline-block;
        padding: 22px;
        border: 1px solid;
        margin: 2px;
        min-width: 158px;
        text-decoration: none;
        background: aliceblue;
        text-align: center;
    }
    
    a:hover{
        background : #a9e09e;
    }
</style>

<?php
    $data = scandir(".");
    $ignore = array(
        ".", "..", ".git", "index.html", "index.php", "runme.php"
    );
    foreach($data as $item){
        if(in_array($item, $ignore)){
            continue;
        }
?>
        <a target="_blank" href="<?=$item?>"><?=$item?></a>
<?php
    }
?>
