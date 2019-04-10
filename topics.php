<?php require('core/init.php'); ?>

<?php
$topic = new Topic;

//Category From URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

//User From URL
$user_id = isset($_GET['user']) ? $_GET['user'] : null;


$template = new Template('templates/topics.php');

//Template Variables
if(isset($category)){
	$template->topics = $topic->getByCategory($category);
	$template->title = 'Posts In "'.$topic->getCategory($category)->name.'"';
}

//Check For User Filter
if(isset($user_id)){
	$template->topics = $topic->getByUser($user_id);
	//$template->title = 'Posts By "'.$user->getUser($user_id)->username.'"';
}

//Check For Category Filter
if(!isset($category) && !isset($user_id)){
	$template->topics = $topic->getAllTopics();
}


$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display template
echo $template;