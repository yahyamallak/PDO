<?php require_once './includes/header.php'; 

if(isset($_POST['submit'])){

    $data['name'] = $_POST['name'];
    $data['description'] = $_POST['description'];

    $database->add($data);
}



?>



<form action="" method="POST">
    <input type="text" name="name" placeholder="Name">
    <textarea cols="30" rows="10" name="description" placeholder="Description"></textarea>
    <button type="submit" name="submit">Add</button>
</form>






<?php require_once './includes/footer.php'; ?>