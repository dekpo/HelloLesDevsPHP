<?php
// On détruit la session
session_destroy();
// On redirige sur la home
header("Location:?page=home");
