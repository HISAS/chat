<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Messege</th>
        <th>Action</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>


    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['message'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?')); ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
        <td><?php echo $post['Post']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
