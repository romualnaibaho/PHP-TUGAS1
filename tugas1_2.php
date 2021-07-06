<?php

    $harga_cireng = 1000;
    $harga_es_duren = 15000;
    $harga_es_milo = 20000;
    $harga_es_teh = 5000;
    $harga_piscok = 1000;

    echo ("
        <h3>Daftar Menu</h3>
        
        <table border='1'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Cireng</td>
                    <td>Rp ".$harga_cireng."</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Es Duren</td>
                    <td>Rp ".$harga_es_duren."</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Es Milo</td>
                    <td>Rp ".$harga_es_milo."</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Es Teh</td>
                    <td>Rp ".$harga_es_teh."</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Picok</td>
                    <td>Rp ".$harga_piscok."</td>
                </tr>
            </tbody>
        </table>
        ");

?>