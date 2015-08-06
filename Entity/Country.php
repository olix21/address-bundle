<?php

namespace Dywee\AddressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity(repositoryClass="Dywee\AddressBundle\Entity\CountryRepository")
 */
class Country
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=255)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255)
     */
    private $state;

    /**
     * @ORM\Column(name="vatRate", type="float")
     */
    private $vatRate;

    /**
     * @ORM\Column(name="phonePrefix", type="smallint")
     */
    private $phonePrefix;

    /**
     * @ORM\ManyToOne(targetEntity="Dywee\CurrencyBundle\Entity\Currency", inversedBy="countries")
     */
    private $defaultCurrency;


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
     * Set name
     *
     * @param string $name
     * @return Country
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set iso
     *
     * @param string $iso
     * @return Country
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso
     *
     * @return string 
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Country
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set vatRate
     *
     * @param float $vatRate
     * @return Country
     */
    public function setVatRate($vatRate)
    {
        $this->vatRate = $vatRate;

        return $this;
    }

    /**
     * Get vatRate
     *
     * @return float 
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * Set phonePrefix
     *
     * @param integer $phonePrefix
     * @return Country
     */
    public function setPhonePrefix($phonePrefix)
    {
        $this->phonePrefix = $phonePrefix;

        return $this;
    }

    /**
     * Get phonePrefix
     *
     * @return integer 
     */
    public function getPhonePrefix()
    {
        return $this->phonePrefix;
    }

    /**
     * Set defaultCurrency
     *
     * @param \Dywee\CurrencyBundle\Entity\Currency $defaultCurrency
     * @return Country
     */
    public function setDefaultCurrency(\Dywee\CurrencyBundle\Entity\Currency $defaultCurrency = null)
    {
        $this->defaultCurrency = $defaultCurrency;

        return $this;
    }

    /**
     * Get defaultCurrency
     *
     * @return \Dywee\CurrencyBundle\Entity\Currency 
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }
}
