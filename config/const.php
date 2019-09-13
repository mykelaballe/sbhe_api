<?php 
return [
	'role' => [
		'su' => 1,
		'dir' => 2,
		'pm' => 3,
		'apm' => 4,
		'engr' => 5,
		'sup' => 6,
		'wrkr' => 7,
		'sfty' => 8,
		'qs' => 9,
		'coord' => 10,
		'log' => 11,
		'drvr' => 12,
		'proc' => 13
	],
	'status_code' => [
		'not_found' => 404,
		'success' => 200,
		'valid' => 200,
		'invalid' => 401
	],
	'request_entity_type' => [
		'worker_request' => 'employees',
		'announcement' => 'announcements',
		'project' => 'projects'
	],
	//type => table
	'notification_entity_type' => [
		'worker_request' => [
			'table' => 'employees',
			'title' => 'New Worker Request'
		],
		'new_announcement' => [
			'table' => 'announcements',
			'title' => 'New Announcement'
		],
		'new_assignment_task' => [
			'table' => 'tasks',
			'title' => 'New Task Assignment'
		],
		'new_assignment_project' => [
			'table' => 'projects',
			'title' => 'New Project Assignment'
		],
		'new_message' => [
			'table' => 'projects',
			'title' => 'New Project Comment'
		]
	],
	'admin_roles' => [1,2],
	'working_hours' => 9 ,
	'show_all_project_ids' => [1,2,3,8,9],
	'attendance_exclude_roles' => [1,2,3,4],
	'superadmin_id' => 1,
	'director_id' => 2,
	'status' => [
		'cancelled' => 'Cancelled',
		'in_progress' => 'In Progress',
		'on_hold' => 'On Hold',
		'completed' => 'Completed'
	]
];