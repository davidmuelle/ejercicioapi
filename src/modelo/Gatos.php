<?php
namespace Src\modelo;
class Gatos{

private string $imagen;
private string $likes;
private string $autor;

    public function __construct()
    {
        
    }
    

/**
 * Get the value of imagen
 */ 
public function getImagen()
{
return $this->imagen;
}

/**
 * Set the value of imagen
 *
 * @return  self
 */ 
public function setImagen($imagen)
{
$this->imagen = $imagen;

return $this;
}


/**
 * Get the value of likes
 */ 
public function getLikes()
{
return $this->likes;
}

/**
 * Set the value of likes
 *
 * @return  self
 */ 
public function setLikes($likes)
{
$this->likes = $likes;

return $this;
}


/**
 * Get the value of autor
 */ 
public function getAutor()
{
return $this->autor;
}

/**
 * Set the value of autor
 *
 * @return  self
 */ 
public function setAutor($autor)
{
$this->autor = $autor;

return $this;
}
}
