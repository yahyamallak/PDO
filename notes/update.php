<?php require_once './includes/header.php'; 

$data['id'] = $_GET['id'];
$note = $database->getNote($data);

if(isset($_POST['submit'])){

    $data['name'] = $_POST['name'];
    $data['description'] = $_POST['description'];

    $database->update($data);
}



?>



<form action="" method="POST">
    <input type="text" name="name" placeholder="Name" value="<?php echo $note->name;?>">
    <textarea cols="30" rows="10" name="description" placeholder="Description"><?php echo $note->description;?></textarea>
    <button type="submit" name="submit">Update</button>
</form>






<?php require_once './includes/footer.php'; ?>