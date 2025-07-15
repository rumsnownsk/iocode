<?php


function base_url($path=''): string
{
    return PATH.$path;
}

function get_href($address = ''): string
{
    $host = HOST;
    if (empty($host)) return '#';
    $arr = explode(".", $host);
    $location = end($arr);

    if ($location == 'ru') {
        return "https://{$address}.iocode.{$location}";
    } elseif ($location == 'loc') {
        return "http://{$address}.iocode.{$location}";
    } else return '#';
}
