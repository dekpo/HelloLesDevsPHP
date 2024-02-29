<?php
$db = Utils::connectDB();
$sql = $db->prepare("SELECT * FROM contact WHERE user_id='".$_SESSION['user']['id']."'");
$sql->execute();
$user = $sql->fetch(PDO::FETCH_ASSOC);
// On charge la vue
include "./views/base.phtml";