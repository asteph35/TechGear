<!DOCTYPE html>
<?php include "db.php";
$strhtml = '<!DOCTYPE html>'
?>
<html lang="en">
</br>
<div class="main main-raised"> 
</br>
<h1><center>Welcome to Tech Gear!</center></h1>

</br>
</br>

<h5><center>This website is designed with our customers needs in mind!</center></h5>
<h5><center>By keeping our customers needs at the forefront, we are able to point users in the right direction making the painful process of shopping for computers and parts just a little bit easier!</center></h5>
<h5><center>By filling out our questionaire, we will be able to narrow down the selection significantly making the shopping process easier and tailored to your needs!</center></h5>
</br></br>
</br></br>
 <div class = "form"> 
 <div class = "form" id = "category"> 
<h6><center>What Category of product are you looking for?<center></h6>

 <pre><center><input type="radio" name="category" value="laptops" id = "laptops"> Laptops     <input type="radio" name="category" value="desktops" id = "desktops"> Desktops     <input type="radio" name="category" value="parts" id = "parts"> Parts</br></br><button onclick="myFunction()">Submit</button></center></pre>  

   
</div>

  
 <script>
function myFunction() {
	for(var i =0; i< 3; i++){
		if(document.getElementsByName("category")[i].checked){
			var cat = document.getElementsByName("category")[i].value;
		}
	}
  if(cat == "desktops"){
	 document.getElementById("desktopform").removeAttribute("hidden");
	
	
	var l = document.getElementById("laptopform"); 
	var p = document.getElementById("partsform"); 
	var c = document.getElementById("category"); 
  var latt = document.createAttribute("hidden");
  var patt = document.createAttribute("hidden");
   var catt = document.createAttribute("hidden");
  latt.value = "democlass";
  patt.value = "democlass";
   catt.value = "democlass";
  l.setAttributeNode(latt);
  p.setAttributeNode(patt);
  c.setAttributeNode(catt);
  }
  if(cat == "laptops"){
	 document.getElementById("laptopform").removeAttribute("hidden");
	 
	 
	 var d = document.getElementById("desktopform"); 
	var p = document.getElementById("partsform"); 
	var c = document.getElementById("category"); 
  var datt = document.createAttribute("hidden");
   var patt = document.createAttribute("hidden");
    var catt = document.createAttribute("hidden");
  datt.value = "democlass";
  patt.value = "democlass";
  catt.value = "democlass";
  d.setAttributeNode(datt);
  p.setAttributeNode(patt);
   c.setAttributeNode(catt);
  }
  if(cat == "parts"){
	 document.getElementById("partsform").removeAttribute("hidden");
	 
	 
	var l = document.getElementById("laptopform"); 
	var d = document.getElementById("desktopform"); 
	var c = document.getElementById("category"); 
  var latt = document.createAttribute("hidden");
  var datt = document.createAttribute("hidden");
   var catt = document.createAttribute("hidden");
  latt.value = "democlass";
  datt.value = "democlass";
  catt.value = "democlass";
  l.setAttributeNode(latt);
  d.setAttributeNode(datt);
   c.setAttributeNode(catt);
  }
  
}

</script>
  </br>
  </br>
  
  
  <div class = "form"><center> 
   
   <form action="index.php" method="post" hidden id="laptopform">
   
   <h1>Laptop Form</h1>
   
     <pre>What is your budget?       <input type="number" name= "budget" ></pre></br>
			<input type="number" name ="cat" value ="1" hidden>

<pre><input type="radio" name="formfactor" value="2n1" >2 in 1 Form Factor     <input type="radio" name="formfactor" value="trad">Traditional</pre>  
</br> 

<pre><p>Will you be carrying the laptop around alot? Is weight important to you?</p></br><input type="radio" name="mobility" value="yes" id = "mobility">Yes     <input type="radio" name="mobility" value="no" id = "mobility">No</pre>  
</br> 


<pre>Screen Sizes <br><br><input type="checkbox" name="screensize1" value="13"> 13 inches     <input type="checkbox" name="screensize2" value="15"> 15 inches     <input type="checkbox" name="screensize3" value="17"> 17 inches </pre>
<br> 

   <input type="submit" value="Submit" name = "submitbtn" onclick="btnfunc();">
   <br>
   <br>
   </form>
   </center></div>
   
   
   
    <div class = "form"><center> 
   
   <form action="index.php" method="post" hidden id="desktopform">
   <h1>Desktop Form</h1>
   <input type="number" name ="cat" id="cat" value ="2" hidden>
     <pre>What is your budget?       <input type="number" name= "budget" ></pre></br>


<pre><input type="radio" name="formfactor" value="2 in 1" >2 in 1 Form Factor     <input type="radio" name="formfactor" value="Traditional" >Traditional</pre>  
</br> 

<pre><p>Will you be carrying the laptop around alot? Is weight important to you?</p></br><input type="radio" name="mobility" value="yes" id = "mobility">Yes     <input type="radio" name="mobility" value="No" id = "mobility">No</pre>  
</br> 


<pre>Screen Sizes <br><br><input type="checkbox" name="screensize" value="13"> 13 inches     <input type="checkbox" name="screensize" value="15"> 15 inches     <input type="checkbox" name="screensize" value="17"> 17 inches </pre>
<br> 

   <input type="submit" value="Submit" name ="submitbtn" onclick="btnfunc();">
   <br>
   <br>
   </form>
   </center></div>
   
   
   <form action="index.php" method="get" hidden id="partsform">
       
  <input type="radio" name="category" value="Parts">Parts         

   <input type="submit" value="Submit">
   </form>
   
   
 
</div>



</div>
<script>
function btnfunc(){
	 document.getElementById("htmlstuff").removeAttribute("hidden");
};
</script>
   <script id="jsbin-javascript">
(function (global) {
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";
		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };	
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };
    global.onload = function () {        
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);
</script>
      <div class="main main-raised" id="htmlstuff"> 
        
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
					<h3 class="aside-title">Category</h3>
						<!-- aside Widget -->
						<div id="get_category">
				        </div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-origin" style="left: 0%;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00" style="z-index: 5;"></div></div><div class="noUi-connect" style="left: 0%; right: 0%;"></div><div class="noUi-origin" style="left: 100%;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00" style="z-index: 4;"></div></div></div></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div id="get_brand">
				        </div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Top selling</h3>
							<div id="get_product_home">
								<!-- product widget -->
								
								<!-- product widget -->
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row" id="product-row">
						<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
							<!-- product -->
							<div id="">
							<!--Here we get product jquery Ajax Request-->
							<?php
if (isset($_POST["submitbtn"])){	
	
	$weightmax = 0;
	$budget = $_POST["budget"];
	$cat =$_POST["cat"];
	
	
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	//if laptop
	if($cat == 1){
		
		$formfactor = $_POST['formfactor'];
		$mobility = $_POST['mobility'];
		
		if($mobility == "yes"){
			$weightmax = 5;
		}
	
		else if($mobility == "no"){
			$weightmax = 100;
		}
		if(isset($_POST["screensize1"])&&isset($_POST["screensize2"])&&isset($_POST["screensize3"])){
			$screenSize1 = $_POST["screensize1"];
			$screenSize2 = $_POST["screensize2"];
			$screenSize3 = $_POST["screensize3"];
			$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize1' OR ScreenSize = '$screenSize2'OR ScreenSize = '$screenSize2' ";
		}
		else if(isset($_POST["screensize2"])&&isset($_POST["screensize3"])){
			$screenSize2 = $_POST["screensize2"];
			$screenSize3 = $_POST["screensize3"];
			$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize2' OR ScreenSize = '$screenSize3' ";
		}
		else if(isset($_POST["screensize1"])&&isset($_POST["screensize3"])){
			$screenSize1 = $_POST["screensize1"];
			$screenSize3 = $_POST["screensize3"];
			$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize1' OR ScreenSize = '$screenSize3' ";
		}
		else if(isset($_POST["screensize1"])&&isset($_POST["screensize2"])){
			$screenSize1 = $_POST["screensize1"];
			$screenSize2 = $_POST["screensize2"];
			$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize1' OR ScreenSize = '$screenSize2' ";
		}
		else if(isset($_POST["screensize1"])){
			$screenSize1 = $_POST["screensize1"];
			$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize1'";
		}
		else if(isset($_POST["screensize2"])){
			$screenSize2 = $_POST["screensize2"];
			$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize2'";
		}
		else if(isset($_POST["screensize3"])){
			$screenSize3 = $_POST["screensize3"];
			$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize3'";
		}
		
		
		
		
		
	}	
	//if desktop
	else if($cat == 2){
		
		$formfactor = $_POST['formfactor'];
		$mobility = $_POST['mobility'];
	
		$screenSize = $_POST["screensize"];
		$weightmax = 0;

		if($mobility == "yes"){
			$weightmax = 5;
		}
	
		else if($mobility == "no"){
			$weightmax = 100;
		}
		$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize'";
	}
	//if parts
	else{
		
		
		$formfactor = $_POST['formfactor'];
		$mobility = $_POST['mobility'];
	
		$screenSize = $_POST["screensize"];
		$weightmax = 0;

		if($mobility == "yes"){
			$weightmax = 5;
		}
	
		else if($mobility == "no"){
			$weightmax = 100;
		}
		$product_query ="SELECT * FROM products WHERE product_price < $budget AND product_cat = '$cat' AND FormFactor = '$formfactor' AND weight < '$weightmax' AND ScreenSize = '$screenSize'";
		
	}
	
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
            
           
			$discount = $pro_price - ($pro_price * .3);
			echo "
				
                        
                        <div class='col-md-4 col-xs-6' >
								<a href='product.php?p=$pro_id'><div class='product'>
									<div class='product-img'>
										<img src='product_images/$pro_image' style='height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
									
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$discount<del class='product-old-price'>$pro_price</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
							</div>
                        
			";
		}
	
}
	
	
}
?>


						</div>
							
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 20-100 products</span>
							<ul class="store-pagination" id="pageno">
								<li ><a class="active" href="#aside">1</a></li>
								
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
</div>




</html>
