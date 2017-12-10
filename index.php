<?php
require_once './includes/php/class.require.php';
require_once './includes/php/class.index_html.php';
require_once './includes/php/class.meta.php';
require_once './includes/php/class.config.php';

index_html::doctype();
index_html::html_start(config::$lang);
index_html::head_start();
meta::charset();
meta::description();
meta::keywords();
meta::author();
meta::generator(config::$version);
requiring::include_css();
index_html::head_end();
index_html::body_start();

?>
