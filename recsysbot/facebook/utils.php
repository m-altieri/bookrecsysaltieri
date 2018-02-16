<?php

function sendMessageURI() {
	return 'https://graph.facebook.com/v2.6/me/messages?access_token=' . token();
}
	
function token() {
	return 'EAACkzauyGUUBAH5xRhy4BNXFqIJV9H73N8DFy1KjMVw11UYNCsbn0DzMztJ1D92xTKlr1DEDIwMky896MgCE6ZBd1ZAUf2ZChr80auQ9MwZBL4fprZAa4ukjDzDaxtzC0Rle0omuLnszdBBgCGZAxp1gK3lSLnvD1ZCMmAXSotRnQZDZD';
}