<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class ContactFormNotification
 *
 * @package App\Mail
 */
class ContactFormNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * De variable foor het opgelsagen contact bericht in de applicatie.
     *
     * @var Contact Contact
     */
    public $contactEntity;

    /**
     * ContactFormNotification constructor.
     *
     * @param mixed $contactEntity The data mapping voor de data van de form request.
     * @return void
     */
    public function __construct($contactEntity)
    {
        $this->contactEntity = $contactEntity;
    }

    /**
     * get all the recipients from the notification in the application.
     *
     * @return array
     */
    public function getRecipients(): array
    {
        return User::role(['admin', 'contactpersoon'])->get(['email'])->toArray();
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): ContactFormNotification
    {
        return $this->to($this->getRecipients())
            ->from($this->contactEntity->email, $this->contactEntity->naam)
            ->subject($this->contactEntity->onderwerp)
            ->markdown('contact.notification-mail');
    }
}
