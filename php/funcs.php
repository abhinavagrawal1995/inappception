<?php 
/*


k0hf8zuqk9.database.windows.net,1433

db: test

abi
Sysadmin1!

*/

$functionName = filter_input(INPUT_GET, 'functionName');

if ($functionName == "xyz") {
    xyz();
} else if ($functionName == "abcd") {
    abcd();
}

function xyz()
{    
    echo "HELLOOAAA";
}

function abcd()
{    
    echo "wwwwwwwwwwwwwwwwwHELLOOAAA";
}


?>
