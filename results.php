<?php
    $searchType = $_POST['searchType'];
    $value = $_POST['value'];

    if (!$searchType || !$value) {
        echo "search type or value should be have a value!";
        exit;
    }

    if (!get_magic_quotes_gpc()) {
        $searchType = addcslashes($searchType, 'A..Z');
        $value = addcslashes($value, 'A..Z');
    }

    /**
     * 链接数据库
     * @param host
     * @param username
     * @param password
     * @param database name
     */
    @ $db = new mysqli('localhost', 'books', '940108', 'books');
    if (mysqli_connect_errno()) {
        echo "Error: 无法链接数据库，请稍后重新尝试";
        exit;
    }

    $query = "select * from books where ".$searchType." like '%".$value."%';";
    $result = $db -> query($query);

    $num_results = $result -> num_rows;
    echo "<p>Number of books found:".$num_results."</p>";
    for ($i = 0; $i < $num_results; $i++) {
        $row = $result -> fetch_assoc();
        echo "<p><strong>".($i+1).".Title:";
        echo htmlspecialchars(stripslashes($row['title']));
        echo "</strong><br/>";
        echo "Author:".stripslashes($row['author'])."<br/>";
        echo "ISBN:".stripslashes($row['isbn'])."<br/>";
        echo "price:".stripslashes($row['price']);
        echo "</p>";
    }

    $result->free();
    $db->close();
?>