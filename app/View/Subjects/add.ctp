<html>
<body>
<h1> Create Subject <h1>
<?php
    echo $this->Form->create('Subject');
    echo $this->Form->input('sbName');
    echo $this->Form->end('Save Subject');

?>
</body>
</html>