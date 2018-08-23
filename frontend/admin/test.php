<?php

//$project->name = "Project 1";

$jsonResponse = "{name: \"Vishal Bhosle\"}";

header('Content-Type: application/json');
echo $jsonResponse;