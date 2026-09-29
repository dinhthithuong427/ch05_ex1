<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="../main.css" />
</head>
<body>
    <div id="page">
        <div id="header">
            <h1>Product Manager</h1>
        </div>
        <div id="main">
            <h1>Add Product</h1>
            <!-- Form gửi về Controller hiện tại (.) -->
            <form action="." method="post" id="add_product_form">
                <!-- Thêm action để Controller biết đây là lệnh Add -->
                <input type="hidden" name="action" value="add_product" />

                <label>Category:</label>
                <select name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
                <br />

                <label>Code:</label>
                <input type="input" name="code" required />
                <br />

                <label>Name:</label>
                <input type="input" name="name" required />
                <br />

                <label>List Price:</label>
                <input type="input" name="price" required />
                <br />

                <label>&nbsp;</label>
                <input type="submit" value="Add Product" />
                <br />
            </form>
            <p><a href=".?action=list_products">View Product List</a></p>
        </div>
        <div id="footer">
            <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
        </div>
    </div>
</body>
</html>