var bars = document.getElementById("bars");
var nav = document.getElementById("nav");

// EVENT FOR WHEN BUTTON IS CLICKED
bars.addEventListener("click",toggleNavigationBar);

function toggleNavigationBar(){
    nav.classList.toggle("activated");
    console.log("ek");
}

var kuol = new Audio("./audio/kuol.mp3");
var sound_icon = document.getElementById("sound_icon");
sound_icon.addEventListener("click",playKuol);
function playKuol() {
    kuol.play();
    console.log('wefwef');
}

var filterSelect = document.getElementById("filter-select");

if (filterSelect !== undefined) {
    
    // ARRAY OF BOXES FOR FILTERING
    var filterBoxes = [
        {image:"crowchild.png",url:"google.com",tag:"everything"},
        {image:"01.png",url:"google.com",tag:"everything"},
        {image:"06.png",url:"google.com",tag:"everything"},
        {image:"02.png",url:"google.com",tag:"everything"},
        {image:"03.png",url:"google.com",tag:"projects"},
        {image:"04.png",url:"google.com",tag:"wordpress"},
        {image:"05.png",url:"google.com",tag:"graphic"}
    ];
    var filterSelect = document.getElementById("filter-select");
    window.addEventListener("load",filter)
    filterSelect.addEventListener("change",filter);
    // FILTER ARRAY OF BOXES
    function filter() {

        var selectedValue = document.getElementById("filter-select").value;
        var results = filterBoxes.filter(box => box.tag == selectedValue);
        var filterGrid = document.getElementById("filterGrid");
        filterGrid.innerHTML = "";

        // PRINT BOXES ONTO SCREEN
        for(var i = 0;i<results.length;i++){
            var result = results[i];
            console.log(result);
            var markup = `
            <a href="${result.url}"  class="box">
            <img src="../images/${result.image}" class="box-image">
            </a>            
            ` ;
            filterGrid.innerHTML += markup;
        }


    }
}



