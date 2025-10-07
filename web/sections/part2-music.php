<?php
    $canciones=[
            'titulo' => 'Imagine',
            'artista' => 'John Lennon',
            'album' => 'Imagine',
    ];
?>
    <div class="container">
         <h1>Mi Canción Favorita</h1>
        <section class="music-card">
            <div class="music-icon">🎵</div>
            <h2 class="song-title"><?php echo $canciones['titulo']; ?></h2>
            <p class="artist-name"><?php echo $canciones['artista']; ?></p>
         </section>
    </div>