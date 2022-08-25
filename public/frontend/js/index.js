function copyShortUrl() {
    /* Get the text field */
    var copyText = document.getElementById("short_url");
    var messageText = document.getElementById("message");

    if (copyText.value == "") {
        messageText.innerHTML = "Please generate short link first!";
        messageText.style.display = "block";
        return;
    }
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */

    /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);

    /* Alert the copied text */
    messageText.style.display = "block";
}
