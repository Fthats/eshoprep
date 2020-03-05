<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"/>
</head>
<body>
	<div class="homepage-body">
		<div class="lol">
	<header>
		<h1>интернет магазин под диваном</h1>         
		<a href="{{ route('logout')}}"><h3>Выйти</h3></a>
	</header>
		<br>
		@foreach($items as $item)
			<div class="item">
				<img class="item-img" src="{{ $item->img }}">
				<a href="#"><h2 class="item-name">{{$item->name}}</h2></a>
				<form class="add-button" action="">
					<button name="basket">
						<img class="basket" src="https://c7.hotpng.com/preview/140/619/617/e-commerce-online-shopping-shopping-centre-buy.jpg">
					</button>
				</form>
			</div>
			<br>
		@endforeach
		</div>
	<footer>
		<h4>copyrighted by BTS company</h4>
	</footer>
	</div>

</body>
</html>