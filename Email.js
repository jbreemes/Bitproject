window.onload = function ()
{
if (window.location.href.indexOf('/500') != -1 && document.getElementById('sendMail'))
{
    document.getElementById("sendMail").checked = true;
    var ele = document.getElementById("newOwn_mlktp");
    ele.addEventListener("change", checkSendEmail, false);
}
};

function checkSendEmail()
{

document.getElementById("sendMail").checked = true;

}