<?php
require './../config.php';

global $DB;

$result= $DB->get_records_sql('SELECT id,name FROM moodle.course_categories
where visible = 1
and id >1;');

 echo json_encode ($result); 

exit;
