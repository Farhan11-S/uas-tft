<?php

function messageBuilder($message, $data, $success = 1)
{
    return [
        'success' => $success,
        'message' => $message,
        'data' => $data,
    ];
}
