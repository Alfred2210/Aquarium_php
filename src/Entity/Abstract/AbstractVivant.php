<?php

namespace App\Entity\Abstract;

abstract class AbstractVivant
{

    protected string $m_nom;
    protected int $m_age;
    protected int $m_vie;
    protected string $m_color;
    protected bool $m_alive;


    public function __construct($nom, $age, $vie, $color)
    {

        $this->m_nom = $nom;
        $this->m_age = $age;
        $this->m_vie = $vie;
        $this->m_color = $color;
        $this->m_alive = true;
    }

    public function getNom(): string
    {
        return $this->m_nom;
    }

    public function getAge(): int
    {
        return $this->m_age;
    }

    public function getVie(): int
    {
        return $this->m_vie;
    }

    public function getColor(): string
    {
        return $this->m_color;
    }


    public function isAlive(): bool
    {
        return $this->m_alive;
    }
}
