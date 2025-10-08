<?php
    $canciones=[
            'titulo' => 'Heaven Can Wait',
            'artista' => 'Michael Jackson',
            'album' => 'Invincible',
    ];
?>
    <div class="container">
         <h1>Mi Canción Favorita</h1>
        <section class="music-card">
            <img class="music-icon" src="../web/assets/img/vinilo.jpg" alt="Disco de vinilo"></img>
            <div>
                <h2 class="song-title"><?php echo $canciones['titulo']; ?></h2>
                <p class="artist-name">Artista: <?php echo $canciones['artista']; ?></p>
                <p class="artist-name">Album: <?php echo $canciones['album']; ?></p>
            </div>
         </section>
    </div>