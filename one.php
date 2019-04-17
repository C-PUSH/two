<?php
    $age = 18;
    $name;
    var_dump(isset($age)); // 声明变量未赋值 结果:false

    $name = 'ls';
    $lal = '';
    var_dump(empty($lal)); // true
    var_dump(empty($name)); // false

    $user = 'ww';
    unset($user);
    var_dump($user);

?>