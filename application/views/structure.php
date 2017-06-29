<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$view="pages/".$elements["view"];
$this->view("includes/header");
$this->view("includes/sidebar");
$this->view("pages/".$elements['view'],$elements);
$this->view("includes/footer");