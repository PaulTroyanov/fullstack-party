<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="issue_type")
 */
class IssueType
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Type", inversedBy="issue_types")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $typeId;

    /**
     * @ORM\ManyToOne(targetEntity="Issue", inversedBy="issue_types")
     * @ORM\JoinColumn(name="issue_id", referencedColumnName="id")
     */
    private $issueId;

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
     * Set typeId
     *
     * @param $typeId
     *
     * @return IssueType
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return \AppBundle\Entity\Type
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set issueId
     *
     * @param $issueId
     *
     * @return IssueType
     */
    public function setIssueId($issueId)
    {
        $this->issueId = $issueId;

        return $this;
    }

    /**
     * Get issueId
     *
     * @return \AppBundle\Entity\Issue
     */
    public function getIssueId()
    {
        return $this->issueId;
    }
}
