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
            next($result);
        }
        $result = $out;
        foreach($stack as $element) {
            $stackwrite .= "$element";
        }
    }
    else $result = $stack;
}

if (!$_GET['ajax'])
    include "interface.php";
else
    print $result;
?>