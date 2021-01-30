<?php

$db = new mysqli("localhost", "root", "", "teste_unifebe");

if ($db->connect_errno) {
    echo '<p> Erro ' . $db->errno . '-->' . $db->connect_error . '</p>';
    die();
}
