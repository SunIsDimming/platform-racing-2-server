<?php

function new_level_insert ($pdo, $level_id, $time, $ip)
{
    $result = $pdo->exec('
        REPLACE INTO pr2_new_levels
        SET level_id = :level_id,
            time = :time,
            ip = :ip
    ');
    $stmt->bindValue(':level_id', $level_id, PDO::PARAM_INT);
    $stmt->bindValue(':time', $time, PDO::PARAM_INT);
    $stmt->bindValue(':ip', $ip, PDO::PARAM_STR);

    if ($result === false) {
        throw new Exception('Could not submit level to new.');
    }

    return $result;
}