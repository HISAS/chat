<title>Mypage</title>
<div>
    <p><a href="/users/logout">ログアウト</a></p>
    <p><a href="/users/search">友達を探す</a></p>
    <p><a href="/rooms/index">友達と話す</a></p>
</div>
<br>
<div>
    <h3>ユーザー情報</h3>
    <li>Id:　<?php echo $user['id']; ?></li>
    <li>Name:　<?php echo $user['username']; ?></li>
    <li>Role:　<?php echo $user['role']; ?></li>
    <li>Created:　<?php echo $user['created']; ?></li>
    <li>Modified:　<?php echo $user['modified']; ?></li>
</div>
