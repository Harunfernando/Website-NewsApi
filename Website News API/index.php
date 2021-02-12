<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>News Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="index.css"/>
    
</head>

<body>
    <?php
        $url = "http://newsapi.org/v2/everything?q=tesla&from=2021-01-12&sortBy=publishedAt&apiKey=96011b6c001e453fb8f5ffacba87f4b7";
        $response = file_get_contents($url);
        $NewsData = json_decode($response);
    ?>

    <div class="jumbotron">
        <h1>Breaking News</h1>
    </div>

    <div class="container-fluid">
        <?php
            foreach($NewsData->articles as $News)
            {
        ?>

        <div class="row NewsGrid">
            <div class="cold-md-3">
                <img src="<?php echo $News->urlToImage ?>" alt="News thumbnail" class="rounded">
            </div>
            <div class="col-md-9">
                <h2><?php echo $News->title ?> </h2>
                <h5><?php echo $News->description ?> </h5>
                <p><?php echo $News->content ?> </p> 
                <h6>Author: <?php echo $News->author ?> </h6>
                <h6>Published: <?php echo $News->publishedAt ?> </h6>
            </div>
        </div>

        <?php
            }
        ?>
    </div>

</body>
</html>