<div class = "modal-body">
    <?php if (!empty($_SESSION['details'])): ?>
        <?php foreach ($_SESSION['details'] as $id => $item): ?>
            <div class="container-fluid">
                <div class="row p-5 m-5" align="center">
                    <div class="col-md-4 col-lg-4 col-sm-8 pt-5">
                        <img src="<?= $item['image'] ?>" style="width: 210px; height: 290px;" class="pt-4">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12">
                        <div>
                            <p class="pt-2" style="font-family: Poppins-b; font-size: 20px;"><?= $item['name'] ?></p>
                            <div class="text-left p-4 m-1" style="width: 350px; height: 361px; background-color: #F5F5F7; border-radius: 10px; border: 1px solid black; font-family: Inter">
                                <img src="../style/images/phones/details/diagonal-icon.svg"> <?= $item['diagonal'] ?>''<div class="pl-5" style="display: inline-block"><img src="../style/images/phones/details/face-id.svg" style=""> Face ID</div>
                                <br><br><img src="../style/images/phones/details/camera-icon.svg"> <?= $item['camera'] ?>
                                <?php if($item['manufacturer_id'] == 1): ?>
                                    <p class="mb-3 mt-3" style="font-size: 15px; font-family: Inter;"><img src="../style/images/phones/details/batery.svg"> до 26 годин відтворення відео</p>
                                <?php else: ?>
                                    <p class="mb-3 mt-3" style="font-size: 15px; font-family: Inter;"><img src="../style/images/phones/details/2sim.png" style="width: 25px; height: 25px;"> підтримка 2х сім-карт</p>
                                <?php endif; ?>
                                <p class="mt-3" style="font-size: 15px; font-family: Inter;">Об'єм пам'яті: <?= 
                                    $item['memory'];
                                    if ($item['memory'] == 1) {
                                        echo ' Тб';
                                    } else {
                                        echo ' Гб';
                                    } ?> </p>
                                <p class="mb-3 mt-3" style="font-size: 15px; font-family: Inter;">Оберіть колір:</p>
                                <button type="button" class="btn-color ml-1 mr-3" style="width:20px; height:20px; background-color: #AABBCD; border-radius: 10px; border: none; box-shadow: inset 1px 2px 2px gray;"></button>
                                <button type="button" class="btn-color mr-3" style="width:20px; height:20px; background-color: #E5DDEA; border-radius: 10px; border: none; box-shadow: inset 1px 2px 2px gray;"></button>
                                <button type="button" class="btn-color mr-3" style="width:20px; height:20px; background-color: #30373F; border-radius: 10px; border: none; box-shadow: inset 1px 2px 2px black;"></button>
                                <button type="button" class="btn-color mr-3" style="width:20px; height:20px; background-color: #FAF7F2; border-radius: 10px; border: none; box-shadow: inset 1px 2px 2px gray;"></button>
                                <button type="button" class="btn-color" style="width:20px; height:20px; background-color: #FC1B39; border-radius: 10px; border: none; box-shadow: inset 1px 2px 2px gray;"></button>
                                <p class="mt-3" style="font-size: 15px; font-family: Inter;">Ціна: <?= $item['price'] ?> <b> ₴</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>               
        <p>Error</p>
    <?php endif; ?>
</div>
<div class = "modal-footer">
    
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити<?php unset($_SESSION['details']); ?></button>
    <button type="button" class="btn btn-success">Зробити замовлення</button>
</div>