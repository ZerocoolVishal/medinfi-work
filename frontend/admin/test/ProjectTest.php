<?php

function getProject() {
    $project = '
    
        {
            "id" : 1,
            "name" : "Project name",
            "launchDate" : "20-08-2018",
            "medinfi" : {
                "total" : 2500,
                "target" : 10000,
                
            }
        }
    
    ';
}

$projectId = $_GET['id'];

switch($projectId) {
    case 1:
        $jsonResponse = '
        {
            "id": 10,
            "name": "Project AjAX 1",
            "medinfiTarget": {
                "total": 50,
                "target": 100
            },
            "facebookTarget": {
                "total": 50,
                "target": 100
            },
            "twitterTarget": {
                "total": 50,
                "target": 100
            }
        }
        ';
    break;
    case 2:
        $jsonResponse = '
        {
            "id": 10,
            "name": "Project AjAX 2",
            "medinfiTarget": {
                "total": 10,
                "target": 100
            },
            "facebookTarget": {
                "total": 50,
                "target": 100
            },
            "twitterTarget": {
                "total": 20,
                "target": 100
            }
        }
        ';
    break;
    case 3:
        $jsonResponse = '
        {
            "id": 10,
            "name": "Project AjAX 3",
            "medinfiTarget": {
                "total": 60,
                "target": 100
            },
            "facebookTarget": {
                "total": 40,
                "target": 100
            },
            "twitterTarget": {
                "total": 80,
                "target": 100
            }
        }
        ';
    break;
}

header('Content-Type: application/json');
echo $jsonResponse;