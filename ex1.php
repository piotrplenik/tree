<?php

include_once('treeNode.class.php');

$subnode1 = new TreeNode('1.1. Podstrona 1');

$subnode2 = clone $subnode1;
$subnode2->setTitle('1.2. Podstrona 2');

$root = new TreeNode('1. Strona glowna');
$root->addSubnode($subnode1);
$root->addSubnode($subnode2);

$anothernode = new TreeNode('1.2.1. Podstrona podstrony 2');
$subnode2->addSubnode($anothernode);

$anothernode2 = new TreeNode('1.2.1.1. I jeszcze jeden element');
$anothernode->addSubnode($anothernode2);

echo "<pre>";
echo $root->printTree();

exit;

// Wynik skryptu:
?>
<pre>1. Strona glowna
 |-1.1. Podstrona 1
 |-1.2. Podstrona 2
   |-1.2.1. Podstrona podstrony 2
     |-1.2.1.1. I jeszcze jeden element

