<table class="table table-sm">
    <tbody>
    <tr>
        <th>Risiko:</th>
        <td>
            <?php for ($i = 1; $i <= $product->risk_level->id; $i++): ?>
                <span class="badge rounded-0 bg-primary">
                            <?= $product->risk_level->id == $i ? $product->risk_level : '-' ?>
                        </span>
            <?php endfor; ?>
        </td>
    </tr>
    <tr>
        <th>Profit:</th>
        <td>
            <?php for ($i = 1; $i <= $product->profit_level->id; $i++): ?>
                <span class="badge rounded-0 bg-primary">
                            <?= $product->profit_level->id == $i ? $product->profit_level : '-' ?>
                        </span>
            <?php endfor; ?>
        </td>
    </tr>
    </tbody>
</table>
