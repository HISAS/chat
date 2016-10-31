<h1>Rooms</h1>
<table>
    <tr>
        <th>名前</th>
        <th>更新日</th>
    </tr>

    <?php foreach ($friends as $friend): ?>
    <tr>
        <td><a href="/rooms/chat/<?php echo $friend['room_id']; ?>"><?php echo $friend['username']; ?></a></td>
        <td><?php echo $friend['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
