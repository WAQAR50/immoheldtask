<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ImmoHeld</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-grid.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-reboot.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-utilities.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
	    <!-- STYLES -->
</head> 	 	

<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header class="navbar-dark bg-dark">
	<div class="container ">
		<div class="row">
			<div class="col-md-4">
				<div class="logo pt-2">
					<img src="https://immoheld.eu/blog/wp-content/uploads/2018/10/Immoheld-Logo-white.png">
				</div>
			</div>
			<div class="col-md-8">
				<nav class="navbar navbar-expand-lg ">
					<a class="navbar-brand" href="#">Listing</a> 
				</nav>
			</div>
		</div>
	</div>
</header>


<!-- CONTENT -->
<div class="container ">
	<div class="mt-5">
		<form action="<?= site_url('postdata'); ?>" method="POST" enctype="multipart/form-data">
		
		<div class="row g-3 align-items-center">
		  <div class="col-auto">
			<input type="text" placeholder="Price" id="price" name="p_price"  class="form-control" value="">
		  </div>
		  <div class="col-auto">
			<input type="text" placeholder="Size" id="size"  name="p_size" class="form-control" value="">
		  </div> 
		  <div class="col-auto">
			<button type="submit" class="form-control" >Filter</button>
		  </div>
		  
		</div>
		</form>
	</div>
		<section class="py-5">
				
				<div class="well well-sm">
					<strong>Style</strong>
					<div class="btn-group">
						<a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
						</span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
							class="glyphicon glyphicon-th"></span>Grid</a>
					</div>
				</div>
				<div id="products" class="row list-group">
				<div id="plist" class="row">
			<?php foreach ($listing as $item): ?>
					<div class="item  col-md-4">
						<div class="thumbnail">
							<img class="group list-group-image" src="https://tool.immoheld.eu/uploads/properties/small/axoz982w_2022062140313387301_project_221.012_3D-Visuals_NUE-Kohlenhof_V01a_Strasse.jpg" alt="" />
							<div class="caption">
								<h4 class="group inner list-group-item-heading">
									<?= esc($item->p_title) ?></h4>
								
								<div class="row">
									<div class="col-xs-12 col-md-6">
										<p class="lead">
											€<?= esc($item->p_price) ?></p>
									</div>
									<div class="col-xs-12 col-md-6">
										<?= esc($item->p_size) ?>m2
									</div>
								</div>
								<div class="address">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
									<?= esc($item->p_address) ?>
								</div>
							</div>
						</div>
					</div>
<?php endforeach ?>
					</div>
				</div>
			


		</section>

	
</div>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer class="navbar-dark bg-dark mt-5">
    <div class="copyrights text-center pt-3 pb-1">
        <p class="text-white ">Copyright © 2022 Immoheld Ventures GmbH</p>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	

<script type="text/javaScript" href="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
</footer>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
	(function ($) {
		'use strict';
	$(document).ready(function () {
		$('#list').click(function (event) { 
			event.preventDefault(); 
			$('#products .item').addClass('list-group-item'); });
		$('#grid').click(function (event) {
			event.preventDefault(); 	
		$('#products .item').removeClass('list-group-item'); 
		$('#products .item').addClass('grid-group-item'); });
	});
	
	
	
	var page = 1;
	$(window).scroll(function() {
		console.log('scrolling');
	    if($(window).scrollTop() + $(window).height() >= ( $(document).height() - 200 )) {
	        page++;
			console.log(page);
	        loadMoreData(page);
	    }
	});
		
	})(jQuery);
	

	function loadMoreData(page){
				
				var price = <?php echo  isset($_POST['p_price']) && !empty($_POST['p_price']) ? $_POST['p_price'] : '0'  ?>;
				var size = <?php echo isset($_POST['p_size']) && !empty($_POST['p_size'])? $_POST['p_size'] : '0' ?>;
		
			$('#price').val(price);
			$('#size').val(size);
			var method = 'get';
			var baseurl = 'http://localhost:8080/?page=' + page;
		if(price < 0 || size < 0 ){
				
		
	  $.ajax(
	        {
				
	            url: baseurl,
	            type: method,
				//data: {page: page, price: price, size: size },
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data == " "){
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#products #plist").append(data.listing_html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              //alert('server not responding...');
	        });
		}
	}

</script>

<!-- -->

</body>
</html>
