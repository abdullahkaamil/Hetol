<?php 
namespace App\Libraries;

use App\Libraries\NotificationsInterface;
class Notification implements NotificationInterface
{
    public function send()
    {
        var_dump('notify');
    }
}