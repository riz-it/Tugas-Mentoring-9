<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
</head>
<style>
    .company-info {
        flex: 2;
        padding: 20px;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .province {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .city {
        font-size: 18px;
        font-weight: bold;
    }
</style>

<body>
    <table style="border-collapse: collapse; border: 2px solid black; padding: 5px;" width="100%">
        <tr style="background-color: #87CEEA;">
            <td class="company-info" style="border: 2px solid black; padding: 20px;text-align: center">
                <div class="province"><?= $province ?></div>
                <div class="city"><?= $city ?></div>
            </td>
        </tr>
    </table>
    <table style="border-collapse: collapse;margin-top: -10px ;border: 2px solid black;border-top: none; padding: 5px;" width="100%">
        <tr style="background-color: #87CEEA;">
            <td style="border: 2px solid black;border-top: none;border-bottom: none;border-right: none; padding: 5px;width: 140px;">Nama</td>
            <td style="border: 2px solid black;border-top: none;border-left: none;border-bottom:none; padding: 5px;width: 400px;">: <?= $name; ?></td>
            <td rowspan="3" style="text-align: center;">
                <img src="<?= $pathImage ?>" style="width: 95%;" alt="">
            </td>
        </tr>
        <tr style="background-color: #87CEEA;">
            <td style="border: 2px solid black;border-top: none;border-right: none; padding: 5px;border-bottom:">Tempat/Tgl Lahir</td>
            <td style="border: 2px solid black;border-top: none;border-left: none; padding: 5px;border-bottom:">: <?= $place_of_birth; ?>, <?= date('d F Y', strtotime($date_birth)); ?></td>
        </tr>
        <tr style="background-color: #87CEEA;">
            <td style="border: 2px solid black;border-top: none;border-right: none; padding: 5px;">Alamat</td>
            <td style="border: 2px solid black;border-top: none;border-left: none; padding: 5px;">: <?= $address; ?></td>
        </tr>
    </table>
</body>

</html>