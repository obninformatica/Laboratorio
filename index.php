<?php

print_r($_SERVER['REQUEST_URI']);

if(pref_match('/\.(?:png|jpg|jpeg|gif )$/', $_SERVER["REQUEST_URI"]))
{
	return fasle;
}
else
{
	echo "<p>Welcome to php</p>";
}