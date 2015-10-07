<?hh

/*
 * View Core
 */
class View {

	private $pageVars = array();
	private $template;

	public function __construct(string $template): void {
		$this->template = APP_DIR .'views/'. $template .'.php';
		$this->pageVars["viewBaseUrl"] = '/application/views/App/';
	}

	public function set(string $viewArgs, mixed $val): void {
		$this->pageVars[$viewArgs] = $val;
	}

	public function render(): void {
        $viewArgs = $this->pageVars;
		ob_start();
		include($this->template);
		echo ob_get_clean();
	}
    
}