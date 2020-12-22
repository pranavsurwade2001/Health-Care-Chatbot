<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('Coronil', 6, 'coronil.jpg', '');
$coffee = new Drink('Anti-Hairfall', 5, 'hairfallkit.jpg', '');
$curry = new Food('Dental', 9, 'denatalkit.jpg', 3);
$pasta = new Food('First-Aid', 3, 'first.jpg',0);

$menus = array($juice, $coffee, $curry, $pasta);

$user1 = new User('Pranav', 'male');
$user2 = new User('Nayanika', 'female');
$user3 = new User('Sonali', 'female');
$user4 = new User('Piyush', 'male');

$users = array($user1, $user2, $user3, $user4);

// Delete $review1 through $review8 and paste the code below
$review1 = new Review($juice->getName(), $user1->getId(), 'Effective');
$review2 = new Review($curry->getName(), $user1->getId(), 'Pain Relief');
$review3 = new Review($coffee->getName(), $user2->getId(), 'Immediate results');
$review4 = new Review($pasta->getName(), $user2->getId(), 'The medicine was really good :)');
$review5 = new Review($juice->getName(), $user3->getId(), 'Immunity Boster');
$review6 = new Review($curry->getName(), $user3->getId(), 'Feeling Better');
$review7 = new Review($coffee->getName(), $user4->getId(), 'Right medication.');
$review8 = new Review($pasta->getName(), $user4->getId(), 'Selective Choice.');
$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>