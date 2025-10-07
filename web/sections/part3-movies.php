<?php
$totalMovies = 3; 
$movies = [
    [
        "title" => "El Señor de los Anillos", 
        "duration" => 3
    ],
    [
        "title" => "Inception", 
        "duration" => 2
    ],
    [
        "title" => "The Dark Knight", 
        "duration" => 2
    ]
];

$totalHours = 0;
foreach($movies as $movie) {
    $totalHours += $movie["duration"];
}
?>

    <div class="container">
        <h1>🎥 Maratón de Películas 🍿</h1>
        <p>
            He reservado <strong><?php echo $totalHours; ?> horas</strong> 
            para ver <strong><?php echo $totalMovies; ?> películas</strong>.
        </p>
        <section class="card">
            <h2>Lista de Películas</h2>
            <table>
                <thead>
                    <tr>
                        <th>🎬 Película</th>
                        <th>⏱ Duración (horas)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($movies as $movie): ?>
                        <tr>
                            <td><?php echo $movie["title"]; ?></td>
                            <td><?php echo $movie["duration"]." Horas"; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
