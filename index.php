<?php
	error_reporting(E_ALL);
    ini_set('display_errors', 'on');

	$host = 'localhost';
	$user = 'root';
	$password = 'nfnmzyf40404';
	$dbName = 'my';

	$link = mysqli_connect($host,$user,$password,$dbName);
	mysqli_query($link,"SET NAMES 'utf-8'");

	$query = "SELECT * FROM product LEFT JOIN category ON category.id = product.category_id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT *, category.name as category FROM  category  INNER JOIN product ON category.id = product.category_id WHERE category.name = 'Овощи'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT *, category.name as category FROM  category INNER JOIN  product ON category.id = product.category_id WHERE category.name IN ('Овощи','Мясо','Морепродукты')";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DISTINCT  category.name FROM  product INNER JOIN category  ON category.id = product.category_id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT product1.name_product as name, product1.price as price, product1.quantity as quantity, sub_category1.name as subname, category1.name as categoryname  FROM  product1 
			    LEFT JOIN  sub_category1  ON sub_category1.id = product1.sub_category_id 
			    LEFT JOIN  category1 ON sub_category1.category_id = category1.id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM product1 
			    INNER JOIN sub_category1 ON sub_category1.id = product1.sub_category_id
			    INNER JOIN category1 ON  sub_category1.category_id = category1.id WHERE category1.name = 'Овощи'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM product1 
			    INNER JOIN sub_category1 ON sub_category1.id = product1.sub_category_id  WHERE sub_category1.name = 'Помидоры'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT sub_category1.name FROM sub_category1 
			    INNER JOIN category1 ON sub_category1.category_id = category1.id  WHERE category1.name = 'Овощи'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT product2.name as product, category2.name as cat, stock2.name as stock, brand2.name as brand  FROM product2
			    LEFT JOIN category2 ON product2.category_id = category2.id
			    LEFT JOIN stock2 ON category2.stock_id = stock2.id
			    LEFT JOIN brand2 ON stock2.brand_id = brand2.id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  stock2.name as stock  FROM stock2";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    /*$query = "SELECT product2.name as product, category2.name as cat FROM product2
			    LEFT JOIN category1 ON product2.category_id = category2.id
			    UNION SELECT * FROM stock2 
			    UNION SELECT * FROM brand2";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    */
    $query = "SELECT * FROM user LEFT JOIN city ON city.id = user.id_city";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM  city";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM user LEFT JOIN city ON city.id = user.id_city WHERE city.city = 'Минск'";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DISTINCT city.city	 FROM user LEFT JOIN city ON city.id = user.id_city  WHERE user.id_city IS NOT NULL";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DISTINCT city.city	 FROM user RIGHT JOIN city ON city.id = user.id_city  WHERE user.id_city IS NULL";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  city.city, COUNT(user.id_city) as count FROM city RIGHT JOIN  user ON city.id = user.id_city  GROUP BY city.city";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  city.city, COUNT(user.id_city) as count FROM city RIGHT JOIN  user ON city.id = user.id_city  GROUP BY city.city HAVING COUNT(user.id_city)>3";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM  user2  
			    LEFT JOIN city2 ON city2.id = user2.city_id
			    LEFT JOIN country2 ON country2.id = city2.country_id   ";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM city2 LEFT JOIN country2 ON country2.id = city2.country_id   ";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT user2.name as name FROM  user2  
			    LEFT JOIN city2 ON city2.id = user2.city_id
			    LEFT JOIN country2 ON country2.id = city2.country_id  WHERE country2.country = 'Беларусь' ";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT user2.name as name FROM  user2  
			    LEFT JOIN city2 ON city2.id = user2.city_id WHERE city2.city = 'Минск' ";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT country2.country as country, COUNT(country2.id) as con FROM  user2  
			    INNER JOIN city2 ON city2.id = user2.city_id
			    INNER JOIN country2 ON country2.id = city2.country_id GROUP BY country2.country ";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT users_son.name as name_father, sons2.name as name_son FROM   users_son
			    LEFT JOIN users_son as sons2 ON sons2.id = users_son.son_id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT users_son.name  as name_grandgrandfather, grandfather.name  as name_grandfather, father.name as name_father, sons.name as name_son  FROM  users_son 
			    LEFT JOIN users_son as grandfather ON grandfather.id = users_son.son_id
			    LEFT JOIN users_son as father ON father.id = grandfather.son_id
			    LEFT JOIN users_son as sons ON sons.id = father.son_id";
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  family.name as name,   new_fam.name as name2 FROM  family 
			    LEFT JOIN family as new_fam ON family.id = new_fam.fam_id WHERE family.surname = new_fam.surname"  ;
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT  family.fam_id, family.name as name,  family.surname FROM  family 
			    LEFT JOIN family as new_fam ON family.id = new_fam.fam_id WHERE new_fam.fam_id IS NULL"  ;
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT DISTINCT family.name as name,  new_fam.name as name2 FROM  family 
			    LEFT JOIN family as new_fam ON family.id = new_fam.fam_id WHERE family.surname = new_fam.surname"  ;
	$result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM  product3
                LEFT JOIN order3 ON product3.user_id = order3.user_id
                LEFT JOIN category3 ON order3.category_id = category3.id"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM  product3
                LEFT JOIN order3 ON product3.user_id = order3.user_id
                LEFT JOIN category3 ON order3.category_id = category3.id WHERE product3.name = 'Огурец'"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT * FROM  product3
                LEFT JOIN order3 ON product3.user_id = order3.user_id
                LEFT JOIN category3 ON order3.category_id = category3.id WHERE category3.name_category = 'Овощи'"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT product3.name , COUNT(order3.user_id) as count FROM  product3
                LEFT JOIN order3 ON product3.user_id = order3.user_id
                LEFT JOIN category3 ON order3.category_id = category3.id GROUP BY product3.id HAVING count > 1"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT interests.interest FROM  interests"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT user4.name, interests.interest FROM user4
                LEFT JOIN order4 ON user4.order_id = order4.user_id
                LEFT JOIN interests ON order4.category_id = interests.id WHERE user4.id = '2'"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT user4.name FROM user4
                LEFT JOIN order4 ON user4.order_id = order4.user_id
                LEFT JOIN interests ON order4.category_id = interests.id WHERE interests.interest = 'Компьютерные игры'"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT user5.name, product5.name_product FROM product5
                LEFT JOIN purchase ON product5.product_id = purchase.product_id
                LEFT JOIN user5 ON purchase.user_id = user5.id ORDER BY user5.name"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";
    $query = "SELECT user5.name, sum(product5.price) as count FROM product5
                LEFT JOIN purchase ON product5.product_id = purchase.product_id
                LEFT JOIN user5 ON purchase.user_id = user5.id GROUP BY user5.name"  ;
    $result = mysqli_query($link,$query) or die (mysql_error($link));
        for( $date = []; $row = mysqli_fetch_assoc($result); $date[] = $row);
        foreach ($date as $key => $value) {
            var_dump($value);
            echo '<br>';
        }
    echo "<br>";