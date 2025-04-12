<?php

use database\course;
use database\DBController;
use database\c_video;

require("database/DBController.php");
require("database/course.php");

$db = new DBController();

$course = new Course($db);
//print_r($course->getData());

