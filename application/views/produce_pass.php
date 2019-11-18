<form action="<?= base_url() ?>webadmin/produce_pass" method="post">
    <label>Password</label>
    <input name="password" type="text" />


    <button type="submit">Generate!</button>

    <?= $password; ?>


</form>