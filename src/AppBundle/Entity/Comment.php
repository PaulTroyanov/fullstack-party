<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class is represent comment entity
 * Comment is bounded with Issue entity with foreign key
 *
 * @ORM\Entity
 * @ORM\Table(name="comment")
 */
class Comment
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Issue")
     * @ORM\JoinColumn(name="issue_id", referencedColumnName="id")
     */
    private $issue;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_added;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Comment
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return Comment
     */
    public function setDateAdded($dateAdded)
    {
        $this->date_added = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->date_added;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Comment
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set issue
     *
     * @param \AppBundle\Entity\Issue $issue
     *
     * @return Comment
     */
    public function setIssue(\AppBundle\Entity\Issue $issue = null)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return \AppBundle\Entity\Issue
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * @PrePersist
     */
    public function onPrePersistSetRegistrationDate()
    {
        $this->date_added = new \DateTime();
    }
}
