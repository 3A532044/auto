<?php
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;

$world = new World();
$lara= new Lara();
$vincent= new Hello\Someone('Vincent');

$mary= new \Demo\Hello\Someone('Mary');
$john= new Demo\Hello\Someone('John');
/**
 * Created by PhpStorm.
 * User: Monster
 * Date: 2018/10/24
 * Time: 上午 01:56
 */