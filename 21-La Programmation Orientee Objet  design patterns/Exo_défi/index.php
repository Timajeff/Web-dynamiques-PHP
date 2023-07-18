<?php

abstract class Notification
{
  protected abstract function send(string $recipient, string $message);
  public function manageNotification($recipient, $message)
  {
    $this->send($recipient, $message);
  }
}

class EmailNotification extends Notification
{
  protected function send(string $recipient, string $message)
  {
    echo sprintf("Email envoyé au %s contenant le message %s <br/>", $recipient, $message);
  }
}

class SMSNotification extends Notification implements SplSubject
{
  private $observers;

  public function __construct()
  {
    $this->observers = new SplObjectStorage();
  }

  public function attach(SplObserver $observer): void
  {
    $this->observers->attach($observer);
  }

  public function detach(SplObserver $observer): void
  {
    $this->observers->detach($observer);
  }

  public function notify()
  {
    foreach ($this->observers as $observer) {
      $observer->update($this);
    }
  }

  protected function send(string $recipient, string $message)
  {
    echo sprintf("SMS envoyé au %s contenant le message %s <br/>", $recipient, $message);
    $this->setReceived((bool) rand(0, 1));
  }

  public function setReceived(bool $isReceived)
  {
    if ($isReceived) {
      $this->notify();
    }
  }
}

class NotificationFactory
{
  public static function createNotification(string $contactType)
  {
    switch ($contactType) {
      case 'sms':
        $smsNotification = new SMSNotification();
        $smsNotification->attach(new SMSIsReceived());
        return $smsNotification;
        break;
      case 'email':
      default:
        return new EmailNotification();
    }
  }
}

class SMSIsReceived implements SplObserver
{
  public function update(SplSubject $notification)
  {
    echo sprintf("Message remis <br/>");
  }
}

/**
 * Class Client
 */
class Client
{
  public $name;
  public $contactWith;
  public $email;
  public $phoneNumber;

  public function __construct(string $name, string $contactBy, string $email, string $phoneNumber)
  {
    $this->name = $name;
    $this->contactWith = $contactBy;
    $this->email = $email;
    $this->phoneNumber = $phoneNumber;
  }

  public function getContactInformation()
  {
    switch ($this->contactWith) {
      case 'sms':
        return $this->phoneNumber;
        break;
      case 'email':
      default:
        return $this->email;
        break;
    }
  }
}

$message = "Commande expédiée";
$clientsToNotifyToNotify = [];

$clientsToNotify[] = new Client("Karine", "email", "karine@mail.fr", "01.02.03.04.05.06");
$clientsToNotify[] = new Client("Julien", "sms", "julien@mail.fr", "01.02.03.04.05.07");
$clientsToNotify[] = new Client("Karim", "sms", "karim@mail.fr", "01.02.03.04.05.08");
$clientsToNotify[] = new Client("Justine", "email", "justine@mail.fr", "01.02.03.04.05.09");


foreach ($clientsToNotify as $client) {
  $notification = NotificationFactory::createNotification($client->contactWith);
  $notification->manageNotification($client->getContactInformation(), $message);
}
