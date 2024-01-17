<?php
require "..//model.php";
 $model = new database ("localhost", "root", "", "faq"  );
 $conn = $model->make_connection();



            $sql = "SELECT vraag, antwoord FROM faq"; // Query om gegevens op te halen

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="faq">';
                    echo '<div class="faq-question">';
                    echo '<h2>' . $row['vraag'] . '</h2>';
                    echo '<i class="fas fa-chevron-down"></i>';
                    echo '</div>';
                    echo '<div class="faq-answer">';
                    echo '<p>' . $row['antwoord'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>Geen vragen en antwoorden beschikbaar.</p>";
            }

            mysqli_close($conn);