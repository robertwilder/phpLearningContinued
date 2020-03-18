<?php 

class Post

{

    public $title;

    public $published;

    public function __construct($title, $published)
    
    {
        $this->title = $title;
        $this->published = $published;
    }


}

$posts = [

    new Post('My First Post', true),

    new Post('My Second Post', true),

    new Post('My Third Post', true),

    new Post('My Fourth Post', false)
];

//..........................................................


// $unpublishedPosts = array_filter($posts, function ($post){

//     return $post->published === false;

// });

// var_dump($posts);
// this can be done in the terminal with 'php index.php

//..........................................................

// $unpublishedPosts = array_filter($posts, function ($post){

//     return ! $post->published;

// });

// $publishedPosts = array_filter($posts, function ($post)
// {
//     return $post->published;
// });

// var_dump($publishedPosts);

//...........................................................

// $modified = array_map(function ($post){
// //remember that this is reversed....
//     $post->published = true;

//     return $post;

// }, $posts);

// var_dump($modified);
// // this runs through and maps modifies the values


//...........................................................

// this can also be done with a foreach

foreach ($posts as $post){
    $post->published = true;
}

var_dump($posts);
