<?php

function Check($posts, $rails)
{
    if ($posts > 1 && $rails > 0) {
    $length = length($posts, $rails);
    return "<span>Length:</span> " . $length . " m";
    } else {
    return "<span class='error'>" . "You haven't specified a valid amount !" . "</span>";
}
}
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