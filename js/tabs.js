var currentPage = "1";

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

function decrementCoursePage(pageNum){

}

function coursePage(pageNum, coursePage) {
    var i, tabcontent, tablinks, dots;
    document.getElementById(currentPage).classList.remove('active');
    document.getElementById("li" + currentPage).classList.remove("active");
    currentPage = pageNum;
    tabcontent = document.getElementsByClassName("coursePages");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }




    document.getElementById(coursePage).style.display = "block";
    document.getElementById("li" + pageNum).classList.add("active");
    document.getElementById(pageNum).classList.add('active');
}
