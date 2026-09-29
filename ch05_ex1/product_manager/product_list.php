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
        <h1>Product List</h1>
        <div id="sidebar">
            <h2>Categories</h2>
            <ul class="nav">
            <?php foreach ($categories as $category) : ?>
                <li>
                <a href=".?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <div id="content">
            <h2><?php echo $category_name; ?></h2>
            <table>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th class="right">Price</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product['productCode']; ?></td>
                    <td><?php echo $product['productName']; ?></td>
                    <td class="right"><?php echo $product['listPrice']; ?></td>
                    <td><form action="." method="post">
                        <!-- Thêm action để Controller biết đây là lệnh Delete -->
                        <input type="hidden" name="action" value="delete_product" />
                        <input type="hidden" name="product_id"
                               value="<?php echo $product['productID']; ?>" />
                        <input type="hidden" name="category_id"
                               value="<?php echo $product['categoryID']; ?>" />
                        <input type="submit" value="Delete" />
                    </form></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <!-- Sửa link Add Product gọi về Controller -->
            <p><a href=".?action=show_add_form">Add Product</a></p>
        </div>
    </div>
    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </div>
    </div>
</body>
</html>