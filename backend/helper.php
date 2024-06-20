<?php

function messageBuilder($message, $success = 1)
{
    return json_encode([
        'success' => $success,
        'message' => $message,
    ]);
}
