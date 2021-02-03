<!DOCTYPE html>
<html>
<head>
	<title>Libros NYT</title>
</head>
<body>
    <h1>buscar Best Sellers</h1>
    <div>
    <form action="show.php" method="post">
    	<dl>
        	<dt>buscar por</dt>
        	<dd>
          		<select name="tipo">
          			<option value="todos">Todos</option>
          			<option value="fecha">updated: Monthly</option>
          			<option value="fecha2">updated: Weekly</option>
          		</select>
          	</dd>
    	</dl>
    	<dl>
    		<input type="submit" value="Ver-info" />
    	</dl>
    </form>
	</div>


</body>
</html>