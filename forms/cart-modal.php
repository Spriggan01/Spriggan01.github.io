<div class = "modal-body">
    <?php if (!empty($_SESSION['cart'])): ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Зображення</th>
                    <th scope="col">Назва</th>
                    <th scope="col">Ціна</th>
                    <th scope="col">Кількість</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                <tr style="height:100px; line-height:100px;">
                    <td><img src="<?= $item['image'] ?>" style="width: 60px; height: 100px;" class="pt-4"></td>
                    <td><p class="pt-2" style="font-family: Poppins; font-size: 20px;"><?= $item['name'] ?></p></td>
                    <td><p class="pt-2" style="font-family: Poppins; font-size: 20px;"><?= $item['price'] ?><b> ₴</b></p></td>
                    <td style="font-family: Poppins; font-size: 20px;"><?= $item['qty'] ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
            <tr>
                <td colspan = "2" align="left" style="font-family: Poppins; font-size: 20px;" class="pt-5"><b>Кількість товарів: </b><span id="modal-cart-qty"><?= $_SESSION['cart.qty'] ?></span></td>
                <td colspan = "2" align="left" style="font-family: Poppins; font-size: 20px;" class="pt-5"><b>Сума: </b><?= $_SESSION['cart.sum'] ?> <b> ₴</b></td>
            </tr>
        </table>
    <?php else: ?>               
        <p>Кошик порожній</p>
    <?php endif; ?>
</div>
<div class = "modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
    <?php if (!empty($_SESSION['cart'])): ?>
        <button type="button" class="btn btn-success" onclick="document.location='order.php'">Зробити замовлення</button>
        <button type="button" class="btn btn-danger" id="clear-cart">Очистити кошик</button>
    <?php endif; ?>
</div>