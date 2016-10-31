<h1>Users</h1>
<p><?php echo $this->Html->link("Add User", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>


    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['role']; ?></td>
        <td><?php echo $user['User']['created']; ?></td>
        <td><?php echo $user['User']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
