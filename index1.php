<!DOCTYPE html>
<html>
<head>
	<title>FoodieSwift</title>
	<link rel='stylesheet' type='text/css' href='stylesheet1.css'/>
	<script type="text/javascript">
		
		function openTabContent(evt, category) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(category).style.display = "block";
    evt.currentTarget.className += "active";
}



    /*  function printChecked(){
        var content = document.getElementById("orderContent");
        var items=document.getElementsByName('food_id');
        var selectedItems="";
        for(var i=0; i<items.length; i++){
          if(items[i].type=='checkbox' && items[i].checked==true)
		{
            		//selectedItems=items[i].id;
			document.getElementById("orderContent").innerHTML = items[i].id ; 
			//document.getElementById("orderContent").innerHTML = "hi\n" ; 
		}
        }
      //  document.getElementById("orderContent").innerHTML = selectedItems ; 
        //alert(selectedItems);
      } 

*/


	</script>
</head>
<body onload="openTabContent(event, 'soups')">

	<div id="header_index">
		<h1><b><i>FoodieSwift</i></b></h1>
	</div>
 
  <div class="header">
	   <div class="tab">
	  <button class="tablinks" onclick="openTabContent(event, 'soups')" ><h2>Soups</h2></button>
	  <button class="tablinks" onclick="openTabContent(event, 'starters')"><h2>Starters</h2></button>
	  <button class="tablinks" onclick="openTabContent(event, 'mcourse')"><h2>Main course</h2></button>
	  <button class="tablinks" onclick="openTabContent(event, 'ricenoodle')"><h2>Rice & Noodles</h2></button>
	  <button class="tablinks" onclick="openTabContent(event, 'desserts')"><h2>Desserts</h2></button>  


    <!--<button id="basketButton" value="printSelectedItems"><h3>Add to Basket</h3></button>
   
    <!--<div class="basket">
      <button id="basketButton"><h3>Add to Basket</h3></button>
    </div>-->
<button id="basketButton" onClick="location.href='logout.php'" value="placeOrder">Log Out</button>
     </div>

	</div>




<form action="cart.php"  method="post">
<h3><div class="orderHeader1" >Name</div><div class="orderHeader2">Price</div><div class="orderHeader2">Quantity</div></h3> 
<div id="soups" class="tabcontent">
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="1" id="Tomato Soup">Tomato Soup</div><div class="price">80</div> 
   <div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="2" id="Mix-veg Soup">Mix-veg Soup</div><div class="price">80</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="3" id="Manchow Soup">Manchow Soup</div><div class="price">85</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="4" id="Mushroom Soup">Mushroom Soup</div><div class="price">75</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="5" id="Palak Soup">Palak Soup</div><div class="price">80</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="6" id="Sweet corn Soup">Sweet corn Soup</div><div class="price">85</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>    

</div>

<div id="starters" class="tabcontent">
   <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="7" id="Paneer Chilly">Paneer Chilly</div><div class="price">160</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="8" id="Chinese Bhel">Chinese Bhel</div><div class="price">120</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="9" id="Veg Manchurian dry">Veg Manchurian dry</div><div class="price">120</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="10" id="Gobi Manchurian">Gobi Manchurian</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="11" id="Green Peas Dry">Green Peas Dry</div><div class="price">130</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="12" id="Paneer Tikka dry">Paneer Tikka dry</div><div class="price">160</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3> 
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="13" id="Paneer Manchurian">Paneer Manchurian</div><div class="price">160</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>   
</div>

<div id="mcourse" class="tabcontent">
   <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="14" id="Veg Handi">Veg Handi</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="15" id="Veg Kadhai">Veg Kadhai</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="16" id="Veg Bhuna">Veg Bhuna</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="17" id="Veg Hyderabadi">Veg Hyderabadi</div><div class="price">150</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="18" id="Veg Tawa">Veg Tawa</div><div class="price">150</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="19" id="Malai Kofta">Malai Kofta</div><div class="price">150</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="20" id="Veg Kofta">Veg Kofta</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>  
   <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="21" id="Mushroom Masala">Mushroom Masala</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="22" id="Kaju Curry">Kaju Curry</div><div class="price">170</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="23" id="Sev Bhaji">Sev Bhaji</div><div class="price">130</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="24" id="Paneer Masala">Paneer Masala</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="25" id="Aloo Mutter">Aloo Mutter</div><div class="price">130</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="26" id="Dal Makhani">Dal Makhani</div><div class="price">130</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>    
</div>

 <div id="ricenoodle" class="tabcontent">
 <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="27" id="American Chopsuey">American Chopsuey</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="28" id="Veg Hakka Noodles">Veg Hakka Noodles</div><div class="price">130</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="29" id="Veg Fried Rice">Veg Fried Rice</div><div class="price">130</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="30" id="Veg Singaporian Rice">Veg Singaporian Rice</div><div class="price">130</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="31" id="Manchurian Noodles">Manchurian Noodles</div><div class="price">150</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="32" id="Hong Kong Noodles">Hong Kong Noodles</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
   <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="33" id="Hong Kong Fried Rice">Hong Kong Fried Rice</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>  
   <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="34" id="Palak Fried Rice">Palak Fried Rice</div><div class="price">140</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
 </div>

 <div id="desserts" class="tabcontent">
 <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="35" id="Fruit Salad">Fruit Salad</div><div class="price">90</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="36" id="FruitSalad with Vanilla Icecream">FruitSalad + Icecream</div><div class="price">100</div><div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="37" id="Seetaphal Rabadi">Seetaphal Rabadi</div><div class="price">50</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3>
  <hr>
  <h3><div class="nameOfDish" ><input type="checkbox" name="food_id[]" value="38" id="Gulab Jamun(2 pieces)">Gulab Jamun(2 pieces)</div><div class="price">50</div>
<div class="price" ><input type="number" name="quantity[]" value=" "  min="1" ></div></h3> 

</div>
<button id="basketButton" type="submit" value="printSelectedItems"><h3>Add to Basket</h3></button>

</form>
</body>
</html>
