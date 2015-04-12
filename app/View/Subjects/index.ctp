<html>
<body>
<h1> List Subjects <h1>

<?php
    echo "<p>";
    if($subjects == NULL){
        echo "<h2>Dada Empty</h2>";
    } else {
        echo "<table> <tr> <th>ID</th> <th>Subject's Name</th> </tr>";
        foreach($subjects as $item){
            echo "<tr>";
            echo "<td>".$item['Subject']['sbID']."</td>";
            echo "<td><a href='Subjects/view/".$item['Subject']['sbID']."' >".$item['Subject']['sbName']."</a></td>";
            echo "</tr>";
        }
    }
    echo "</p><p>";
    echo $this->Html->link('Add Subject', array('controller' => 'Subjects','action' => 'add'));

    echo "</p>";
?>
</body>
</html>