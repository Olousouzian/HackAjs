<?hh

class Main extends Controller {
	
	public function index(): void {
		$template = $this->loadView('App/indexAjs');
		$template->render();
	}
}