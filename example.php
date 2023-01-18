<?php

include_once 'php-email-form.php';

use Exceptions\InvalidValueException;
use Exceptions\NotFoundException;
use Utils\FormFieldSanitizer;

try {

    $mailTo = FormFieldSanitizer::get('name');
    $mailAddress = FormFieldSanitizer::get('email');
    $mailSubject = FormFieldSanitizer::get('subject');
    $mailMessage = FormFieldSanitizer::get('message');

    $emailConfig = (new EmailConfig())
        ->setFrom($mailAddress)
        ->setReplyTo($mailAddress)
        ->setTo('YOUR-EMAIL@EMAIL.COM')
        ->setSubject("{$mailTo} - {$mailSubject}")
        ->setMessage($mailMessage);

    $emailSender = new EmailSender($emailConfig);
    $emailSender->send();
} catch (NotFoundException|InvalidValueException $exception) {
    die($exception->getMessage());
} catch (Exception $exception) {
//    die($exception->getMessage()); you can other error (bugs,ect) handle and save to file - try save log
}