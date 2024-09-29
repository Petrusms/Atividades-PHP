<?php
require_once("Manufacturer.php");

class Car{
    private string $model;
    private int $yearManufacturing;
    private Manufacturer $manufacturer;
    

    /**
     * Get the value of model
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Set the value of model
     */
    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of yearManufacturing
     */
    public function getYearManufacturing(): int
    {
        return $this->yearManufacturing;
    }

    /**
     * Set the value of yearManufacturing
     */
    public function setYearManufacturing(int $yearManufacturing): self
    {
        $this->yearManufacturing = $yearManufacturing;

        return $this;
    }

    /**
     * Get the value of manufacturer
     */
    public function getManufacturer(): Manufacturer
    {
        return $this->manufacturer;
    }

    /**
     * Set the value of manufacturer
     */
    public function setManufacturer(Manufacturer $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }
}
?>
