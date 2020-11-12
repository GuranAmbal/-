<?
class Model_Products extends Model
{
	public function get_product()
	{
        $db = new MyDB();

        $product_id = $_GET["id"];

		$query="SELECT * FROM Products WHERE p_id=$product_id;";

		$result=$db->query($query);
		$arr=array();
		while($row= $result->fetchArray()){

		$arr['id']=$row['p_id'];
		$arr['Name']=$row['p_name'];
		$arr['Price']=$row['price'];

		}

		$db->close();
		return $arr;
	}
}
?>