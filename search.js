function search() {
    var searchValue = document.getElementById("searchField");
    var search = searchValue.value
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("searchResultsBox").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "search.php?search=" + search , true);
    xhttp.send();
}

function getResults(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("overviewBox").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "overview.php?id=" + id , true);
    xhttp.send();
}