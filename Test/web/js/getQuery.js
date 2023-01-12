function getQueryData(elm,e,n){
    if (e.target.cellIndex==(5+n)){
        return;
    } else {
        var id = $(elm).closest("tr").find("td:first-child").text();

        window.location = '/query.php?problemNo='+id;
    }

}