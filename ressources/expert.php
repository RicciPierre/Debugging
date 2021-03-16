<?php
declare(strict_types=1);

echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}


new_exercise(2);

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; 
echo $monday;
//zero for the first one

new_exercise(3);

$str = 'Debugged ! Also very fun';  
echo substr($str, 0, 10);
//str single quotes not double

new_exercise(4);

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);
// add &

new_exercise(5);

$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
    if ($letter === 'z') {
        break;
    }
}

print_r($arr);
//adding an if with a break to stop when it's on z

new_exercise(6);

$arr = [];

function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params);
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames();

new_exercise(7);

function copyright(int $year) {
    return "&copy; $year BeCode";
}

echo copyright((int)date('Y'));

new_exercise(8);

function login(string $email, string $password) {
    if($email == 'john@example.be' || $password == 'pocahontas' || $password == 'dfgidfgdfg') {
        return 'Welcome John Smith';
    }
    return 'No access';
}

echo login('john@example.be', 'pocahontas');
echo login('john@example.be', 'dfgidfgdfg');
echo login('wrong@example.be', 'wrong');

new_exercise(9);

function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}

echo isLinkValid('http://www.google.com/hack.pdf');
echo isLinkValid('https://google.com');
echo isLinkValid('http://google.com');
echo isLinkValid('http://google.com/test.txt');

new_exercise(10);

$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];

for($i=0; $i <= count($areTheseFruits)+1; $i++) { //add +1
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($validFruits);

?>