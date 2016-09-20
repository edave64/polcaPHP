<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n"; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/2001/REC-xhtml11-20010531/DTD/xhtml11-flat.dtd>
<html>
    <head>
        <title>Polca! 0.5</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="files/posty.css" type="text/css" />
        <link rel="shortcut icon" href="files/favicon.png" />
    </head>
    <body>
        <div id="wrapper1">
            <div id="wrapper2">
                <img src="files/text.png" alt="Polca" /><br />
                <form action="index.php" method="post">
                    <div>
                        <p id="mainbox">
                            <input id="txt_input"   name="input" <?php if ($_POST['stackwrite']) echo "value=\"".$stackwrite."\"" ?> />
                            <input id="btn_submit"  name="submit" type="submit" value="rechnen" />
                        </p>
                        <p id="subbox">
                            <input class="checkbox" name="reverse"    type="checkbox" <?php if ($_POST['reverse']) echo "checked=\"checked\"" ?> /> Umgekehrte Notation
                            <input class="checkbox" name="stackwrite" type="checkbox" <?php if ($_POST['stackwrite']) echo "checked=\"checked\"" ?> /> <a title="Übrigen Stack ins Rechenfeld eintragen">Stack übernehmen</a><br />
                            <span class="help">Probleme? Gib <code>help</code> ein!</span>
                        </p>
                        <div id="result">
                            <?php echo $result; ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
