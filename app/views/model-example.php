<section id="">
	<h2>Model Example</h2>
	<p>Here I use a model to create random Product objects</p>
	<div>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Sum</th>
			</tr>
			<?php 
			foreach ($products as $product) {
			    echo "<tr>";
    			    echo "<td>" . $product->id . "</td>";
    			    echo "<td>" . $product->name . "</td>";
    			    echo "<td>" . $product->price . "</td>";
    			    echo "<td>" . $product->quantity . "</td>";
    			    echo "<td>" . $product->getTotal() . "</td>";
				echo "</tr>";
			}
			?>
		</table>
	</div>
</section>