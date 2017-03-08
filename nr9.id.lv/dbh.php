<?php

$conn = mysqli_connect("mysql.hostinger.lv", "u917384231_lauri", "lauris", "u917384231_login");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}