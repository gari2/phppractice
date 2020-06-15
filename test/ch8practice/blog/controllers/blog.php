<?php
//complete code for controllers/blog.php
// return "<h1>blog entries comming soon</h1>";

include_once 'models/Blog_Entry_Table.class.php';
$entryTable = new Blog_Entry_Table($db);

//$entries is the PDOStatement returned from getAllEntries
$entries = $entryTable->getAllEntries();

//fetch data from the first row as a stdClass object
$oneEntry = $entries->fetchObject();
//print the object
$test = print_r($oneEntry, true);

//return the printed objects to index to see it in briowser
return "<pre>$test</pre>";

// $isEntry_Clicked = isset($_GET['id']);
// if($isEntry_Clicked){
//     //show one entry
//     $entryId = $_GET['id'];
//     $entryData = $entryTable->getEntry($entryId);
//     $blogOutput = include_once 'views/entry-html.php';
// }