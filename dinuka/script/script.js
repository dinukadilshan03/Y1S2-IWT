//JS for alerts in login and register pages with redirect function
function displayAlertRedirect(message, redirectUrl) {
    if (confirm(message)) {
        window.location.href = redirectUrl;
    }
};


function displayAlertRedirect(message, destination) {
    alert(message);
    window.location.href = destination;
}


