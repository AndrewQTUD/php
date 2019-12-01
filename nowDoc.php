
<?php
$string = <<<'MYSTRING'
I'm a nowdoc string
Did you notice that I can write '' without escaping?
I don't have special meaning for \n, \r and \t
I do not parse variables $name
MYSTRING;
echo '<pre>' . $string . '</pre>';