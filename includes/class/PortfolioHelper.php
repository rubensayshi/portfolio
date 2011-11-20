<?php 

abstract class PortfolioHelper
{
	protected static $init = false;
	protected static $projects = array();
	
	
	protected static function init()
	{
		if (!self::$init) {
			self::setupProjects();
			
			self::$init;
		}
	}
	
	public static function getProject($slug)
	{
		self::init();
		
		return isset(self::$projects[$slug]) ? self::$projects[$slug] : null;
	}
	
	public static function getAllProjects()
	{
		self::init();
		
		return self::$projects;
	}
	
	protected static function setupProjects()
	{
		self::$projects['gites'] = array(
			'title'			=> 'Gites',
			'images'		=> self::getImages(self::getImageDir() . '/gites'),
			'content'		=> 'Pwetty houses',
		);
		
		self::$projects['timerime'] = array(
			'title'			=> 'Timerime',
			'images'		=> self::getImages(self::getImageDir() . '/timerime'),
			'content'		=> 'Pwetty houses',
		);
		
		self::$projects['bondgenoten'] = array(
			'title'			=> 'Bondgenoten',
			'images'		=> self::getImages(self::getImageDir() . '/bondgenoten'),
			'content'		=> 'Pwetty houses',
		);
		
		self::$projects['dierenambulance'] = array(
			'title'			=> 'Dierenambulance',
			'images'		=> self::getImages(self::getImageDir() . '/diam'),
			'content'		=> 'Pwetty houses',
		);
		
		$i = 0;
		foreach (self::$projects as $slug => $project) {
			$project['slug']	= $slug;
			$project['weight']	= $i;
			
			self::$projects[$slug] = $project;
			$i ++;
		}
	}
	
	protected static function getImageDir()
	{
		return dirname(dirname(dirname(__FILE__))) . '/httpdocs/images/portfolio';
	}
	
	protected static function getImages($dir)
	{
		return glob("{$dir}/*_small.png");
	}
}