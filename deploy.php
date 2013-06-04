<?php
//var_dump($_POST);
if ($_POST['deployed']) {
        echo "pulling...<br/>";
        system("umask 0002; git pull /var/git/repos/ark.git master; umask 0022");
        echo "done<br/>";
}
?>
<html>
<body>
<form action="deploy.php" method="POST">
        <input name="deployed" type="submit" value="Go"/>
</form>
</body>
</html>
