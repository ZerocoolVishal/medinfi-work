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
                                "blogName": "Name of the blog",
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
                                "blogName": "Name of the blog",
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
                                "blogName": "Name of the blog",
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
                                "postName": "Name of the blog",
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
                                "postName": "Name of the blog",
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
                                "postName": "Name of the blog",
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
                                "postName": "Name of the blog",
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
                                "postName": "Name of the blog",
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
                                "postName": "Name of the blog",
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