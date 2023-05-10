<h1>New Category</h1>
<?php
if (isset($_SESSION["email"]) && $_SESSION["role"] == "customer") {
  echo '<script type = "text/javascript">
  window.location.href = "http://localhost/web212/"</script>';
}
?>

<?php 
    require_once "../web212/mvc/views/admin/categories/form_category.php";
?>

<a href="http://localhost/web212/Category/index">Back</a>
