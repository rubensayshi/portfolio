<?php 

/**
 * static helper class for the portfolio page 
 * 
 */
abstract class PortfolioHelper
{
	/**
	 * determine if we initialized
	 * 
	 * @var	boolean			$init
	 */
	protected static $init = false;
	
	/**
	 * store projects in this var
	 * 
	 * @var	array[array]	$projects
	 */
	protected static $projects = array();
	
	/**
	 * initialize the static helper class
	 * 
	 */
	protected static function init()
	{
		if (!self::$init) {
			self::setupProjects();
			
			self::$init;
		}
	}
	
	/**
	 * get a project by it's slug
	 * 
	 * @param	string			$slug
	 * @return	array|null
	 */
	public static function getProject($slug)
	{
		self::init();
		
		return isset(self::$projects[$slug]) ? self::$projects[$slug] : null;
	}
	
	/**
	 * get all projects
	 * 
	 * @return	array[array]
	 */
	public static function getAllProjects()
	{
		self::init();
		
		return self::$projects;
	}
	
	/**
	 * setup the $projects array for the static helper
	 * 
	 */
	protected static function setupProjects()
	{
		self::$projects['gites'] = array(
			'title'			=> 'Gites',
			'images'		=> self::getImages(self::getImageDir() . '/gites'),
			'content_tpl'	=> 'portfolio/gites',
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
	
	/**
	 * get the portfolio image directory
	 * 
	 * @return	string
	 */
	protected static function getImageDir()
	{
		return dirname(dirname(dirname(__FILE__))) . '/httpdocs/images/portfolio';
	}
	
	/**
	 * get images from specified dir, limited to 5
	 * 
	 * @param	string		$dir
	 * @return	array
	 */
	protected static function getImages($dir)
	{
		$images = glob("{$dir}/*_small.png");
		
		if (count($images) > 5) {
			$images = array_splice($images, 0, 5);
		}
		
		return $images;
	}

	/**
	 * get an ID to with our javascript based on the image name
	 * 	this function can handle every different size of the images
	 * 
	 * @param	string		$img
	 * @return	string
	 */
	public static function getImageId($img)
	{
		$img = explode("/", $img);
		
		$name	= array_pop($img);
		$name	= str_replace('_small', '', $name);
		$name	= str_replace('.png', '', $name);
		$dir	= array_pop($img);
		
		return "{$dir}-{$name}";
	}
	
	/**
	 * get the large version of a small image
	 * 
	 * @param	string		$img
	 * @return	string
	 */
	public static function getLargeImage($img)
	{
		return str_replace('_small', '_large', $img);
	}
}