<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/kelas_siswa/add' ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kelas_siswa_id" value="<?php echo set_value('kelas_siswa_id'); ?>" /><br/>
            <input type="text" name="kelas_id" value="<?php echo set_value('kelas_id'); ?>" /><br/>
            <input type="text" name="siswa_id" value="<?php echo set_value('siswa_id'); ?>" /><br/>
            <input type="submit" value="Add" />
        </form>
    </body>
</html>