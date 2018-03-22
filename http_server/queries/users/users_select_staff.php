<?php

function users_select_staff($pdo)
{
    $stmt = $pdo->prepare('
        SELECT power, status, name, active_date, register_time
        FROM users
        WHERE power > 1
        ORDER BY power DESC, active_date DESC
        LIMIT 100
    ');

    $result = $stmt->execute();
    if (!$result) {
        throw new Exception('Could not fetch staff list.');
    }

    return $stmt->fetchAll(PDO::FETCH_OBJ);
}
