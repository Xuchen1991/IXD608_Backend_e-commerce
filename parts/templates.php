<?

function productListTemplate($r,$o){
return $r.<<<HTML
<a class="col-xs-12 col-md-4" href="product_item.php?id=$o->id">
	<figure class="figure product display-flex flex-column">
		<div class="flex-stretch">
			<img src="img/$o->thumbnail" alt="">
		</div>
		<figcaption class="flex-none">
			<div class="product-list-brand-name">$o->brand</div>
			<div class="product-list-product-name">$o->title</div>
			<div class="product-list-price">&dollar;$o->price</div>
		</figcaption>
	</figure>
</a> 
HTML;
}


function cartListTemplate($r,$o) {
return $r.<<< HTML
<div class="display-flex">
	<div class="flex-none images-thumbs">
		<img src="img/$o->thumbnail">
	</div>
	<div class="flex-stretch">
		<strong>$o->brand</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none"> 
		&dollar;$o->price
	</div>
</div>
HTML;
}


?>









