
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td><?= $user->name ?></td>
                <td><?= $user->email ?></td>
                <td><?= $user->password ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>