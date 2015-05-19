<?php

register_sidebar(array(
	'name' => 'Blog',
	'id' => 'blog',
	'before_widget' => '<div>',
	'after_widget' => "</div>",
	'before_title' => "<h3>",
	'after_title' => "</h3>"
));

?>