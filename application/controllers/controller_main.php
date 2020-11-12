<?

class Controller_Main extends Controller
{
	function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_data();


		if(isset($_POST['name_product']) && isset($_POST['price_product'])) {

   	$data_put=$this->model->put_data($_POST['name_product'], $_POST['price_product']);
		if($data_put == true){
			header('HTTP/1.1 200 OK');
			header('Location: http://'.$_SERVER['HTTP_HOST']);
			exit();

		}


		}
		$this->view->generate('main_view.php', 'template_main.php', $data);
	}

}

?>
