<?php

    class Foto extends Post
    {
        private string $url;

        public function __construct( int $idPost, string $url, string $author )
        {
            $this->id = $idPost;
            $this->url = $url;
            $this->setAuthor( $author );
        }

        public function getUrl(): string
        {
            return $this->url;
        }

        public function setLikes( int $value ):void
        {
            ($value > 3) ? parent::setLikes($value) : 'Nada feito!';
        }
    }

$foto = new Foto( 1, 'https://teste.url.com', 'Rafael Tura');
$foto->setLikes(12);

echo 'Infos Foto:<br/>' . 
      '#' . $foto->getId() . '<br/>' .
      'URL:' . $foto->getUrl();
