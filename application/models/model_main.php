<?
class Model_Main extends Model
{
	public function get_data()
	{

		$db = new MyDB();

		$query="SELECT * FROM Products ORDER BY p_id DESC;";

		$result=$db->query($query);
		$arr=array();
		$i = 0;
		while($row = $result->fetchArray()){
		    $arr[$i]['id']=$row['p_id'];
		    $arr[$i]['Name']=$row['p_name'];
		    $arr[$i]['Price']=$row['price'];
		    $i++;
		}

		$db->close();
		return $arr;
	}
	public function put_data($name, $price)
	{

		$db = new MyDB();

		$query="INSERT INTO Products".

		"(p_name,price)".

		"VALUES ('$name',$price);";



		$db->exec($query);
		$db->close();
		return true;
	}
}
?>