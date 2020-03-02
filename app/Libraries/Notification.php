<?php 
namespace App\Libraries;

use App\Libraries\NotificationsInterface;
use Illumiante\Support\Facades\Mail;
use App\Mail\Reservations;

class Notification implements NotificationInterface
{
    public function send()
    {
        Mail::to('sample@test.com')->send(new Reservation());
    }
}