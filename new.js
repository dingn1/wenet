var ID2;
var ID3 = 0;
function control(ID) {
    if (ID2 === ID && ID3 === 1) {
        document.getElementById(ID2).setAttribute("hidden", "hidden");
        ID3 = 0;
        ID2 = "";
    }
    else if (ID3 === 0) {
        ID2 = "ID";
    }
    if (ID3 === 0 && ID2 !== "") {
        document.getElementById(ID).removeAttribute("hidden");
        ID3 = 1;
        ID2 = ID;
    }
    if (ID2 !== ID) {
        document.getElementById(ID2).setAttribute("hidden", "hidden");
        document.getElementById(ID).removeAttribute("hidden");
        ID3 = 1;
        ID2 = ID;
    }
}

function controls(id){
     var str = "info.php?id="+id;
     window.location.assign(str); 
     return false;
}


    function control2(id){
     var str = "html.php?id="+id;
     window.location.assign(str); 
     return false;
}
    