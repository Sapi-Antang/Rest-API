<?php
require_once '../../config/database.php';
require_once '../../helpers/response.php';

$stmt = $pdo->query("SELECT * FROM riwayat WHERE jenis = 'hama' ORDER BY created_at DESC");
$data = $stmt->fetchAll();
json_response($data);
