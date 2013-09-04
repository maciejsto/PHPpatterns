<?php

// require_once 'ChristmasTree.php';
// require_once 'TreeDecorator.php';
// require_once 'ChristmassTreeWithLigths.php';
// require_once 'ChristmasTreeWithStars.php';
// require_once 'Tree.php';


$tree=new ChristmasTree();
$treeWithLigths=new ChristmassTreeWithLigths($tree);
$treeWithLigthsAndStars=new ChristmassTreeWithLigths(new ChrustmasTreeWithStars(new ChristmasTree()));

echo $tree->getDescription();
echo '</br>';
echo $treeWithLigths->getDescription();
echo '</br>';
echo $treeWithLigthsAndStars->getDescription();





