<html>
<body>
<h1> List Topics <h1>

<?php
    echo "<p>";
    if($topics==NULL){
        echo "<h2>Dada Empty</h2>";
    } else {
        echo "<table> <tr> <th>id</th> <th>Title</th> </tr>";
        foreach($topics as $item){
            echo "<tr>";
            echo "<td>".$item['Topic']['topID']."</td>";
            echo "<td><a href='topics/view/".$item['Topic']['topID']."' >".$item['Topic']['topName']."</a></td>";
            echo "</tr>";
        }
    }
    echo "</p><p>";
    echo $this->Html->link('Add topic', array('controller' => 'Topics','action' => 'add'));

    echo "</p>";
?>
</body>
</html>