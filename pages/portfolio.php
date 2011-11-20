<?php 

if (isset($_SERVER['REQUEST_URI']) && preg_match('#^/portfolio/(.*)$#', $_SERVER['REQUEST_URI'], $matches) && ($slug = $matches[1]) && ($project = PortfolioHelper::getProject($slug))) {
	
	if (isset($project['page_tpl'])) {
		return render($project['page_tpl'], array('project' => $project));
	}
		
	return render('project', array(
		'project'		=> $project,
		'content'		=> isset($project['content_tpl']) ? render($project['content_tpl'], array(
			'project'		=> $project
		)) : null,
	));
}

return render('portfolio', array(
	'projects'		=> PortfolioHelper::getAllProjects(),
));