<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-boardered table-striped tabel-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th class="text-right">Harga</th>
            <th class="text-right">Sub-total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total</td>
            <td align="right"> Rp. <?= number_format($this->cart->total(), 0, ',', '. ') ?></td>
        </tr>
    </table>
</div>