$(document).ready(function () {

    //Filters data
    getFilterData()

    //set project list
    setProjectList(['Project 1', ['project 2'], ['Project 3']])

    setProjectDashboard()

    //testing

})

function setCompanies(company) {
    company.forEach(element => {
        company = element
        $("#company_select").append(`<option value="${company.id}" selected="">${company.name}</option>`);
        console.log(`${company} added`);
    });
}

function setClients(client) {
    client.forEach(element => {
        client = element
        $("#client_select").append(`<option value="${client.id}" selected="">${client.name}</option>`);
        console.log(`${client} added`);
    });
}

function setAcm(acm) {
    acm.forEach(element => {
        acm = element
        $("#acm_select").append(`<option value="${acm.id}" selected="">${acm.name}</option>`);
        console.log(`${acm} added`);
    });
}

//AJAX : getting filter data
function getFilterData() {
    $.get("test/FilterDataTest.php", function(data, status){
        console.log(data);
        setCompanies(data.company)
        setClients(data.client)
        setAcm(data.acm)
    })
}

//set project list
function setProjectList(projectList) {
    projectList.forEach(project => {
        $("#project_list").append(`<a href="#" class="list-group-item list-group-item-action">${project}</a>`)
    })
}

//set project dashboard according to the project selected
function setProjectDashboard(project) {

    //project level target
    setProjectTargets(90, 300)
    //Set Targets of medinfi blog, facebook and twitter
    setMedinfiBlogTargets(20, 100)
    setFacebookTarget(30, 100)
    setTwitterTarget(40, 100)
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
    progress = Math.floor(total/target*100);
    $("#medinfi_blog_progress_bar").css("width", progress + "%")
    $("#medinfi_blog_progress_bar").html(progress + "%")
}

//set facebook target
function setFacebookTarget(total, target) {
    $("#fb_achieved").html(total)
    $("#fb_target").html(target)
    progress = Math.floor(total/target*100);
    $("#fb_progress_bar").css("width", progress + "%")
    $("#fb_progress_bar").html(progress + "%")
}

//set twitter target
function setTwitterTarget(total, target) {
    $("#tw_achieved").html(total)
    $("#tw_target").html(target)
    progress = Math.floor(total/target*100);
    $("#tw_progress_bar").css("width", progress + "%")
    $("#tw_progress_bar").html(progress + "%")
}

//Filter data from the table to search
function filterTable(tableID, inputID) {
    var input, filter, table, tr, td, i;
    input = document.getElementById(inputID);
    filter = input.value.toUpperCase();
    table = document.getElementById(tableID);
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
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