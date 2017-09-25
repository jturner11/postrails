<?php
if(isset($_POST["submit"])) {
    $posts = $_POST['posts'] * 1;
    $rails = $_POST['rails'] * 1;
//    var_dump($posts, $rails);
    echo Check($posts, $rails);
}

/**
 *This function determines whether a valid entry has been inserted . e.g every rail must have a post + 1 at the end
 *
 * @param $posts
 * @param $rails
 * @return string
 */
function Check($posts, $rails)
{
    if ($posts > 1 && $rails > 0) {
        $length = length($posts, $rails);
        return "<span>Length:</span> " . $length . " m";
    } else {
        return "<span class='error'>" . "You haven't specified a valid amount !" . "</span>";
    }
}
/*
 * This is where the unit size for both the post and rail is defined.
 *
 * @param $posts
 * @param $rails
 * @return float
 *
 */
function length($posts, $rails)
{
    $max_length = 0.1;
    while ($posts > 1 && $rails > 0) {
        $max_length += 1.6;
        $posts--;
        $rails--;
    }
    return $max_length;
}
?>