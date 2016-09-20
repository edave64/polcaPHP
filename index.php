<?php
$result = null;
$stackwrite = "";
if ($_POST['submit']) {
    include "engine.php";
    $stack = engine($_POST['input'], array(), ($_POST['reverse'] ? false : true));
    if (is_array($stack)){
        $out = "";
        while (current($stack)) {
            $out .= '['.key($stack).']: '.current($stack)."<br />\n";
            next($stack);
        }
        $result = $out;
        $stackwrite = implode(" ", $stack);
    }
    else $result = $stack;
}

if (!$_GET['ajax'])
    include "interface.php";
else
    print $result;
?>