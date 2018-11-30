<h1>List</h1>
<table>
    <tr>
        <th>タイトル</th>
        <th>作成日時</th>
    </tr>
    <?php foreach ($todos as $one): ?>
    <tr>
        <td>
            <?= $this->Html->link($one->title, ['action' => 'view', $one->id]) ?>
        </td>
        <td>
            <?= $one->created->i18nFormat(); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>