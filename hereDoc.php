<?php
$name = 'Andrew';
$string = <<<STR
I'm a heredoc
I parse variables. (I love $name)
\t \\t adds a tab space. That means I accept escape sequences
STR;

echo '<pre>' . $string . '</pre>';