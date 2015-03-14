<?php

namespace IssueManager\IssueBundle\Document;

class Issue
{
    protected $id;
    protected $project;
    protected $commit;
    protected $title;
    protected $description;
    protected $type;
    protected $priority;
    protected $labels;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return self
     */
    public function setProject($project)
    {
        $this->project = $project;
        return $this;
    }

    /**
     * Get project
     *
     * @return string $project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set commit
     *
     * @param string $commit
     * @return self
     */
    public function setCommit($commit)
    {
        $this->commit = $commit;
        return $this;
    }

    /**
     * Get commit
     *
     * @return string $commit
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set priority
     *
     * @param string $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Get priority
     *
     * @return string $priority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set labels
     *
     * @param collection $labels
     * @return self
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Get labels
     *
     * @return collection $labels
     */
    public function getLabels()
    {
        return $this->labels;
    }
}
