<?php 

/*
 * check if the URL matches /portfolio/<slug> and if the slug is a real project
 * if it is we render the detail page
 */
if (isset($_SERVER['REQUEST_URI']) && preg_match('#^/portfolio/(.*)$#', $_SERVER['REQUEST_URI'], $matches) && ($slug = $matches[1]) && ($project = PortfolioHelper::getProject($slug))) {
	
	// if we have a full page_tpl then use it
	if (isset($project['page_tpl'])) {
		return render($project['page_tpl'], array('project' => $project));
	}
	
	// if we didn't have a full page_tpl then render a default project page, try using a content_tpl
	return render('project', array(
		'project'		=> $project,
		'content'		=> isset($project['content_tpl']) ? render($project['content_tpl'], array(
			'project'		=> $project
		)) : null,
	));
}

// render overview page if we didn't render detail page
return render('portfolio', array(
	'projects'		=> PortfolioHelper::getAllProjects(),
));