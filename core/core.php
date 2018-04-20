<?php
	class App{
		public function init(){
			$this->_setHeader();
			$this->_loadSysFile();
			$this->_setAutoload();
			$this->_setRoute();
		}
		public function _setHeader() {
			header('Content-type:text/html;charset=UTF-8');
		}
		public function _loadSysFile(){
			$GLOBALS['config']=require_once ROOTPATH.'/core/config.php';
		}
		public function _setAutoload(){
			require_once ROOTPATH.'/core/autoload.php';
			$autoload=new AutoLoad();
			$autoload->register();
		}
		public function _setRoute(){
			require_once ROOTPATH.'/core/route.php';
			$Route=new Route();
			$Route->parse();
		}
	}

?>