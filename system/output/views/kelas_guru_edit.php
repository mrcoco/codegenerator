<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/kelas_guru/edit/' . $kelas_guru['kelas_guru_id']; ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kelas_guru_id" value="<?php echo set_value('kelas_guru_id', $kelas_guru['kelas_guru_id']); ?>" /><br/>
            <input type="text" name="kelas_id" value="<?php echo set_value('kelas_id', $kelas_guru['kelas_id']); ?>" /><br/>
            <input type="text" name="guru_id" value="<?php echo set_value('guru_id', $kelas_guru['guru_id']); ?>" /><br/>
            <input type="submit" value="Edit" />
        </form>
    </body>
</html>
