<?php
ob_start();
?>
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto, beatae eius enim eum inventore
        iure labore minima nemo non nulla officiis, placeat, quaerat quibusdam quo repudiandae saepe tempore unde.
    </div>
    <div>Aliquam commodi, consectetur debitis distinctio doloribus earum eos ex excepturi expedita labore laborum libero
        maiores molestiae nam neque numquam odio officiis possimus quae quasi quidem temporibus voluptas voluptatibus!
        Dignissimos, maxime.
    </div>
    <div>Aliquid amet asperiores autem consectetur consequuntur debitis eos expedita illo laboriosam, libero molestias
        porro quia quo quos sed suscipit unde voluptatem! Beatae, deleniti dignissimos eum laborum nulla perspiciatis
        qui quo.
    </div>
    <div>Adipisci autem dignissimos fugiat illum impedit modi natus repellendus sequi sunt tempore! Cumque error
        exercitationem explicabo nesciunt quae quis vitae voluptate? Eius harum laboriosam minus neque nisi sint
        temporibus tenetur?
    </div>
    <div>Atque commodi explicabo nihil quam quidem ratione voluptatibus. Dicta maiores modi placeat quas voluptatum.
        Aspernatur beatae corporis, distinctio ducimus eius inventore iste itaque nisi optio possimus quibusdam quo
        sunt, totam.
    </div>
<?php
$headerPath = "templates/components/menuCalendar.php";
$contenu = ob_get_clean();

require "templates/Layout.php";
