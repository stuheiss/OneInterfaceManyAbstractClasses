<?php
namespace My;

include 'vendor/autoload.php';

echo "Generic example:\n";
$generic = new Generic();
$generic->foo();
$generic->bar("generic");
echo "\n";

echo "String example:\n";
$myString = new MyString();
$myString->foo("hello world!");
$myString->bar("string");
echo "\n";

echo "String and int example:\n";
$myStringAndInt = new MyStringAndInt();
$myStringAndInt->foo("the anwser to life, the universe, and everything is:", 42);
$myStringAndInt->bar("string and int");
echo "\n";

echo "User example:\n";
$myUser = new MyUser();
$myUser->foo(new User(1, "Administrator"));
$myUser->bar("user");
echo "\n";

echo "Another User example:\n";
$anotherUser = new MyUser();
$anotherUser->foo(new User(2, "Bubba Fette"));
$anotherUser->bar("another user");
echo "\n";
