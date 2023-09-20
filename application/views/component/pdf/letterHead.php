<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        /* Gaya CSS untuk kop surat */
        .header {
            display: flex;
            align-items: center;
        }

        .logo {
            flex: 1;
        }

        .logo img {
            width: 100px;
            /* Sesuaikan dengan ukuran gambar Anda */
        }

        .company-info {
            flex: 2;
        }

        .company-name {
            font-size: 24px;
            font-weight: bold;
        }

        .address {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td class="logo" style="width: 170px;">
                <img src="<?= $pathImage; ?>" style="width: 55%" alt="Logo Perusahaan">
            </td>
            <td class="company-info" style="text-align: center;">
                <div class="company-name"><?= $company ?></div>
                <div class="address"><?= $address ?></div>
                <div class="address">Telepon: <?= $phone ?></div>
                <div class="address">Email: <?= $mail ?></div>
            </td>
        </tr>
    </table>
    <hr>

    <!-- Isi konten surat -->
    <p style="text-align: center;"><?= $title ?></p>
</body>

</html>