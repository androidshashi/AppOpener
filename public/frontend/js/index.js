function copyShortUrl(shortUrl) {
    navigator.clipboard.writeText(shortUrl);
    document.getElementById('message').style.display="block";
}
