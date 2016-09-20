<?php
function param_error ($operator) {
    return "Error: $operator-Operator needs more arguments!";
}

function engine ($params, $stack, $rev = false, $rec = false) {
    $engine_stack = explode(' ', $params);
    if ($rev) $engine_stack = array_reverse($engine_stack);

    foreach ($engine_stack as $element) {
        if (is_numeric($element)) {
            array_push($stack, $element);
        } else
            switch ($element) {
                case '+':
                    if (count($stack) >= 2) { array_push($stack, (array_pop($stack) + array_pop($stack))); break; }
                    else { param_error('+'); return false; }

                case '*':
                    if (count($stack) >= 2) { array_push($stack, (array_pop($stack) * array_pop($stack))); break; }
                    else { return param_error('*'); }

                case '-':
                    if (count($stack) >= 2) {
                        $i = array_pop($stack);
                        array_push($stack, (array_pop($stack) - $i)); break;
                    } else { param_error('-'); return false; }

                case '/':
                    if (count($stack) >= 2) {
                        $i = array_pop($stack);
                        array_push($stack, (array_pop($stack) / $i)); break;
                    } else { param_error('/'); return false; }

                case '%':
                    if (count($stack) >= 2) {
                        $i = array_pop($stack);
                        array_push($stack, (array_pop($stack) % $i)); break;
                    } else { param_error('%'); return false; }

                case 'md5':
                    if (count($stack) >= 1) { array_push($stack, md5(array_pop($stack))); break; }
                    else { param_error('md5'); return false; }

                case 'sha1':
                    if (count($stack) >= 1) { array_push($stack, sha1(array_pop($stack))); break; }
                    else { param_error('sha1'); return false; }
            }
    }
    return $stack;
}
?>
