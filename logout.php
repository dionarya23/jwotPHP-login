<?php
setcookie("userData", "", time()-(86400 * 30));
setcookie("key", "", time()-(86400 * 30));

header("Location: ".$base->base_url()."index.php");
