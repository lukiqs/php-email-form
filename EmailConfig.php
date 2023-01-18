<?php

class EmailConfig
{
    private string $to;
    private string $subject;
    private string $message;
    private string $from;
    private string $replyTo;

    public function getTo(): string
    {
        return $this->to;
    }

    public function setTo(string $to): EmailConfig
    {
        $this->to = $to;
        return $this;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): EmailConfig
    {
        $this->subject = $subject;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): EmailConfig
    {
        $this->message = $message;
        return $this;
    }

    public function getHeaders(): array
    {
        return [
            'From' => $this->from,
            'Reply-To' => $this->replyTo,
        ];
    }

    public function setFrom(string $from): EmailConfig
    {
        $this->from = $from;
        return $this;
    }

    public function setReplyTo(string $replyTo): EmailConfig
    {
        $this->replyTo = $replyTo;
        return $this;
    }
}
