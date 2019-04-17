<?php
    //告诉浏览器应该用utf-8解码
    header('content-Type:text/html;charset=utf-8');

    $name = "cj";
    var_dump(is_string($name));

    echo 'my name is $name';
    echo "<br/>my name is $name";

    $age = 20;
    echo $age + "20";
    echo "<hr/>年龄:".$age;
?>