<?php
/**
 * Created by IntelliJ IDEA.
 * User: anael
 * Date: 15/05/2017
 * Time: 13:22
 */

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource(
 *     collectionOperations={
 *         "get"={"method"="GET"},
 *         "post"={"method"="POST"}
 *     },
 *     itemOperations={})
 */
class Mail
{
    /**
     * @var string The recipient email address
     * @Assert\NotBlank(message="The email should not be empty")
     * @Assert\Email(message="The email should be a valid one")
     */
    protected $recipient;

    /**
     * @var string The subject
     *
     * @Assert\NotBlank(message="The subject should not be empty")
     * @Assert\Type(type="string")
     */
    protected $subject;

    /**
     * @var string The body of your mail
     *
     * @Assert\NotBlank(message="The body should not be empty")
     * @Assert\Type(type="string")
     */
    protected $body;

    /**
     * @return string
     */
    public function getRecipient(): string
    {
        return $this->recipient;
    }

    /**
     * @param string $recipient
     * @return Mail
     */
    public function setRecipient(string $recipient): Mail
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return Mail
     */
    public function setSubject(string $subject): Mail
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     *
     * @return Mail
     */
    public function setBody(string $body): Mail
    {
        $this->body = $body;

        return $this;
    }
}
