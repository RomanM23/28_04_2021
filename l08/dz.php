<?php


$data = [
    ['title' => 'pivkoooo', 'link' => 'https://www.youtube.com/watch?v=b7Gas0nBEhQ'],
    ['title' => 'pivko', 'children' =>[
        ['title' => 'obolony' , 'link' => 'https://www.youtube.com/watch?v=b7Gas0nBEhQ'],
        ['title' => 'lvivske', 'link' => 'https://www.youtube.com/watch?v=b7Gas0nBEhQ'],
        ['title' => 'tuborg', 'link' => 'https://www.youtube.com/watch?v=b7Gas0nBEhQ'],
    ]],
    ['title' => 'FRUITS', 'children' => [
        ['title' => 'apple' , 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE'],
        ['title' => 'pears', 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE'],
        ['title' => 'banana', 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE'],
    ]],
    ['title' => 'VEGETABLES', 'children' => [
        ['title' => 'potato', 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE'],
        ['title' => 'carrots', 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE'],
        ['title' => 'onion', 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE'],
    ]],
    ['title' => 'BERRIES', 'children' => [
        ['title' => 'cherry', 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE'],
        ['title' => 'plum', 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE'],
        ['title' => 'merry', 'link' => 'https://www.youtube.com/watch?v=j9y_ZEoR2GE' ],
    ]],
];
//var_dump($data);

//$html = '<ul>';
//foreach ($data as $item) {
//    if (array_key_exists('link', $item)) {
//        $html .= "<li><a href='{$item['link']}'>{$item['title']}</a></li>";
//    } elseif (array_key_exists('children', $item)) {
//        $childrenHTML = '';
//        foreach ($item['children'] as $child) {
//            $childrenHTML .= "<li><a href='{$child['link']}'>{$child['title']}</a></li>";
//        }
//        $html .= "<li>{$item['title']}<ul>{$childrenHTML}</ul></li>";
//    }
//}
//$html .= '</ul>';
//
//echo $html;

function getMenuHtml(array $data): string
{
    $html = '<ul>';
    foreach ($data as $row) {
        if (array_key_exists('children', $row)) {
            $html .= '<li>';
            $html .= $row['title'];
            $html .= getMenuHtml($row['children']);
            $html .= '</li>';
        } else {
            $html .= "<li><a href='{$row['link']}'>{$row['title']}</a></li>";
        }
    }
    $html .= '</ul>';

    return $html;
}

echo getMenuHtml($data);