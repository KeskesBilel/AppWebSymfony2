<?php

namespace Ecommerce\EcommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ecommerce\EcommerceBundle\Entity\articleRepository")
 */
class article
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
     *@ORM\Column(name="nom", type="string", length=255)
     *@Assert\NotBlank(message="Les noms vides ne sont pas acceptés")
     */

    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     * @Assert\Range(min=0, minMessage="La valeur doit être supérieure ou égale à 0" )
     */
    private $prix;

    /**
     * @var integer
     *
     * @Assert\Range(min=0, minMessage="La valeur doit être supérieure ou égale à 0" , invalidMessage="")
     * @ORM\Column(name="tva", type="integer")
     */
    private $tva;

    /**
     * @var string
     *@ORM\Column(name="description", type="string", length=255)
     * @Assert\NotBlank(message="Les noms vides ne sont pas acceptés")
     */
    private $description;

    /**
     * @var string
     *@ORM\Column(name="cat", type="string", length=255)
     * @Assert\NotBlank(message="Les noms vides ne sont pas acceptés")
     */
    private $cat;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return article
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return article
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set tva
     *
     * @param integer $tva
     *
     * @return article
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return integer
     */
    public function getTva()
    {
        return $this->tva;
    }
    /**
     * Set description
     *
     * @param string $description
     *
     * @return article
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
     * Set cat
     *
     * @param string $cat
     *
     * @return article
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return string
     */
    public function getCat()
    {
        return $this->cat;
    }
}
