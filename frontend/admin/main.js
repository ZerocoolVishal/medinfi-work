$(document).ready(function () {

    filterData = getFilterData()

    console.log(filterData.acm)

    setCompanies(filterData.company)
    setClients(filterData.client)
    setAcm(filterData.acm)

    getProjectAndDashboard()
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

function getProjectAndDashboard() {
    campaignProgressBar(10)
    setTargets(10, 10)
    setProjectList(['Project 1', ['project 2'], ['Project 3']])
}

function campaignProgressBar(campaignProgress) {
    $("#campaign_progress_bar").css("width", campaignProgress + "%")
    $("#campaign_progress_bar").html(campaignProgress + "%")
}

function setTargets(achieved, target) {
    $("#target_achieved").html(achieved)
    $("#target").html(target)
}

function setProjectList(projectList) {
    projectList.forEach(project => {
        $("#project_list").append(`<a href="#" class="list-group-item list-group-item-action">${project}</a>`)
    })
}

