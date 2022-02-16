<?php

class SportBallon extends Sport
{
    private int $longueur;
    private int $largeur;

    /**
     * @param int $longueur
     * @param int $largeur
     */
    public function __construct(string $nomSport, int $nbJoueurs, int $longueur, int $largeur)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    /**
     * @return int
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }

    /**
     * @return int
     */
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    public function getDescription(): string
    {
        return '<br>Description :<br>Nom du sport : '.$this->nomSport.
            '<br>Nombre de joueurs : '.$this->nbJoueurs.
            ' joueurs <br>Longueur : '.$this->longueur.' m'.
            '<br>Largeur : '.$this->largeur.' m<br>';
    }
}