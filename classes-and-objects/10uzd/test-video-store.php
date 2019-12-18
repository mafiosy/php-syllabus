<?php

include "video-store.php";

class TestVideoStore
{
    public function runVideoStore()
    {
        $movie1 = new Video("The Matrix", true, 0);
        $movie2 = new Video("Godfather II", true,0);
        $movie3 = new Video("Star Wars Episode IV: A New Hope", true, 0);

        $store = new VideoStore();
        $store->addMovie($movie1);
        $store->addMovie($movie2);
        $store->addMovie($movie3);

        $rating1 = new Rating(1);
        $rating2 = new Rating(5);
        $rating3 = new Rating(10);

        $store->addRating($rating1, $movie1);
        $store->addRating($rating2, $movie1);
        $store->addRating($rating3, $movie1);

        $store->addRating($rating1, $movie2);
        $store->addRating($rating2, $movie2);
        $store->addRating($rating3, $movie2);

        $store->addRating($rating1, $movie3);
        $store->addRating($rating2, $movie3);
        $store->addRating($rating3, $movie3);

        $store->rentOutVideo("The Matrix");
        $store->returnVideo("The Matrix");

        $store->rentOutVideo("Godfather II");
        $store->returnVideo("Godfather II");

        $store->rentOutVideo("Star Wars Episode IV: A New Hope");
        $store->returnVideo("Star Wars Episode IV: A New Hope");

        $store->rentOutVideo("Godfather II");
        $store->listInventory();
    }
}

$test = new TestVideoStore();
$test->runVideoStore();