<html>
<body>
<h1> Create Topic <h1>
<?php
    echo $this->Form->create('Topic');
    echo $this->Form->input('topName');
    echo $this->Form->end('Save Topic');

?>
</body>
</html>