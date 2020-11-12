<?
class Controller_Products extends Controller
{
	function __construct()
	{
		$this->model = new Model_Products();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_product();
		$this->view->generate('product_view.php', 'template_main.php', $data);
	}
}

?>