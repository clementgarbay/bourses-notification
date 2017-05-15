<?php

namespace AppBundle\Entity;

class Bourse
{
    /**
     * @var string Le nom du bénéficiaire
     * @Assert\NotBlank(message="Le nom du bénéficiaire ne doit pas être vide")
     * @Assert\Type(
     *     type="string,
     *     message="Le nom du bénéficiaire doit être une chaine de caractères"
     * )
     */
    protected $beneficiaireNom;

    /**
     * @var string L'email du bénéficiaire
     * @Assert\NotBlank(message="L'email du bénéficiaire ne doit pas être vide")
     * @Assert\Email(message="L'email du bénéficiaire doit être un email valide")
     */
    protected $beneficiaireEmail;


}
