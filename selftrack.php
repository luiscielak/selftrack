<!-- 

# Self-tracking Application
# Object Oriented Hierarchy
# Luis Cielak
# 2013-02-14

-->

<head>

<title>selftrack</title>

<body>

<?php


class Entry{

  var $entryId, $dateTime, $itemName, $amount, $geoLoc;

	function addEntry($itemName, $amount){
		
		// Assign passed variables
		$this->itemName = itemName;
		$this->amount = amount;

		// Assigned derived variables
		$this->dateTime = dateTime;
		$this->geoLoc = geoLoc;

	}

	function getEntry($entryId){

		// Get entry data

	}

	function editEntry($entryId){
		
	}


	function deleteEntry($entryId){
		
	}

	function reAddEntry($entryId){

	}
}


class Item{

	var $itemId, $itemName, $itemCategory;

	function editItem(){

	}

	function deleteItem(){

	}

	function findItem(){

	}

	function viewItem(){

	}

	function viewItems(){

	}

	function addCategory(){

	}

}


class Category{

	var $categoryId, $categoryName;

	function addCategory(){

	}

	function viewCategory(){

	}

	function editCategory(){

	}

	function deleteCategory(){

	}

}

?>


</body>
</html>




<!-- 

=(?)===============

- Derived variables (geoloc; dtm)
- Retrive data from DB? Array?
- How to display data? (retrieve -> assign -> generate html)
- Auto-increment IDs
- How to decide the scope of each function?

-->











