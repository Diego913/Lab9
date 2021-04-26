let username = document.getElementById("username")
let password = document.getElementById("password")
let ps5 = document.getElementById("ps5")
let xbox = document.getElementById("xbox")
let sw = document.getElementById("switch")
let shipping = document.getElementById("shipping"); 

function checkForm()
{
    if(username.value == "")
    {
        window.alert("Must enter a username");
    }
    if (password.value == "")
    {
        window.alert('Must enter a password');
    }
    if (ps5.value < 0 || ps5.value == "")
    {
        window.alert('Must have a valid number of PS5 orders');
    }
    if (xbox.value < 0 || xbox.value == "")
    {
        window.alert('Must have a valid number of Xbox Series X orders');
    }
    if (sw.value < 0 || sw.value == "")
    {
        window.alert('Must have a valid number of Nintendo switches orders');
    }
    if (shipping.value == "")
    {
        window.alert('Must choosing a shipping method');
    }
}