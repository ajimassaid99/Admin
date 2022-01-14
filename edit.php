

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Koperasi Properti</title>
    </head>

    <body>

    
        <h1 class="text-center mt-3">Edit detail product</h1>
<center>
        <fieldset>

            <table border="0 " style="background-color: rgb(43, 172, 231)">

                <tr>

                    <td>judul</td>
                        <td> <label></label>
                            <select name="judul ">
                            <?php foreach ($data['data'] as $row){?>
        
                            <option value="<?php echo $row['judul'];?>"><?php echo $row['judul'];?></option>
                            <?php } ?>
                        </select></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td><input type="text " name="harga
                     " size="20 " required /></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><input type="text " name="alamat" size="20 " required /></td>
                </tr>
                <tr>
                    <td>kamar_mandi</td>
                    <td><input type="text " name="K.mandi" size="20 " required /></td>
                </tr>
                <tr>
                    <td>kamar_tidur</td>
                    <td><input type="text " name="k.tidur " size="20 " required /></td>
                </tr>
                <tr>
                    <td>ruang_tamu</td>
                    <td><input type="text " name="r.tamu" size="20 " required /></td>
                </tr>
                <tr>
                    <td>luas_bangunan</td>
                    <td><input type="text " name="lb" size="20 " required /></td>
                </tr>
                <tr>
                    <td>luas_tanah</td>
                    <td><input type="text " name="lt" size="20 " required /></td>
                </tr>
                <tr>
                    <td>lantai</td>
                    <td><input type="text " name="lantai" size="20 " required /></td>
                </tr>
                <tr>
                    <td>tempat_parkir</td>
                    <td><input type="text " name="t.parkir" size="20 " required /></td>
                </tr>

            </table>
        </fieldset>
<br>
<br>
        
        <input type="submit" name="submit" value="save " /></td>
        </center>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    </body>

    </html>