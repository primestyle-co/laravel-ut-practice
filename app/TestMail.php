<?php
namespace App;

use App\Computer;
class TestMail
{

    public function sendMail($to, $cont, $dev)
    {
        echo "\n\r inside Mail::sendMail function";

        sendMail($to, $cont,$dev);

        return true;
    }
}
