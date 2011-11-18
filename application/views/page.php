<body>

    <div data-role="page">

        <div data-role="header">
            <h1>Coba peta</h1>
        </div>

        <div data-role="content">
            <form action="<?php echo site_url("map/loadPeta"); ?>" method="post">
                <table align="center"><tr><td>

                    <tr>
                        <td>
                            <label name="alamat">Masukan Lokasi
                                <input type="text" name="alamat">
                            </label></tr>
                    <tr>
                        <td>
                            <label name="title">Nama Lokasi
                                <input type="text" name="title">
                            </label></tr>
                    <tr>
                        <td>
                            <label name="deskripsi">Deskripsi lokasi
                                <textarea name="deskripsi"></textarea>
                            </label></tr>
                    <tr>
                        <td>
                            <div data-role="controlgroup"  data-type="horizontal">
                                <input type="reset" value="batal" data-inline="true">
                                <input type="submit" value="cari" data-icon="arrow-r" data-iconpos="right" data-inline="true">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>