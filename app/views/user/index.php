<h1>User List</h1>

<a href="/user/create">Create New</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
    </tr>
    <?php if (isset($data)): ?>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row->id ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>