<?php

namespace AppBundle\Entity;

/**
 * @ApiResource(
 *     collectionOperations={
 *         "get"={"method"="GET"},
 *         "post"={"method"="POST"}
 *     },
 *     itemOperations={
 *         "get"={"method"="GET"}
 *     })
 */
class Bourse
{
    /**
     * @var string Le nom du bénéficiaire
     * @Assert\NotBlank(message="Le nom du bénéficiaire ne doit pas être vide")
     * @Assert\Type(
     *     type="string",
     *     message="Le nom du bénéficiaire doit être une chaine de caractères valide"
     * )
     */
    protected $beneficiaireNom;

    /**
     * @var string L'email du bénéficiaire
     * @Assert\NotBlank(message="L'email du bénéficiaire ne doit pas être vide")
     * @Assert\Email(message="L'email du bénéficiaire doit être un email valide")
     */
    protected $beneficiaireEmail;

    /**
     * @var float Le revenu fiscal de référence
     * @Assert\NotBlank(message="Le revenu fiscal de référence ne doit pas être vide")
     * @Assert\Type(
     *     type="float",
     *     message="Le revenu fiscal de référence doit être un nombre décimal"
     * )
     */
    protected $revenuFiscalReference;

    /**
     * @var array La géolocalisation du foyer
     */
    protected $geolocFoyer;

    /**
     * @var array La géolocalisation de l'école
     */
    protected $geolocEcole;

    /**
     * @var int Le nombre de personnes à charge
     * @Assert\NotBlank(message="Le nombre de personnes à charge ne doit pas être vide")
     * @Assert\Type(
     *     type="int",
     *     message="Le nombre de personnes à charge doit être un nombre entier"
     * )
     */
    protected $nbPersonnesCharge;

    /**
     * @var float Le montant affecté
     * @Assert\NotBlank(message="Le montant affecté ne doit pas être vide")
     * @Assert\Type(
     *     type="float",
     *     message="Le montant affecté doit être un nombre décimal"
     * )
     */
    protected $montantAffecte;

    /**
     * @var string Le statut
     * @Assert\NotBlank(message="Le statut ne doit pas être vide")
     * @Assert\Type(
     *     type="int",
     *     message="Le statut doit être une chaine de caractères valide"
     * )
     */
    protected $statut;
}
