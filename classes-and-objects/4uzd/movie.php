<?php

//Ka sapratu no dokumentacijas PHP nevar uztaisit vairakus konstruktorus
//lidz ar to otrs "konstruktors" itka ir bet pielietojuma nav

class Movie
{
    private $title;
    private $studio;
    private $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function construct_PG_Movie(string $title, string $studio)
    {
        if ($this->rating == 'PG')
        {
            $this->title = $title;
            $this->studio = $studio;
        } else {
            echo 'Not a PG movie' . PHP_EOL;
        }
    }

    public function getPG(array $arrOfMovies)
    {
        foreach ($arrOfMovies as $movie)
        {
            if ($movie->rating == 'PG')
            {
                $arrOfPGMovies[] = $movie;
            }
        }
        return $arrOfPGMovies;
    }
}