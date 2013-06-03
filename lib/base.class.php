<?php
/**
 * 目录分隔符 
 */
defined('DS') or define('DS', DIRECTORY_SEPARATOR);
/**
 * 系统目录  
 */
defined('BASE_PATH') or define('BASE_PATH', dirname(__FILE__));
/**
 *  CORE文件目录
 */
defined('CORE_PATH') or define('CORE_PATH', BASE_PATH . DS . 'core' );
/**
 *  Plugins文件目录
 */
defined('PLUGINS_PATH') or define('PLUGINS_PATH', BASE_PATH . DS . 'plugins' );


class Base 
{
	private static $basePath;	  // 系统根目录
	private static $libPath;	  // lib根目录
	private static $_app;

	/**
	 * 导入文件
	 * 
	 * @param string $fileName			文件名称
	 * @param string $fileType			文件类型 
	 * @param int $type					导入目录类型:0->core, 1->plugins	
	 * @static
	 * @access public
	 * @return bool						返回导入标记
	 */
	public static function import($fileName, $fileType = ".class.php", $type = 0)
	{

	}

	/**
	 * 实例化应用
	 * 
	 * @param array $config 
	 * @static
	 * @access public
	 * @return void
	 */
	public static function createApp(array $config)
	{
		self::$libPath	= __DIR__;
		self::$basePath = dirname(self::$libPath);

		//return $this;
	}

	//public function 

	public static function getDb() 
	{
	}

	public static function setApp($app)
	{
		self::$_app = $app;
	}
}
