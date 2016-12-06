$(document).ready(function(){
    $("#homepage").click(function(){
        $("#maindiv").load("home.php", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                //alert("External content loaded successfully!");
            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    }); 
    $("#description").click(function(){
        $("#maindiv").load("description.php", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                //alert("External content loaded successfully!");
            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });
    $("#features").click(function(){
        $("#maindiv").load("features.php", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                //alert("External content loaded successfully!");
            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });
    $("#aboutus").click(function(){
        $("#maindiv").load("aboutus.php", function(responseTxt, statusTxt, xhr){
            if(statusTxt == "success")
                //alert("External content loaded successfully!");
            if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });
});
