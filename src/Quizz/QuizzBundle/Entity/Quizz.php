<?php

namespace Quizz\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Quizz {

    private $id;

    private $title;

    private $description;

    private $level;

    private $idclass;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Questions;

    /**
     * @var \Quizz\QuizzBundle\Entity\Themes
     */
    private $idtheme;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     * @return Quizz
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Quizz
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Quizz
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Add Questions
     *
     * @param \Quizz\QuizzBundle\Entity\Questions $questions
     * @return Quizz
     */
    public function addQuestion(\Quizz\QuizzBundle\Entity\Questions $questions)
    {
        $this->Questions[] = $questions;

        return $this;
    }

    /**
     * Remove Questions
     *
     * @param \Quizz\QuizzBundle\Entity\Questions $questions
     */
    public function removeQuestion(\Quizz\QuizzBundle\Entity\Questions $questions)
    {
        $this->Questions->removeElement($questions);
    }

    /**
     * Get Questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->Questions;
    }

    /**
     * Set idtheme
     *
     * @param \Quizz\QuizzBundle\Entity\Themes $idtheme
     * @return Quizz
     */
    public function setIdtheme(\Quizz\QuizzBundle\Entity\Themes $idtheme = null)
    {
        $this->idtheme = $idtheme;

        return $this;
    }

    /**
     * Get idtheme
     *
     * @return \Quizz\QuizzBundle\Entity\Themes 
     */
    public function getIdtheme()
    {
        return $this->idtheme;
    }
    /**
     * @var \Quizz\QuizzBundle\Entity\Themes
     */
    private $fk_idtheme;


    /**
     * Set fk_idtheme
     *
     * @param \Quizz\QuizzBundle\Entity\Themes $fkIdtheme
     * @return Quizz
     */
    public function setFkIdtheme(\Quizz\QuizzBundle\Entity\Themes $fkIdtheme = null)
    {
        $this->fk_idtheme = $fkIdtheme;

        return $this;
    }

    /**
     * Get fk_idtheme
     *
     * @return \Quizz\QuizzBundle\Entity\Themes 
     */
    public function getFkIdtheme()
    {
        return $this->fk_idtheme;
    }
    /**
     * @var \Quizz\QuizzBundle\Entity\Levels
     */
    private $fk_idlevel;


    /**
     * Set fk_idlevel
     *
     * @param \Quizz\QuizzBundle\Entity\Levels $fkIdlevel
     * @return Quizz
     */
    public function setFkIdlevel(\Quizz\QuizzBundle\Entity\Levels $fkIdlevel = null)
    {
        $this->fk_idlevel = $fkIdlevel;

        return $this;
    }

    /**
     * Get fk_idlevel
     *
     * @return \Quizz\QuizzBundle\Entity\Levels 
     */
    public function getFkIdlevel()
    {
        return $this->fk_idlevel;
    }
}
