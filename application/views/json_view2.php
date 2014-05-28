<?php
$this->output->set_header('Content-Type: application/json; charset=utf-8');
echo "{Categories: ",json_encode($json), "}";
