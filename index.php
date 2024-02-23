<?php

class Movie
{
    public $name;
    public $genre;

    public $releaseYear;


    public function __construct($name, $genre, $releaseYear)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
    }


    public function returnName()
    {
        return $this->name;
    }
    public function returnGenre()
    {
        return $this->genre;
    }
    public function returnReleaseYear()
    {
        return $this->releaseYear;
    }
}

$movie1 = new Movie("Inception", "Sci-Fi", 2010);
$movie2 = new Movie("Oppenhenimer", "Historical", 2023);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <p>
            <?php echo $movie1->returnName() . ' ' . $movie1->returnGenre() . ' ' . $movie1->returnReleaseYear() ?>
        </p>
        <p>
            <?php echo $movie2->returnName() . ' ' . $movie2->returnGenre() . ' ' . $movie2->returnReleaseYear() ?>
        </p>
    </div>

</body>

</html>