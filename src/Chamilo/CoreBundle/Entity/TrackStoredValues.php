<?php

namespace Chamilo\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrackStoredValues
 *
 * @ORM\Table(name="track_stored_values", uniqueConstraints={@ORM\UniqueConstraint(name="user_id_2", columns={"user_id", "sco_id", "course_id", "sv_key"})})
 * @ORM\Entity
 */
class TrackStoredValues
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sco_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $scoId;

    /**
     * @var string
     *
     * @ORM\Column(name="course_id", type="string", length=40, precision=0, scale=0, nullable=false, unique=false)
     */
    private $courseId;

    /**
     * @var string
     *
     * @ORM\Column(name="sv_key", type="string", length=64, precision=0, scale=0, nullable=false, unique=false)
     */
    private $svKey;

    /**
     * @var string
     *
     * @ORM\Column(name="sv_value", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $svValue;


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
     * Set userId
     *
     * @param integer $userId
     * @return TrackStoredValues
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set scoId
     *
     * @param integer $scoId
     * @return TrackStoredValues
     */
    public function setScoId($scoId)
    {
        $this->scoId = $scoId;

        return $this;
    }

    /**
     * Get scoId
     *
     * @return integer
     */
    public function getScoId()
    {
        return $this->scoId;
    }

    /**
     * Set courseId
     *
     * @param string $courseId
     * @return TrackStoredValues
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return string
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set svKey
     *
     * @param string $svKey
     * @return TrackStoredValues
     */
    public function setSvKey($svKey)
    {
        $this->svKey = $svKey;

        return $this;
    }

    /**
     * Get svKey
     *
     * @return string
     */
    public function getSvKey()
    {
        return $this->svKey;
    }

    /**
     * Set svValue
     *
     * @param string $svValue
     * @return TrackStoredValues
     */
    public function setSvValue($svValue)
    {
        $this->svValue = $svValue;

        return $this;
    }

    /**
     * Get svValue
     *
     * @return string
     */
    public function getSvValue()
    {
        return $this->svValue;
    }
}

