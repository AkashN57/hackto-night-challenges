<?php include 'header.php' ?>
<head>
<link rel="stylesheet" href="cart.css" type="text/css">
</head>
<h1>User name</h1>

<form name="ShoppingList">
<input type="checkbox" name=""> unchecked
    <fieldset>
        
        <legend>Shopping cart</legend>
        <label>Item: <input type="text" name="name"></label>
        <label>Quantity: <input type="text" name="data"></label>
        <br><br>
        <input type="button" value="Save"   onclick="SaveItem()">
        <input type="button" value="Update" onclick="ModifyItem()">
        <input type="button" value="Delete" onclick="RemoveItem()">
        
    </fieldset>
    <br><br><br>
    <input type="checkbox" name=""> unchecked
    <fieldset>
        
        <legend>Shopping cart</legend>
        <label>Item: <input type="text" name="name"></label>
        <label>Quantity: <input type="text" name="data"></label>
        <br><br>
        <input type="button" value="Save"   onclick="SaveItem()">
        <input type="button" value="Update" onclick="ModifyItem()">
        <input type="button" value="Delete" onclick="RemoveItem()">
    </fieldset>
    <br><br><br>
    <input type="checkbox" name=""> unchecked
    <fieldset>
        
        <legend>Shopping cart</legend>
        <label>Item: <input type="text" name="name"></label>
        <label>Quantity: <input type="text" name="data"></label>
        <br><br>
        <input type="button" value="Save"   onclick="SaveItem()">
        <input type="button" value="Update" onclick="ModifyItem()">
        <input type="button" value="Delete" onclick="RemoveItem()">
    </fieldset>
    <br><br><br>
    <hr>
    <input type="button" value="Delete">
    <label>Total Amount: 
        <br>
    <input type="text" name="amount"></label>
    
    <div id="items_table">
        <h2>Shopping List</h2>
        <table id="list"></table>
        <label><input type="button" value="Clear" onclick="ClearAll()">
        * Delete all items</label>
    </div>
</form>


<?php include 'footer.php' ?>