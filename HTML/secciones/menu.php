<section class="menu">
    <div class="contenedor">
        <h3 class="titulo" id="platillos">Menú</h3>
        <div class="contenedorMenu">
            <div class="contenedorMenu2">
                <?php $categorias = $mysqli->query("select distinct categoria as categoria from menu"); ?>

                <?php while($row = $categorias->fetch_assoc()): ?>
                    <article>
                        <p class="categoria"><?= $row['categoria'] ?></p>
                        <?php $platillos = $mysqli->query("select * from menu where categoria = '" . $row['categoria'] . "'"); ?>
                        <?php while($platillo = $platillos->fetch_assoc()): ?>
                            <div class="platillo">
                                <p class="nombre"><?= $platillo["platillo"] ?></p>
                                <p class="precio">$<?= $platillo["precio"] ?></p>
                                <p class="descripcion"><?= $platillo["descripcion"] ?></p>
                            </div>
                        <?php endwhile ?>
                    </article>
                <?php endwhile; ?>

                <!--<article>
                    <p class="categoria">De comer</p>
                    <div class="platillo">
                        <p class="nombre">Sed sagittis nisl dictum</p>
                        <p class="precio">$15</p>
                        <p class="descripcion">Praesent gravida, augue sit amet dignnisim rutrum, enim tellus suscipit risus.</p>
                    </div>

                    <div class="platillo">
                        <p class="nombre">Lorem ipsum sit amet</p>
                        <p class="precio">$10</p>
                        <p class="descripcion">Vestibulum ac sem id massa tempor vestibulum sed ut magna</p>
                    </div>

                    <div class="platillo">
                        <p class="nombre">Sed sagittis nisl dictum</p>
                        <p class="precio">$20</p>
                        <p class="descripcion">Praesent gravida, augue sit amet dignnisim rutrum, enim tellus suscipit risus.</p>
                    </div>

                    <div class="platillo">
                        <p class="nombre">Sed sagittis nisl dictum</p>
                        <p class="precio">$35</p>
                        <p class="descripcion">Praesent gravida, augue sit amet dignnisim rutrum, enim tellus suscipit risus.</p>
                    </div>
                </article>

                <article>
                    <p class="categoria">De tomar</p>
                    <div class="platillo">
                        <p class="nombre">Sed sagittis nisl dictum</p>
                        <p class="precio">$15</p>
                        <p class="descripcion">Praesent gravida, augue sit amet dignnisim rutrum, enim tellus suscipit risus.</p>
                    </div>

                    <div class="platillo">
                        <p class="nombre">Lorem ipsum sit amet</p>
                        <p class="precio">$10</p>
                        <p class="descripcion">Vestibulum ac sem id massa tempor vestibulum sed ut magna</p>
                    </div>

                    <div class="platillo">
                        <p class="nombre">Sed sagittis nisl dictum</p>
                        <p class="precio">$20</p>
                        <p class="descripcion">Praesent gravida, augue sit amet dignnisim rutrum, enim tellus suscipit risus.</p>
                    </div>

                    <div class="platillo">
                        <p class="nombre">Sed sagittis nisl dictum</p>
                        <p class="precio">$35</p>
                        <p class="descripcion">Praesent gravida, augue sit amet dignnisim rutrum, enim tellus suscipit risus.</p>
                    </div>
                </article>-->
            </div>
        </div>
    </div>
</section>