<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url() . '/kontak_importer/add' ?>" method="POST">
            Nama:<br/>
            <input type="text" name="kontak_id" value="<?php echo set_value('kontak_id'); ?>" /><br/>
            <input type="text" name="instansi" value="<?php echo set_value('instansi'); ?>" /><br/>
            <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" /><br/>
            <input type="text" name="jabatan" value="<?php echo set_value('jabatan'); ?>" /><br/>
            <input type="text" name="alamat" value="<?php echo set_value('alamat'); ?>" /><br/>
            <input type="text" name="telp" value="<?php echo set_value('telp'); ?>" /><br/>
            <input type="text" name="faks" value="<?php echo set_value('faks'); ?>" /><br/>
            <input type="text" name="handphone" value="<?php echo set_value('handphone'); ?>" /><br/>
            <input type="text" name="email" value="<?php echo set_value('email'); ?>" /><br/>
            <input type="text" name="kategori_id" value="<?php echo set_value('kategori_id'); ?>" /><br/>
            <input type="submit" value="Add" />
        </form>
    </body>
</html>