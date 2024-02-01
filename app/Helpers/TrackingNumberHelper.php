<?php // app/Helpers/TrackingNumberHelper.php

function generateTrackingNumber($length = 10)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $trackingNumber = '';

    for ($i = 0; $i < $length; $i++) {
        $trackingNumber .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $trackingNumber;
}

?>
