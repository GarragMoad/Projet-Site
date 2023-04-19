<?php

class Cours
{
    private $id;
    private $titre;
    private $categorie;
    private $image;
    private $prix;
    private $note;
    private $path;

    public function __construct($id, $titre, $categorie, $image, $prix, $note)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->categorie = $categorie;
        $this->image = $image;
        $this->prix = $prix;
        $this->note = $note;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function getTitre() 
    {
        return $this->titre;
    }

    public function setTitre($titre) 
    {
        $this->titre = $titre;
    }

    public function getCategorie() 
    {
        return $this->titre;
    }

    public function setCategorie($categorie) 
    {
        $this->categorie = $categorie;
    }

    public function getImage() 
    {
        return $this->image;
    }
    public function setImage($image) 
    {
        $this->image = $image;
    }

    public function getPrix() 
    {
        return $this->prix;
    }

    public function setPrix($prix) 
    {
        $this->prix = $prix;
    }

    public function getNote()  
    {
        return $this->note;
    }
    
    public function setNote($note) 
    {
        $this->note = $note;
    }

    public function getPath()  
    {
        return $this->path;
    }
    
    public function setPath($path) 
    {
        $this->path = $path;
    }

}

?>