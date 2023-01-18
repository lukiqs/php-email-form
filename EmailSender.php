<?php

class EmailSender
{
    public function __construct(private EmailConfig $emailConfig)
    {
    }

    public function send(): void
    {
        mail(
            $this->emailConfig->getTo(),
            $this->emailConfig->getSubject(),
            $this->emailConfig->getMessage(),
            $this->emailConfig->getHeaders()
        );
        echo 'OK';
    }
}
