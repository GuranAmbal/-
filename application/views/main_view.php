

  <div class="container">
  <h2>Добавление товара</h2>
  <a href="#data" id="inline" class="badge badge-success">Добавить товар</a>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Номер товара</th>
      <th scope="col">Название товара</th>
      <th scope="col">Цена товара</th>
      <th scope="col">Перейти к товару</th>
    </tr>
  </thead>
  <tbody>
    <?php
	foreach($data as $val)

	{

		echo '<tr><th>'.$val['id'].'</th><td>'.$val["Name"].'</td><td>'.$val["Price"].'</td><td><a href="/products?id='.$val['id'].'">Перейти к товару</a></td></tr>';
	}

?>

  </tbody>
</table>


</div>
<div id="myModalBox"  class="container" style="width:50%; display:none;">
  <div id="data">

    <form id ="form" method="post" action="/" >
      <div class="form-group">
        <label for="exampleInputEmail1">Название товара</label>
        <input id="pname" name="name_product" type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Название товара">
        <small id="pnameHelp" class="form-text text-muted" style="display:none">Введи название продукта.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Цена товара</label>
        <input id="pprice" name="price_product" type="number" class="form-control" id="exampleInputPassword1" placeholder="Цена товара">
        <small id="ppriceHelp" class="form-text text-muted" style="display:none">Введи цену товара.</small>
      </div>

      <button id="addProduct" type="submit" class="btn btn-primary" >Сохранить товар</button>
    </form>
  </div>
</div>
