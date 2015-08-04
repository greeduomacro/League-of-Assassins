/**
 * Created by Jake on 02/08/15.
 */

//Initialise the NavBar

var navContainer = document.getElementById("navContainer");

function initializeNavbar() {

    $bannerCSS = "<div class='banner-position'><a href='http://www.leagueofassassins.co.uk'><img class='banner' src='http://www.leagueofassassins.co.uk/images/logos/Logo%20for%20LoA.png'></a></div>";

    //Initial Class
    $initialNavCSS = "<nav class='navbar-static-top navbar-custom'>";

    //Mobile Button Div and Hamburger
    $buttonDiv = " <div class='navbar-header'>" +
    "<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>" +
    "<span class='sr-only'>Toggle navigation</span>" +
    "<span class='icon-bar'></span>" +
    "<span class='icon-bar'></span>" +
    "<span class='icon-bar'></span>" +
    "</button></div>";


    $navBarContentDiv = "<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>" +
    "<ul class='nav navbar-nav'>" +
    "<li><a href='http://www.leagueofassassins.co.uk'>Home</a></li>" +
    "<li><a href='http://www.leagueofassassins.co.uk/info/information.html'>Info</a></li>" +
    "<li><a href='http://www.leagueofassassins.co.uk/roster/'>Roster</a></li>" +
    "<li><a href='https://www.warcraftlogs.com/guilds/81546/'>WarcraftLogs</a></li>" +
    "<li><a href='http://www.leagueofassassins.co.uk/apply/'>Apply</a></li>" +
    "</ul>" +
    "</div>";

    $closingStuff = "</nav>";

    if (navContainer != null) {
        navContainer.innerHTML = $bannerCSS + " " + $initialNavCSS + " " + $buttonDiv + " " + $navBarContentDiv + " " + $closingStuff;
    } else {
        console.log("NAVBAR IS NULL");
    }
}

function getCategory() {
    var filename = url.substring(url.lastIndexOf('/') + 1);

    if (filename == "index.html") {

    }
}
initializeNavbar();