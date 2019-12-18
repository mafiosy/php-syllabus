<?php

class Application
{
    public $moviesArr = [];

    public function run()
    {
        while (true) {
            echo PHP_EOL ."Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        //todo
        $store = new VideoStore();
        $movie1 = new Video("The Matrix", true, 9);
        $movie2 = new Video("Godfather II", true, 10);
        $movie3 = new Video("Star Wars Episode IV: A New Hope", true, 8);
        $this->moviesArr = [$movie1, $movie2, $movie3];

        $store->addMovie($movie1);
        $store->addMovie($movie2);
        $store->addMovie($movie3);
    }

    private function rent_video()
    {
        //todo
        $store = new VideoStore();
        $title = readline('Enter name of video you want to rent out: ');
        $store->rentOutVideo($title);
    }

    private function return_video()
    {
        //todo
        $store = new VideoStore();
        $title = readline('Enter name of video you want to return: ');
        $store->returnVideo($title);

        $choice = readline(PHP_EOL . 'Would you like to rate this movie? (yes/no): ');
        if ($choice == 'yes')
        {
            $userGivenRating = readline('How would you rate this movie from 1-10?: ');
            $intOfRating = intval($userGivenRating);
            $rating = new Rating($intOfRating);
            foreach ($this->moviesArr as $rateableMovie)
            {
                if ($rateableMovie->title == $title)
                {
                    $store->addRating($rating, $rateableMovie);
                    echo 'Your rating has been saved! The average rating for this movie is ' . $store->getAvgRating($rateableMovie) . '/10' . PHP_EOL;

                }
            }
        } else {
            return;
        }
    }

    private function list_inventory()
    {
        //todo
        $store = new VideoStore();
        $store->listInventory();
    }
}

class VideoStore
{
    private $videoLibrary;

    public function __construct()
    {}

    public function addMovie(Video $video)
    {
        if (false === isset($this->videoLibrary[$video->getTitle()]))
        {
            $this->videoLibrary [$video->getTitle()]= $video;
        }

        $fp = fopen('video-library.csv', 'r+');

        foreach ($this->videoLibrary as $video) {
            fputcsv($fp, $video->videoToArray());
        }

        fclose($fp);
    }

    public function rentOutVideo(string $title)
    {
        $file = fopen("video-library.csv", "r");

        $videos = [];

        while (($data = fgetcsv($file)) !== false) {
            $video = new stdClass();
            $video->title = (string)$data[0];
            $video->flag = (int)$data[1];
            $video->rating = (int)$data[2];

            $videos[$video->title] = $video;
        }

        if ($videos[$title]->title == $title && $videos[$title]->flag == 1) {
            $videos[$title]->flag = 0;
            echo PHP_EOL . 'You have rented out "' . $videos[$title]->title . '"' . PHP_EOL;
        } else {
            echo PHP_EOL . 'Sorry, but video is already rented out. You may choose another one.' . PHP_EOL;
        }

        $handle2 = fopen("video-library.csv", "w");
        foreach ($videos as $video) {
            fputcsv($handle2, get_object_vars($video), ",");
        }
    }

    public function returnVideo(string $title)
    {
        $file = fopen("video-library.csv", "r");

        $videos = [];

        while (($data = fgetcsv($file)) !== false) {
            $video = new stdClass();
            $video->title = (string)$data[0];
            $video->flag = (int)$data[1];
            $video->rating = (int)$data[2];

            $videos[$video->title] = $video;
        }

        if ($videos[$title]->title == $title && $videos[$title]->flag == 0) {
            $videos[$title]->flag = 1;
            echo PHP_EOL . 'You have returned "' . $videos[$title]->title . '"' . PHP_EOL;
        } else {
            echo PHP_EOL . 'Cant return video that is already in store' . PHP_EOL;
        }

        $handle2 = fopen("video-library.csv", "w");
        foreach ($videos as $video) {
            fputcsv($handle2, get_object_vars($video), ",");
        }
    }

    public function listInventory()
    {
        $file = fopen("video-library.csv", "r");

        $videos = [];

        while (($data = fgetcsv($file)) !== false) {
            $video = new stdClass();
            $video->title = (string)$data[0];
            $video->flag = (int)$data[1];
            $video->rating = (int)$data[2];

            $videos[$video->title] = $video;
        }

        foreach ($videos as $video) {
            echo 'Title: "' . $video->title . '"    Flag: ' . (($video->flag) ? 'in inventory' : 'rented out') . '      Rating: ' . $video->rating . "\n";
        }
    }

    public function addRating(Rating $ratingScore, Video $vidToAddRating)
    {
        $file = fopen("video-library.csv", "r");

        $videos = [];

        while (($data = fgetcsv($file)) !== false) {
            $video = new stdClass();
            $video->title = (string)$data[0];
            $video->flag = (int)$data[1];
            $video->rating = (int)$data[2];

            $videos[] = $video;

            if($video->title == $vidToAddRating->getTitle())
            {
                $vidToAddRating->ratings[] = $ratingScore;

                $totalRatings = 0;
                foreach ($vidToAddRating->ratings as $rating)
                {
                    $totalRatings += $rating->score;
                }

                $newRating = number_format($totalRatings / count($vidToAddRating->ratings), 2, '.', ' ');
                $video->rating = $newRating;
            }
        }

        $handle2 = fopen("video-library.csv", "w");
        foreach ($videos as $video) {
            fputcsv($handle2, get_object_vars($video), ",");
        }
    }

    public function getAvgRating(Video $video)
    {
        $totalRatings = 0;

        foreach ($video->ratings as $rating)
        {
            $totalRatings += $rating->score;
        }

        $newRating = number_format($totalRatings / count($video->ratings), 2, '.', ' ');
        $video->rating = $newRating;
        return $newRating;
    }

}

class Video
{
    public $title;
    public $flag;
    public $rating;
    public $ratings = [];

    public function __construct(string $title, bool $flag, ?int $rating = null)
    {
        $this->title = $title;
        $this->flag = $flag;
        $this->rating = $rating;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getFlag()
    {
        return $this->flag;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function videoToArray(): array
    {
        return [
            'title' => $this->getTitle(),
            'flag' => $this->getFlag(),
            'rating' => $this->getRating()
        ];
    }

}

class Rating
{
    public $score;

    public function __construct(int $score)
    {
        if ($score > 0 && $score < 11)
        {
            $this->score = $score;
        } else {
            echo 'Invalid rating.' . PHP_EOL;
        }
    }
}