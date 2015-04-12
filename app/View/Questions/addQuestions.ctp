<html>
<body>
<h1> Create Question <h1>
<?php
    echo $this->Form->create('Question');
    echo $this->Form->input('topName');
    echo $this->Form->end('Save Topic');

?>
</body>
</html>