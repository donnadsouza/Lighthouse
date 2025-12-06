//Global variables 
var loggedInStr = "<a onclick='logout()'>Logout</a>";
var loginStr = document.getElementById("LoginPara").innerHTML;
var request = new XMLHttpRequest();

//Check login when page loads
window.onload = checkLogin;

//Checks whether user is logged in.
function checkLogin(){
	
    //Create event handler that specifies what should happen when server responds
    request.onload = function(){
        if(request.responseText === "ok"){
            document.getElementById("LoginPara").innerHTML = loggedInStr;
        }
        else{
            console.log(request.responseText);
            document.getElementById("LoginPara").innerHTML  = loginStr;
        }
    };
	
    //Set up and send request
    request.open("GET", "check_login.php");
    request.send();
}

//Logs the user out.
function logout(){
    //Create event handler that specifies what should happen when server responds
    request.onload = function(){
        checkLogin();
		document.getElementById("LoginPara").style.visibility = "hidden";
    };
	
    //Set up and send request
    request.open("GET", "logout.php");
    request.send();
    alert("You are now logged out");
}