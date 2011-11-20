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
		self::$projects['rtvrijnmond'] = array(
			'title'			=> 'RTVRijnmond',
			'images'		=> self::getWorkInProgressImages(),
			'content_tpl'	=> 'portfolio/rijnmond',
			'tags'			=> array('Drupal6', 'Varnish', 'Capistrano', 'Cluster', 'Migration', 'Symfony2', 'Twitter Bootstrap'),
			'urls'			=> array('http://beta.rijnmond.nl'	=> 'BETA'),
		);
		
		self::$projects['koersvo'] = array(
			'title'			=> 'Onderwijszorgprofielen',
			'images'		=> self::getImages(self::getImageDir() . '/koersvo'),
			'tags'			=> array('Symfony2', 'HTML2PDF', 'Forms'),
		);
		
		self::$projects['gites'] = array(
			'title'			=> 'Gites',
			'images'		=> self::getImages(self::getImageDir() . '/gites'),
			'content_tpl'	=> 'portfolio/gites',
			'tags'			=> array('HoppingerCMS', 'Huge project', 'Invoicing', 'Migration', 'Lead developer'),
			'urls'			=> array('http://www.gites.nl' => 'Gites'),
		);
		
		self::$projects['timerime'] = array(
			'title'			=> 'Timerime',
			'images'		=> self::getImages(self::getImageDir() . '/timerime'),
			'tags'			=> array('HoppingerCMS', 'High load'),
			'urls'			=> array('http://www.timerime.com' => 'Timerime'),
		);
		
		self::$projects['dierenambulance'] = array(
			'title'			=> 'Dierenambulance',
			'images'		=> self::getImages(self::getImageDir() . '/diam'),
			'tags'			=> array('HoppingerCMS'),
		);
		
		self::$projects['vvd'] = array(
			'title'			=> 'VVD Rotterdam',
			'images'		=> self::getImages(self::getImageDir() . '/vvd'),
			'tags'			=> array('Drupal'),
		);
		
		self::$projects['qhome'] = array(
			'title'			=> 'Qhome',
			'images'		=> self::getImages(self::getImageDir() . '/qhome'),
			'tags'			=> array('HoppingerCMS', 'Gites API'),
		);
		
		self::$projects['bondgenoten'] = array(
			'title'			=> 'Bondgenoten',
			'images'		=> self::getImages(self::getImageDir() . '/bondgenoten'),
			'tags'			=> array('HoppingerCMS'),
			'urls'			=> array(
				'http://www.bondgenoten.net'		=> 'Bondgenoten',
				'http://www.boomvanmourik.nl'		=> 'Boom van mourik',
				'http://www.newid.nl'				=> 'Van tongeren',
				'http://www.uwontwerper.nl'			=> 'Uw ontwerper',
			),
		);
		
		self::$projects['united'] = array(
			'title'			=> 'Unitedtrust',
			'images'		=> self::getImages(self::getImageDir() . '/united'),
			'tags'			=> array('HoppingerCMS'),
		);
		
		self::$projects['maasmond'] = array(
			'title'			=> 'Maasmond',
			'images'		=> self::getImages(self::getImageDir() . '/maasmond'),
			'tags'			=> array('HoppingerCMS'),
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
	 * get a random image from the random images folder
	 * 
	 * @return array[array]
	 */
	protected static function getWorkinprogressImages()
	{
		$images = self::getImages(self::getImageDir() . '/random');
		
		return array($images[array_rand($images)]);
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