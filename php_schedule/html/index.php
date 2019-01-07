<?php
    $schedule = array();
    $file = file("schedule.txt");
    foreach($file as $row){
        $params = explode(",", $row);
        $schedule += array($params[0] => $params[1]);
    }
    if($_POST['date'] != null && $_POST['content'] != null){
        $schedule += array($_POST['date'] => $_POST['content']);

    }

?>

<html>
    <head>
        <title>Schedule list</title>
    </head>
    <body>
        <h3>Schedule List</h3>
        <form action="index.php" method="post">
            <select name="date">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <input type="text" name="content">
            <button type="submit">登録</button>
        </form>

        <?php foreach($schedule as $num => $content){
            echo "<p>{$num}:{$content}</p>";
        } ?>
    </body>
</html>