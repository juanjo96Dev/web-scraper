<?php
if(isset($_GET['url']) && !empty($_GET['url']))
echo file_get_contents($_GET['url']);
?>