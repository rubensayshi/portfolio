<?php 

if (isset($_SERVER['REQUEST_URI']) && preg_match('#^/portfolio/(.*)$#', $_SERVER['REQUEST_URI'], $matches) && ($slug = $matches[1]) && ($project = PortfolioHelper::getProject($slug))) {
	return render('project', array('project' => $project));
}

return render('portfolio', array(
	'projects'		=> PortfolioHelper::getAllProjects(),
));