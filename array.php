<?php
    // $list_a = [1,2,3];
    // $list_b = [4,5,6];
    // $list = $list_a + $list_b;
    // foreach($list as $current) {
    //     echo $current."\t";
    // };
    
    // $list = range(1, 10, 3);
    // foreach($list as $i) {
    //     echo $i."<br/>";
    // }

    // 遍历json的方法  此json类似于二维数组 [[key1, value2], [key2, value2], ...];

    // $list = array('a' => 1);
    // $list['b'] = 2;
    // $list['c'] = 3;
    
    // 1.
    // foreach($list as $key => $value) {
    //     echo $key."-".$value."<br/>";
    // }

    // 2.
    // 0和key都表示当前元素关键字
    // 1和value都表示当前元素的值
    // while($element = each($list)) {
    //     echo $element[0]."-".$element['value']."<br/>";
    // }

    // 3.
    // while (list($key, $value) = each($list)) {
    //     echo "$key - $value <br/>";
    // }
    // 此时如果想多次遍历该数组 需要使用 reset($list) 重置数组状态 否则将无法执行遍历操作
    // reset($list);
    // while (list($key, $value) = each($list)) {
    //     echo "$key - $value <br/>";
    // }

    // $list = array('Tires' => 100, 'Abc' => 1000, "Su" => 4);
    // asort($list);    按照值的大小升序排列
    // ksort($list);    按照关键字的大小升序排列
    // 除去sort asort ksort
    // 还有反向排列rsort arsort krsort
    // foreach($list as $key => $value) {
    //     echo "$key - $value <br/>";
    // }

    // 还有一种比较特殊的 用户自定义排序    usort
    // $list = array(
    //     array('Abc', 'Tir', 1000),
    //     array('Cde', 'Sum', 9),
    //     array('Zxy', 'Cub', 20)
    // );

    // function compare($x, $y) {
    //     if ($x[1] == $y[1]) {
    //         return 0;
    //     } elseif ($x[1] > $y[1]) {
    //         return 1;
    //     } else {
    //         return -1;
    //     };
    // }

    // usort($list, "compare");

    // foreach($list as $index => $item) {
    //     echo "<b>$index</b> <br />";
    //     foreach($item as $key => $value) {
    //         echo "$key - $value <br/>";
    //     }
    // }

    // shuffle()将数组各元素进行随机排序
    // array_reverse() 给出一个原来数组的反向排序

    // 在数组中浏览: each() current() reset() end() next() pos() prev()
    // $list = [1,2,3];
    // while (list($key, $value) = each($list)) {
    //     echo "$key - $value <br/>";
    // }
    // echo current($list);    // 指针指向当前元素
    // echo next($list);       // 指针指向下一个元素
    // echo next($list);
    // echo prev($list);       // 指针指向上一个元素
    // echo pos($list);         
    // echo reset($list);      // 指针指向原始位置
    // echo pos($list);        // 指针指向当前位置 为current的别名
    // echo current($list);
    // echo end($list);        // 指针指向末端位置

    /**
     * @param $item value   每个元素对应的值
     * @param $second key   每个元素对应的下标
     * @param $third userdata   array_walk的第三个参数，为一个常量
     */
    // function my_print($item, $second, $third)
    // {
    //     echo "$item - $second - $third <br/>";
    // }
    // array_walk($list, 'my_print', 3);

    // TODO ???
    // function arr_test(&$value, $index, $factor)
    // {
    //     $value *= $factor;
    //     // echo "$value - $index - $factor <br/>";
    // }
    
    // array_walk(&$list, 'arr_test', 3);

    // for($i = 0; $i < 3; $i++){
    //     echo "$i - $list[$i] <br/>";
    // }
    // while (list($key, $value) = each($list)) {
    //     echo "$key - $value <br/>";
    // }

    // 以下两种方法都是统计数组的长度
    // echo count($list);
    // echo sizeof($list);
    
    // $list = [1,1,1,1,1,2,5,3,4,5,5,4,3,2];
    // // array_count_values 统计数组中每个元素出现的次数 key按照首次出现的顺序排列
    // $newList = array_count_values($list);
    // while(list($key, $value) = each($newList)) {
    //     echo "$key - $value <br/>";
    // }
    
    $list = array("a"=>'1', 'b'=>'5', 'c'=>3);
    /**
     * @param arr
     * @param extract_type
     * @param prefix
     */
    extract($list, EXTR_PREFIX_ALL, 'my_prefix');
    echo "$my_prefix_a - $my_prefix_b - $my_prefix_c";

?>