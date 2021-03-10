<?php

namespace Symfox\Mail;

use Boot\Env\Configurator;

class Mailer extends \Swift_Mailer implements MailerInterface {

    private $transport;
    private $composer; 
    
    public function __construct() 
    {    
        $this->setTransport(Configurator::getMailTransportCollection());
        parent::__construct($this->transport);
    }

    protected function setTransport($mail_config) 
    {   
        switch($mail_config['driver']) {
            case 'sendmail' : 
                $this->transport = new \Swift_SendmailTransport($mail_config['host'], $mail_config['port']);
                break;
            case 'smtp' :
            default:
                $this->transport = new \Swift_SmtpTransport($mail_config['host'], $mail_config['port']);
        }
        $this->transport->setUsername($mail_config['username'])->setPassword($mail_config['password']);
    }

    public function getComposer() 
    {
        return $this->composer;
    }

    protected function setComposer() 
    {
        $this->composer = new \Swift_Message(); 
    }
}