<?php

class SportRelais extends Sport
{
    private int $distance;

    /**
     * @param int $distance
     */
    public function __construct(string $unNom, int $nbJoueur, int $distance )
    {
        parent::__construct($unNom, $nbJoueur);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    public function getDescription(): string
    {
        return '<br>Description :<br>Nom du sport : '.$this->nomSport.
            '<br>Nombre de joueurs : '.$this->nbJoueurs.
            ' joueur <br> Distance :'.$this->distance.' m<br>';
    }
}