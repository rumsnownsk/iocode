<table class="table">
    <thead>
    <tr>
        <th scope="col">Last visit</th>
        <th scope="col">IP client</th>
        <th scope="col">Today visits</th>
        <th scope="col">User_agent</th>
        <th scope="col">First visit</th>
        <th scope="col">From where?</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($visitors as $item) : ?>
    <tr>
        <td><?= $item['last_visit'] ?></td>
        <td><?= $item['ip_client'] ?></td>
        <td><?= $item['today_visits'] ?></td>
        <td style="font-size: 12px;"><?= $item['user_agent'] ?></td>
        <td><?= $item['first_visit'] ?></td>
        <td><?= $item['referrer'] ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
