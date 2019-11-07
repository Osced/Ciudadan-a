<?php
require './../config.php';
 require_once($CFG->libdir .'/coursecatlib.php');

global $DB;

$result= $DB->get_records_sql('
select C.id,
C.fullname,
C.summary,concat(U.firstname," ",U.lastname)  Creador,
cast(FROM_UNIXTIME(C.startdate) as date) fecha

from {course} C
join {context} ctx 			on ctx.instanceid 	= C.id
join {role_assignments} R_A	on R_A.contextid 	= ctx.id
join {user} U					on U.id				= R_A.userid
where C.id>1 and C.visible=1
and ctx.contextlevel=50
and R_A.roleid = 1');

foreach ($result as $c){
	$courseid->id = $c->id;
	$course = new course_in_list($courseid);
	$outputimage = '';
	foreach ($course->get_course_overviewfiles() as $file) {
		if ($file->is_valid_image()) {
			$imagepath = '/' . $file->get_contextid() .
					'/' . $file->get_component() .
					'/' . $file->get_filearea() .
					$file->get_filepath() .
					$file->get_filename();
			$imageurl = file_encode_url($CFG->wwwroot . '/pluginfile.php', $imagepath,
					false);
			$outputimage = html_writer::tag('div',
					html_writer::empty_tag('img', array('src' => $imageurl,'class' => 'foto_curso')),
					array('class' => 'courseimage'));
			// Use the first image found.
			$c->src = $imageurl;
			$c->img = $outputimage;
			break;
		}
	}
}
 echo json_encode ($result); 
 //echo $outputimage;






exit;
