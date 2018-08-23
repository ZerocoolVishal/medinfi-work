<?php

//$project->name = "Project 1";

$jsonResponse = '{
    "company": [{
            "id": 1001,
            "name": "Johnson & Johnson"
        },
        {
            "id": 1002,
            "name": "PepsiCo"
        },
        {
            "id": 1003,
            "name": "Pfizer"
        }
    ],
    "client": [{
            "id": 1001,
            "name": "Johnson & Johnson"
        },
        {
            "id": 1002,
            "name": "PepsiCo"
        },
        {
            "id": 1003,
            "name": "Pfizer"
        }
    ],
    "acm": [{
            "id": 1001,
            "name": "Nikhil"
        },
        {
            "id": 1002,
            "name": "Abdul"
        }
    ]
}';

header('Content-Type: application/json');
echo $jsonResponse;