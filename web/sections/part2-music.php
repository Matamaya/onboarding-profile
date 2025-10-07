<?php
    $canciones=[
            'titulo' => 'Imagine',
            'artista' => 'John Lennon',
            'album' => 'Imagine',
    ];
?>
    <section class="music-card">
        <h1>Mi Canción Favorita</h1>
        <div class="music-icon">🎵</div>
        <h2 class="song-title"><?php echo $canciones['titulo']; ?></h2>
        <p class="artist-name"><?php echo $canciones['artista']; ?></p>
    </section>