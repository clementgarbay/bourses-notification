<?php
/**
 * Created by IntelliJ IDEA.
 * User: anael
 * Date: 15/05/2017
 * Time: 14:14
 */

namespace AppBundle\EventSubscriber;


use AppBundle\Entity\Mail;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\VarDumper\VarDumper;

final class NotificationMailSubscriber implements EventSubscriberInterface
{

    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => [['sendMail', EventPriorities::POST_WRITE]],
        ];
    }

    public function sendMail(GetResponseForControllerResultEvent $event)
    {
        $mail = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if (!$mail instanceof Mail || Request::METHOD_POST !== $method) {
            return;
        }

        VarDumper::dump("COUCOUCOUCOCU");
        VarDumper::dump($event);

//        $message = \Swift_Message::newInstance()
//            ->setSubject('A new book has been added')
//            ->setFrom('system@example.com')
//            ->setTo('contact@les-tilleuls.coop')
//            ->setBody(sprintf('The book #%d has been added.', $mail->getId()));
//
//        $this->mailer->send($message);
    }
}
