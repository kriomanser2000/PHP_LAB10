<?php
$button = new Button('red', '100px', '50px', 'submitButton', 'Submit', true);
$text = new Text('blue', '200px', '30px', 'textField', 'Enter text', 'Type here');
$label = new Label('green', '200px', '30px', 'labelField', 'Label:', $text);
echo convertToHTML($button);
echo convertToHTML($text);
echo convertToHTML($label);