<?hh

/*
 * Controller Core
 */
class Controller {
	
	public function loadModel(string $name): Model {
		include(APP_DIR .'models/'. strtolower($name) .'.php');

		$model = new $name();
		return $model;
	}
	
	public function loadView(string $name): View {
		$view = new View($name);
		return $view;
	}
	
	public function loadPlugin(string $name): void {
		include(APP_DIR .'plugins/'. strtolower($name) .'.php');
	}
	
	public function loadHelper(string $name): mixed {
		include(APP_DIR .'helpers/'. strtolower($name) .'.php');
		$helper = new $name();
		return $helper;
	}
	
	public function redirect(string $loc): void {
		header('Location: '. cBaseURL . $loc);
        exit;
	}
    
}