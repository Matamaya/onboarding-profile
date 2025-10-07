<?php require __DIR__ . '/includes/header.php'; ?>

<main id="paneles" class="container">
    <section id="panel-perfil" class="tab-panel active" role="tabpanel">
        <?php include __DIR__ . '/sections/part1-profile.php'; ?>
    </section>
    <section id="panel-musica" class="tab-panel active" role="tabpanel">
        <?php include __DIR__ . '/sections/part2-music.php'; ?>
    </section>
    <section id="panel-movies" class="tab-panel active" role="tabpanel">
        <?php include __DIR__ . '/sections/part3-movies.php'; ?>
    </section>
    <section id="panel-menu" class="tab-panel active" role="tabpanel">
        <?php include __DIR__ . '/sections/part4-menu.php'; ?>
    </section>
    <section id="panel-event" class="tab-panel active" role="tabpanel">
        <?php include __DIR__ . '/sections/part5-event.php'; ?>
    </section>
    <section id="panel-travel" class="tab-panel active" role="tabpanel">
        <?php include __DIR__ . '/sections/part6-travel.php'; ?>
    </section>
</main>

<?php require 'includes/footer.php'; ?>