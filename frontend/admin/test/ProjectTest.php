<?php

function getProject() {
    $project = '
        {
            "id" : 1,
            "name" : "Project name",
            "launchDate" : "20-08-2018",
            "medinfi": {
                "total": 50,
                "target": 100,
                "data": {
                    "pageViews": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            },
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            },
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            },
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            } 
                        ]
                    },
                    "bannerClicks": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            }   
                        ]
                    },
                    "onlineSales": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            }   
                        ]
                    }
                }
            },
            "facebook": {
                "total": 50,
                "target": 100,
                "data": {
                    "likesAndShares": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            }   
                        ]
                    },
                    "clickToSite": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            }   
                        ]
                    },
                    "comments": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            }   
                        ]
                    }
                }
            },
            "twitter": {
                "total": 50,
                "target": 100,
                "data": {
                    "impression": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            }   
                        ]
                    },
                    "retweets": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            }   
                        ]
                    },
                    "comments": {
                        "weekData": [
                            {
                                "name": "Name of the blog",
                                "launchDate": "25-08-2011",
                                "actual": 200,
                                "target": 1000,
                                "data": [
                                    80,
                                    90,
                                    100,
                                    200
                                ]
                            }   
                        ]
                    }
                }
            }
        }';
    return $project;
}

$projectId = $_GET['id'];

switch($projectId) {
    case 1:
        $jsonResponse = '
        {
            "id": 10,
            "name": "Project AjAX 1",
            "medinfi": {
                "total": 50,
                "target": 100
            },
            "facebook": {
                "total": 50,
                "target": 100
            },
            "twitter": {
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
            "medinfi": {
                "total": 10,
                "target": 100
            },
            "facebook": {
                "total": 50,
                "target": 100
            },
            "twitter": {
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
            "medinfi": {
                "total": 60,
                "target": 100
            },
            "facebook": {
                "total": 40,
                "target": 100
            },
            "twitter": {
                "total": 80,
                "target": 100
            }
        }
        ';
    break;
    case 4:
        $jsonResponse = getProject();
        break;
}

header('Content-Type: application/json');
echo getProject();