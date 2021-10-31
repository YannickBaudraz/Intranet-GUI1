<?php

ob_start();

$eleves = ["Abrams Doe", "Batiste Doe", "Carl Joe", "Daniel Doe", "Etienne Doe"]
?>
    <script>document.addEventListener('DOMContentLoaded', absenceTableLoadEvenlistners);</script>
    <div id="absenceTableContainer">
        <table id="absenceTable" class="overflow-auto">
            <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th colspan="12">Lundi 1 Janv.</th>
                <th colspan="12">Mardi 2 janv</th>
                <th colspan="12">Mercredi 3 janv.</th>
                <th colspan="12">Jeudi 4 janv.</th>
                <th colspan="">Vendredi 5 janv.</th>
            </tr>
            <tr>
                <th>Semaine 1</th>
                <th>Total année 2021-2022</th>
                <th>Total semaine</th>
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <th>GUI1</th>
                    <th>GUI1</th>
                    <th>GUI1</th>
                    <th>GUI1</th>
                    <th>GUI1</th>
                    <th></th>
                    <th>GUI1</th>
                    <th>GUI1</th>
                    <th>GUI1</th>
                    <th></th>
                    <th></th>
                    <th></th>
                <?php endfor; ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($eleves as $eleve): ?>
                <tr>
                    <td class="studentName"><?=$eleve?></td>
                    <td></td>
                    <td></td>
                    <td class="activeTime present"></td>
                    <td class="activeTime present"></td>
                    <td class="activeTime uncompleted"></td>
                    <td class="activeTime uncompleted"></td>
                    <td class="activeTime uncompleted"></td>
                    <td></td>
                    <td class="activeTime uncompleted"></td>
                    <td class="activeTime uncompleted"></td>
                    <td class="activeTime uncompleted"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <td class="activeTime uncompleted"></td
                        <td class="activeTime uncompleted"></td
                        <td class="activeTime uncompleted"></td>
                        <td class="activeTime uncompleted"></td>
                        <td class="activeTime uncompleted"></td>
                        <td></td>
                        <td class="activeTime uncompleted"></td>
                        <td class="activeTime uncompleted"></td>
                        <td class="activeTime uncompleted"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <?php endfor; ?>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


<?php
$headerPath = "templates/components/menuAbsences.php";
$contenu = ob_get_clean();

require "templates/Layout.php";
