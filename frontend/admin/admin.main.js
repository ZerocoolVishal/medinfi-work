$(document).ready(function () {

    //Filters data
    getFilterData()

    //Selecting filters
    $("#company_select").change(function (){
        selectCompany(this.value)
    })
    $("#client_select").change(function(){
        selectClient(this.value)
    })
    $("#acm_select").change(function(){
        selectAcm(this.value)
    })
    
    $("#btn_export").click(function(){
        alert("TODO: implement")
    })

    //Project and Dashboard data
    getProjectAndDashboard()

    //getting project
    getProjectList()
   
})  

/*
    compant is the list of companies
*/
function setCompanies(company) {
    company.forEach(element => {
        company = element
        $("#company_select").append(`<option value="${company.id}">${company.name}</option>`);
        console.log(`${company} added`)
    })
}

/*
    client is the list of clients
*/
function setClients(client) {
    client.forEach(element => {
        client = element
        $("#client_select").append(`<option value="${client.id}">${client.name}</option>`);
        console.log(`${client} added`)
    })
}

/*
    acm is the list of account managers
*/
function setAcm(acm) {
    acm.forEach(element => {
        acm = element
        $("#acm_select").append(`<option value="${acm.id}">${acm.name}</option>`);
        console.log(`${acm} added`)
    })
}

//AJAX : getting filter data
function getFilterData() {
    $.get("test/FilterDataTest.php", function(data, status){
        console.log(data)
        setCompanies(data.company)
        setClients(data.client)
        setAcm(data.acm)
    })
}

/*
    companyId of the company
    TODO: select company implementation
    This will display all the clients assoiate with that company
*/
function selectCompany(companyId) {
    alert("company is selected " + companyId)
}

/*
    This will display all the projects associated with that clients
    TODO: select client implementation
*/
function selectClient(clientId) {
    alert("slient is selected " + clientId)
}

/*
    This will display all the projects associated with that Account manager
    TODO: select client implementation
*/
function selectAcm(acmId) {
    alert("ACM is selected " + acmId)
}

//AJAX Method for getting project and dashboard
function getProjectAndDashboard() {
    //TODO: Impliment this method
}

function getProjectList() {
    //set project list
     $.get("test/ProjectListTest.php", function(data, status){
        console.log(data);
        setProjectList(data.projectList)
    })
}

/*
    projectList is the list of projects
*/
function setProjectList(projectList) {
    projectList.forEach(project => {
        $("#project_list").append(`<a href="#" class="list-group-item list-group-item-action" id="project_list_${project.id}" onclick="selectProject('${project.id}')">${project.name}</a>`)
    })
}

//AJAX: get project by ID
function selectProject(projectID) {
    //$("#project_list_" + projectID).addClass("active")
    //setProjectDashboard(getProjectById(projectID))

    //AJAX call and get project bt id
    $.get("test/ProjectTest.php",{
        id: projectID
    },function(data, status){
        console.log(data)
        setProjectDashboard(data)
    })
}

//set project dashboard according to the project selected
function setProjectDashboard(project) {

    $("#project_name").html(project.name)
    //Set Targets of medinfi blog, facebook and twitter
    setMedinfiBlogTargets(project.medinfiTarget.total, project.medinfiTarget.target)
    setFacebookTarget(project.facebookTarget.total, project.facebookTarget.target)
    setTwitterTarget(project.twitterTarget.total, project.twitterTarget.target)
    //project level target
    let projectTarget = project.medinfiTarget.target + project.facebookTarget.target + project.twitterTarget.target
    let projectTotal = project.medinfiTarget.total + project.facebookTarget.total + project.twitterTarget.total
    setProjectTargets(projectTotal, projectTarget)
}

//set project level target
function setProjectTargets(achieved, target) {
    $("#target_achieved").html(achieved)
    $("#target").html(target)
    campaignProgress = Math.floor(achieved/target*100)
    $("#campaign_progress_bar").css("width", campaignProgress + "%")
    $("#campaign_progress_bar").html(campaignProgress + "%")
}

//set medinfi blog target
function setMedinfiBlogTargets(total, target) {
    $("#medinfi_total").html(total)
    $("#medinfi_target").html(target)
    progress = Math.floor(total/target*100)
    $("#medinfi_blog_progress_bar").css("width", progress + "%")
    $("#medinfi_blog_progress_bar").html(progress + "%")
}

//set facebook target
function setFacebookTarget(total, target) {
    $("#fb_achieved").html(total)
    $("#fb_target").html(target)
    progress = Math.floor(total/target*100)
    $("#fb_progress_bar").css("width", progress + "%")
    $("#fb_progress_bar").html(progress + "%")
}

//set twitter target
function setTwitterTarget(total, target) {
    $("#tw_achieved").html(total)
    $("#tw_target").html(target)
    progress = Math.floor(total/target*100)
    $("#tw_progress_bar").css("width", progress + "%")
    $("#tw_progress_bar").html(progress + "%")
}

//Filter data from the table to search
function filterTable(tableID, inputID) {
    var input, filter, table, tr, td, i
    input = document.getElementById(inputID)
    filter = input.value.toUpperCase()
    table = document.getElementById(tableID)
    tr = table.getElementsByTagName("tr")
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1]
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = ""
        } else {
          tr[i].style.display = "none"
        }
      }
    }
}

//for loading data in the table
function loadTable(tableID, data) {
    //TODO: Loding TABLE
}

function exportProject() {
    //TODO: Export project
    alert("project exporting")
}