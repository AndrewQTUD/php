
<?php
// both works
echo "Hello <br>";
echo 'Hello <br>';

// escape sequences are not parsed in single quotes
echo "\"World\" <br>"; // outputs "World"
echo '\"World\" <br>'; // outputs \"World\"

// variables are not parsed in single quotes
$hello = "Hello";
echo "$hello World <br>"; // outputs Hello World
echo '$hello World <br>'; // outputs $hello World

