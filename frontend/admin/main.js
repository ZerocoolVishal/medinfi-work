$(document).ready(function () {

    filterData = getFilterData()

    console.log(filterData.acm)

    setCompanies(filterData.company)
    setClients(filterData.client)
    setAcm(filterData.acm)

    //set project list
    setProjectList(['Project 1', ['project 2'], ['Project 3']])

    setProjectDashboard()

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

function getFilterData() {

    filterData = {
        company: [{
                id: 1001,
                name: 'Jonson and Jonson'
            },
            {
                id: 1002,
                name: 'Prpsi co'
            },
            {
                id: 1003,
                name: 'faizer'
            }
        ],
        client: [{
                id: 1001,
                name: 'Client'
            },
            {
                id: 1002,
                name: 'Prpsi co'
            },
            {
                id: 1003,
                name: 'faizer'
            }
        ],
        acm: [{
                id: 1001,
                name: 'Nikhil'
            },
            {
                id: 1002,
                name: 'Abdul'
            }
        ]
    }

    return filterData
}
//set project list
function setProjectList(projectList) {
    projectList.forEach(project => {
        $("#project_list").append(`<a href="#" class="list-group-item list-group-item-action">${project}</a>`)
    })
}

//set project dashboard according to the project selected
function setProjectDashboard(project) {

    //Set Targets of medinfi blog, facebook and twitter
    setMedinfiBlogTargets(20, 100)
    setFacebookTarget(30, 100)
    setTwitterTarget(40, 100)
    //project level target
    setProjectTargets(90, 300)
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