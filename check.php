#!/usr/bin/env php
<?php
function checkstore() {
	$headers = get_headers("https://store.apple.com/de/");
	if (strpos($headers[0],"503 Service Unavailable") === false) {
		exec("open http://store.apple.com/de/buy-watch/apple-watch?product=MJ3U2FD/A&step=detail");
		exec("say Store online!");
		return;
	}
	sleep(2);
	checkstore();
}
checkstore();