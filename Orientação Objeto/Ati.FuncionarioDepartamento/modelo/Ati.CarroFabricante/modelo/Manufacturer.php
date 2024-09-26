<?php
class Manufacturer{
    private string $name;
    private string $acronym;

    public function __construct($name, $acronym)
    {
        $this->name = $name;
        $this->acronym = $acronym;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of acronym
     */
    public function getAcronym(): string
    {
        return $this->acronym;
    }

    /**
     * Set the value of acronym
     */
    public function setAcronym(string $acronym): self
    {
        $this->acronym = $acronym;

        return $this;
    }
}
?>
