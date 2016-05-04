<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type ="text/css"  href="assets/styles.css">


</head>
<header><h1>myBlog</h1>
    <h2>because the internet needs to know what I think</h2>
</header>
<main>
    <fieldset>
        <nav>
            <ul>
                <li><a href="blog.html">All Blog Items</a></li><br>
                <li><a href="blog.html">Work Blog Items</a></li><br>
                <li><a href="blog.html">University Blog Items</a></li><br>
                <li><a href="blog.html">Family Blog Items</a></li><br>
                <li><a href="add.html">Insert Blog Item</a></li><br>
            </ul>
        </nav>
    </fieldset>
    </nav>

</main>
<fieldset>
    <footer>
        <div id="footer">
            Designed by Ludwig van de l'Isle, 2016
        </div>
    </footer>
</fieldset>
include ("connect.php");
if(isset($_GET['title'])) {
$Title + $_GET['Title'];
echo "title: ($title) <hr>";
$sql = "SELECT = FROM bugs WHERE title= '$entrytitle'";
}
else {
echo "title: entry title <hr>";
$sql = "SELECT*FROM blogview ;
}
$result = $db->query($sql);
while($row =$result->fetch_array()) {
$title = $row['entrytitle'];
$category = $row['category'];
$entrysummary = $row['entrysummary'];

echo "<li>{$title} {$category} {$entrysummary}</li>";
}

</body>
</html>