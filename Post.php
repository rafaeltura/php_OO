<?php
    class Post 
    {
       protected int $id = NULL;
       private int $likes = 0;
       private array $comments = [];
       private string $author = '';

       public function __construct()
       {
           
       }

       public function aumentarLike()
       {
           $this->setLikes( $this->likes + 1);
       }

       public function getId(): int
       {
           return $this->id;
       }

       public function getLikes(): int
       {
            return $this->likes;
       }

       public function getComments(): array
       {
            return $this->comments;
       }

       public function getAuthor(): string
       {
            return $this->author;
       }

       protected function setLikes( int $value ): void
       {
           $this->likes = $value;
       }

       public function setComments( string $value ): void
       {
           array_push( $this->comments, $value );
       }

       public function setAuthor( string $value ): void
       {
           if( trim(strlen( $value ) ) > 2 ){
                $this->author = $value;
           }
       }
    }

$post1 = new Post();
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;

echo "Post1, likes iniciais: $post1->likes <br>";
echo "Post2, likes iniciais: $post2->likes <br>";

$post1->aumentarLike();
$post1->aumentarLike();

$post2->aumentarLike();
$post2->aumentarLike();

echo "Post1, likes aumentados 2x: $post1->likes <br>";
echo "Post2, likes aumentados 2x: $post2->likes <br>";
