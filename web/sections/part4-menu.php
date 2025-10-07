<?php
$dish = [
    [
        "title" => "Paella Valenciana", 
        "price" => 12.0
    ],
    [
        "title" => "Tacos al Pastor", 
        "price" => 9.5
    ],
    [
        "title" => "Pizza Napolitana", 
        "price" => 15.0
    ]
];
?>
    <div class="container">
        <h1>🍴 Foodies de la Empresa</h1>
   

    <table>
            <thead>
                <tr>
                    <th>🥘 Platillo</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dish as $dish): ?>
                    <?php $formattedPrice = number_format($dish["price"], 2, ',', '.'); ?>
                    <tr>
                        <td><?php echo $dish["title"]; ?></td>
                        <td><?php echo $formattedPrice; ?> €</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </table> 

    </div>