<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medinfi Analytics</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body style="margin:0px;">

    <div class="container">

        <!--Project Filters-->
        <div class="row">
            <div class="col lg-3">
                <label class="col-form-label">Company</label>
                <select style="margin-left:10px;" id="company_select">

                </select>
            </div>
            <div class="col lg-3">
                <label class="col-form-label">Client</label>
                <select style="margin-left:10px;" id="client_select">

                </select>
            </div>
            <div class="col lg-3">
                <label class="col-form-label">Account Manager</label>
                <select style="margin-left:10px;" id="acm_select">

                </select>
            </div>
        </div>

        <!--Project Prohress Bar-->
        <div class="row">
            <div class="col">
                <label class="col-form-label">Campaign Progress</label>
                <div class="progress align-items-center">
                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" id="campaign_progress_bar" aria-valuenow="40"
                        aria-valuemin="0" aria-valuemax="100" style="width: 0">0%</div>
                </div>
            </div>
        </div>

        <!--Project level target-->
        <div class="row" style="margin-top:20px;">
            <div class="col">
                <div class="card border-dark">
                    <div class="card-body">
                        <h4 class="card-title" id="target_achieved">0</h4>
                        <h6 class="text-muted card-subtitle mb-2">Target Achieved</h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" id="target">0</h4>
                        <h6 class="text-muted card-subtitle mb-2">Target</h6>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="row" style="margin-top:20px;">

            <div class="col">   
                <!--Project List-->
                <div class="row">
                    <div class="col-3">
                        <div class="list-group" id="project_list">
                            
                        </div>
                    </div>
                    <div class="col-9">
                        <?php include "display_project.php" ?>
                    </div>
                </div>
            </div>
        </div>

        <!--Export Button-->
        <div class="row">
            <div class="col">
                <button class="btn btn-primary" type="button">Export</button>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>