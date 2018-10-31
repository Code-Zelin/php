<?php
    $isbn = $_POST['isbn'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $price = $_POST['price'];

    if (!$isbn || !$author || !$title || !$price) {
        echo '所有都不能为空！';
        exit();
    }

    @ $db = new mysqli('localhost', 'books', '940108', 'books');
    if (mysqli_connect_errno()) {
        echo '链接数据库失败！请稍后重试';
        exit();
    }
    
    /**
     * 版本一，原始版本
     */
    // $query = "insert into books values (
    //     '".$isbn."', '".$author."', '".$title."', '".$price."'
    // );";
    // $result = $db -> query($query);
    // if ($result) {
    //     echo "添加成功！";
    // } else {
    //     echo '添加失败！';
    // }
    // $db -> close();
    
    /**
     * 版本二。prepare版本
     * 第一个优点是可以改变这4个绑定变量的值，并且在不用准备的情况下重新执行这个语句。
     * 这个功能对于循环执行批量插入操作来说是非常有用的。
     */
    $query = "insert into books values (?, ?, ?, ?)";
    $stmt = $db -> prepare($query);
    /**
     * bind_param()  在过程版本中，是mysqli_stmt_bind_param()函数
     * @param 第一个参数是一个格式化的字符串。
     *        's' => string 字符串
     *        'd' => doublefloat 双精度
     *        'i' => int 整形
     *        'b' => blob
     * 在这个参数之后，必须列出与语句中问号数量相同的变量，他们将依次被替换。
     */
    $stmt -> bind_param('sssd', $isbn, $author, $title, $price);
    $stmt -> execute();
    echo $stmt -> affected_rows.'本书已经被添加到数据库了';
    $stmt -> close();
?>