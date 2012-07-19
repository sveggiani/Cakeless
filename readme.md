# Cakeless - A very simple lessphp plugin for CakePHP #

This plugin is a very simple implementation of [lessphp](http://leafo.net/lessphp/) for CakePHP 2.x.

To use Cakeless download and unzip the plugin or clone git repository in <code>plugins/cakeless</code>.


## Using the plugin ##

### In your Controllers or App Controller ###

Load plugin in bootstrap.php (for CakePHP 2.x):

	CakePlugin::load('Cakeless');

Include the component using:

	public $components = array('Cakeless.Cakeless');

Indicate the .less file you want to compile and the desired location and filename for the compiled file. For example:

	$lessExample = APP . 'plugins' . DS . 'cakeless' . DS . 'webroot' . DS . 'less' . DS . 'example.less';
	$cssExample = APP . 'plugins' . DS . 'cakeless' . DS . 'webroot' . DS . 'css' . DS . 'example.css';

	$this->Cakeless->compile( $lessExample, $cssExample );

This will compile the provided example file (<code>/app/plugins/cakeless/webroot/less/example.less</code>) to <code>/app/plugins/cakeless/webroot/css/example.css</code>. This could be used for testing purposes but you may want to see a more real life example. Here you have it:

	$lessMainStyles = WWW_ROOT . 'less' . DS . 'main_styles.less';
	$cssMainStyles = WWW_ROOT . 'css' . DS . 'main_styles.css';

	$this->Cakeless->compile( $lessMainStyles, $cssMainStyles );

**IMPORTANT NOTE:** Compilation will only occur under debug modes 1 and above of your CakePHP application.

### In your Views ###

Simply link to the CSS file as usual:

	echo $this->Html->css( 'main_styles', null, array( 'media' => 'screen, projection' ) );


## Requirements ##

* PHP version: PHP 5.2+
* CakePHP version: Cakephp 2.x Stable
* lessphp version: 0.3.5 (no need to download, included in <code>/vendors</code> folder)

## Support ##

For support and feature request, please use the repository [Issues section at GitHub](https://github.com/sveggiani/Cakeless/issues).

## About LESS and lessphp ##

If you want to know more about **LESS syntax** please check [the official LESS documentation](http://lesscss.org/).
For **lessphp** extended documentation and downloads please visit [the official lessphp website](http://leafo.net/lessphp/).

## License ##

Copyright (c) 2011 Sebastián Veggiani, http://actionauta.com

Licensed under [The MIT License (MIT)](http://www.opensource.org/licenses/mit-license.php)<br/>
Redistributions of files must retain the above copyright notice.

## Copyright ###

Copyright 2011<br/>
[Sebastián Veggiani](http://actionauta.com)<br/>
