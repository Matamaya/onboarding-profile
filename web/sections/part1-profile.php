<?php
$titulo = 'Mi perfil';

$profile = [
    'name' => 'Mateo',
    'lastname' => 'Amaya',
    'age' => 21,
    'bio' => 'Soy desarrollador web con experiencia en PHP, JavaScript y BD. Me gusta aprender cosas nuevas.',
    'hobbies' => ['Leer', 'Viajar', 'Programar', 'Escribir'],
    'email' => 'mat980@example.com'
];

?>
    <div class="container">
        <h1><?php echo $titulo; ?></h1>
        <section class="profile-card">
            <img src="../web/assets/img/image.png" alt="Foto de perfil" class="avatar">
            <h2><?php echo $profile['name'] . ' ' . $profile['lastname']; ?></h2>
            <p><strong>Edad:</strong> <?php echo $profile['age']; ?> años</p>
            <p><strong>Biografía:</strong> <?php echo $profile['bio']; ?></p>
            
            <h3>Hobbies</h3>
            <ul>
                <?php foreach ($profile['hobbies'] as $hobbie): ?>
                    <li><?php echo $hobbie; ?></li>
                <?php endforeach; ?>
            </ul>
            <p>
            <strong>Contacto:</strong> 
            <a href="mailto:<?php echo $profile['email']; ?>"> <?php echo $profile['email']; ?> </a>
            </p>
        </section>
    </div>
