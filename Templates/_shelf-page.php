<?php
    $product_shuffle= $menu->getData();
?>

<hr>
        <!-- Products -->
        <section id="products">
            
               <h2 class="font-Trajan font-size-40 color-gold my-5 pt-5 text-center">OUR SHELF</h2>
               <div class="text-center container justify-content-center mx-auto w-100"> 
                   <div id="filters" class="button-group text-end font-baloo font-size-16 text-center">
                    <button class="btn color-gold-bg color-white is-checked" data-filter="*">All Items</button>
                    <button class="btn color-gold" data-filter=".Cakes">Cakes</button>
                    <button class="btn color-gold" data-filter=".Breads">Breads</button>
                    <button class="btn color-gold" data-filter=".Puddings">Puddings</button>
                    <button class="btn color-gold" data-filter=".Morning_Bakery">Morning Bakery</button>
                    <button class="btn color-gold" data-filter=".Savouries">Savouries</button>
                    <button class="btn color-gold" data-filter=".Signature_Collection">Signature Collections</button>
                    <button class="btn color-gold" data-filter=".Pastries">Pastries</button>
                    <button class="btn color-gold" data-filter=".Macaroons">Macaroons</button>
                    <button class="btn color-gold" data-filter=".Assortments">Assortments</button>
                </div>
                <div class="grid">
                    <?php foreach($product_shuffle as $item) {?>
                    
                        <div class="grid-item <?php echo $item['Item_Category']; ?>">
                        

                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-Trajan">
                                <a href="https://fondartbakehousecentralkitchenoow.petpooja.com/orders/menu">
                                    <img src="<?php echo $item['Item_image'] ?? "./assets/images/Products/Z_logo.jpg"; ?>" alt="product1" class="img-responsive">
                                </a>
                                <div class="text-center">
                                    <h6 id="Item_name">
                                        <span><?php echo $item['Item_name1'] ?? "Unknown"; ?></span><br>
                                        <span><?php echo $item['Item_name2'] ?? "Unknown"; ?></span>
                                    </h6>
                                    <div class="rating font-size-12">
                                        <span><i id="Item_Veg" class="fas fa-dot-circle"><?php echo $item['Item_Veg'] ?? "NA"; ?></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span id="Item_price">INR <?php echo $item['Item_price'] ?? "100000"; ?> .00</span>
                                    </div>
                                    <a href="https://fondartbakehousecentralkitchenoow.petpooja.com/orders/menu" type="button" class="btn btn-warning font-size-12">Order Now</a>
                                </div>
                                </div>
                        </div>
                    </div>
                    <?php } //closing foreach function ?> 
                </div>
                    
                
                
            </div>
            <small class="font-Edwardian ms-5 mt-3">*Product images displayed are only for illustration purpose</small>
        </section>
        <!-- !Products -->