<?php
session_start();
if (!isset($_SESSION['admin_logged'])) { header('Location: login.php'); exit; }
require_once '../includes/db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM layanan WHERE id=$id");
header("Location: index.php");
exit;
