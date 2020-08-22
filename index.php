<?php
//Calls the dependency for element creator. (Needs PHP >=7.0)
require 'elements.php';

//Make element (uniqueClass, text and hrefItem are optional)
$E = new element('a', '', 'item', 'https://google.com');
//Create / Print item on page
echo $E->create();
echo '<br>';
echo '<br>';

//Make element (uniqueClass, text and hrefItem are optional)
$E = new element('button', '', 'button item', 'https://google.com');
//Create / Print item on page
echo $E->create();
echo '<br>';
echo '<br>';

//Make element (uniqueClass, text and hrefItem are optional)
$E = new element('div', 'GROUPIE', 'div item', 'https://google.com');
//Create / Print item on page
echo $E->create();
echo '<br>';
echo '<br>';

//Make element (uniqueClass, text and hrefItem are optional)
$E = new element('p', 'paragraph', 'p item', 'https://google.com');
//Create / Print item on page
echo $E->create();
echo '<br>';
echo '<br>';