<?php
session_start();
session_destroy();
header('Location: basicoSessao.php');
