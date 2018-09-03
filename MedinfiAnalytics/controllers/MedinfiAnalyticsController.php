<?php

namespace app\controllers;

class MedinfiAnalyticsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    //Admin dashboard
    public function actionAdminDashboard() 
    {
        return $this->render('admin/index');    
    }

    //Admin Settings
    public function actionAdminSettings()
    {
        return $this->render('admin/settings');
    }

    //Acm Dashboard
    public function actionAcmDashboard()
    {
        return $this->render('acm/index.html');
    }

    //Client Dashboard
    public function actionClientDashboard()
    {
        return $this->render('client/index.html');
    }

    //Project List
    public function actionGetProjectList()
    {
        $jsonResponse = '
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
                },
                {
                    "id": 4,
                    "name": "Project 4"
                }
            ]
        }';
        
        echo $jsonResponse;
    }

    //get Filter Data
    public function actionGetFilterData() 
    {
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
        
        echo $jsonResponse;
    }

    //Project dashboard
    public function actionGetProject() {
        
        $jsonResponse = '
        {
            "id" : 1,
            "name" : "name of the project",
            "launchDate" : "24-10-2018",
            "duration" : 3,
            "medinfi" : {
                "name" : "name of the blog",
                "launchDate" : "24-10-2018",
                "total" : 500,
                "target" : 600
            },  
            "facebook" : {
                "name" : "name of the post",
                "launchDate" : "24-10-2018",
                "total" : 200,
                "target" : 600
            },
            "twitter" : {
                "name" : "name of the post",
                "launchDate" : "24-10-2018",
                "total" : 300,
                "target" : 600
            }
        }';
        echo $jsonResponse;
    }
}
