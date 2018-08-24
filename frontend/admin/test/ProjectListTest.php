<?php

$projectList = '
{
    "projectList": [
        {
            "id": 1,
            "name": "Project 1"
        },
        {
            "id": 2,
            "name": "Project 2"
        },
        {
            "id": 3,
            "name": "Project 3"
        }
    ]
}';

header('Content-Type: application/json');
echo $projectList;
