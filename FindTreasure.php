<?php
function findTreasure($world) {
    // get the length of the input string
    $n = strlen($world);
    // initialize an empty array to keep track of the current level
    $levels = [];
    // initialize variables to keep track of the maximum level with the most treasures
    $maxLevel = 0;
    $maxTreasures = [];
    $maxIndex = -1;

    // loop through each character in the input string
    for ($i = 0; $i < $n; $i++) {
        // get the current character
        $char = $world[$i];

        // if the current character is '(', add a new level and increase the maximum level
        if ($char === '(') {
            $levels[] = $maxLevel++;
        }
        // if the current character is ')', decrease the maximum level and remove the last level
        elseif ($char === ')') {
            $maxLevel--;
            if (count($levels) > 0) {
                array_pop($levels);
            }
        }
        // if the current character is '*', add it to the list of treasures at the current level
        else { // $char === '*'
            $level = $maxLevel;
            if (isset($maxTreasures[$level])) {
                $maxTreasures[$level][] = $i;
            } else {
                $maxTreasures[$level] = [$i];
            }
        }
    }

    // loop through each level with treasures and find the level with the most treasures
    foreach ($maxTreasures as $level => $treasures) {
        if (count($treasures) > count($maxTreasures[$maxIndex] ?? [])) {
            $maxIndex = $level;
        }
    }

    // return the index of the first treasure at the level with the most treasures, or -1 if there are no treasures
    return isset($maxTreasures[$maxIndex]) && isset($maxTreasures[$maxIndex][0]) ? $maxTreasures[$maxIndex][0] : -1;
}


//sample test case
$world = "(((*))(((((*)))(*))))";  //result: 3
//$world = "(((*))(((((**)))(*))))";  //result: 11
//$world = "(((**))(((((*)))(****))))";  //result: 17
//$world = "(((***))(((((*****)))(***********))))";  //result: 22

$result = findTreasure($world);
echo $result;  // in this case it should return 3