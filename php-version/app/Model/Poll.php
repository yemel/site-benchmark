<?php

class Poll extends AppModel {

	var $name = 'Poll';
	var $hasMany = 'Choice';
}
