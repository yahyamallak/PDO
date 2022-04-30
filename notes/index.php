<?php require_once './includes/header.php'; ?>

<div class="container">
<a href='add.php' ><button>Add a note</button></a>
<p><?php require_once './includes/alert.php'; ?></p>
    <table>
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $database->getNotes();  ?>
        </tbody>
    </table>
</div>

<?php require_once './includes/footer.php'; ?>