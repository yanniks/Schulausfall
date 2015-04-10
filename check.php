#!/usr/bin/env php
<?php
function checkstore() {
	$content = file_get_contents("https://store.apple.com/de/");
	if (strpos($content,"Das neue MacBook") !== false) {
		exec("open http://store.apple.com/de/buy-watch/apple-watch?product=MJ3U2FD/A&step=detail");
		exec("say Store online!");
		return;
	}
	sleep(2);
	checkstore();
}
checkstore();