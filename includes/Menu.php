<?php
class Menu{
	private $menu;

	public function add($url,$label,$icon="") {
		$this->menu[]	= new MenuNode($url,$label,$icon);
	}

	public function add_many() {
		foreach(func_get_args() as $subarray)
			$this->add($subarray[0],$subarray[1],$subarray[2]);
	}

	public function new_menu($id) {
		if(isset($this->menu[$id]))
			return $this->menu[$id]->new_menu();
		else 
			return $this;
	}

	public function set_active($id) {
		if(isset($this->menu[$id]))
		$this->menu[$id]->set_active();
	}

	public function output($path='',$tabs=0,$ul_class='nav nav-list'){
		if(count($this->menu)>0) {
			$out  = "\n".str_repeat("  ",$tabs).'<ul'.($ul_class?' class="'.$ul_class.'"':'').'>';
			foreach($this->menu AS $object) $out .= $object->output($path,$tabs+1);
			$out  .= "\n".str_repeat("  ",$tabs).'</ul>';
		}
		return $out;
	}
}
?>