<?php
namespace App;

use App\Computer;
use Mockery\Exception;

class Report
{

    const ADMIN_EMAIL = "admin@mail.com";

    public function sendEMail()
    {
        echo "\n\r inside Report::sendEMail function";

        //sendMail(ADMIN_EMAIL, 'working_report');
        //writeLog(ADMIN_EMAIL, 'working_report');
        throw new Exception("mail server is not working");
        throw new Exception("file permission deny");

        return true;
    }
}
