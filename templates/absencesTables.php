<?php

ob_start();

$eleves = ["Abrams Doe", "Batiste Doe", "Carl Joe", "Daniel Doe", "Etienne Doe", "Fionna Doe"]
?>
    <script>document.addEventListener('DOMContentLoaded', absenceTableLoadEvenlistners);</script>
    <div id="absenceTableContainer">
        <table id="absenceTable" class="overflow-auto">
            <thead>
            <tr>
                <th class="noBorder"></th>
                <th class="noBorder"></th>
                <th class="noBorder"></th>
                <th colspan="12">Lundi 1 Janv.</th>
                <th colspan="12">Mardi 2 janv</th>
                <th colspan="12">Mercredi 3 janv.</th>
                <th colspan="12">Jeudi 4 janv.</th>
                <th colspan="12">Vendredi 5 janv.</th>
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
                    <td class="studentName"><div><?=$eleve?></div></td>
                    <td><div></div></td>
                    <td><div></div></td>
                    <td class="activeTime present"><div></div></td>
                    <td class="activeTime present"><div></div></td>
                    <td class="activeTime uncompleted"><div></div></td>
                    <td class="activeTime uncompleted"><div></div></td>
                    <td class="activeTime uncompleted"><div></div></td>
                    <td><div></div></td>
                    <td class="activeTime uncompleted"><div></div></td>
                    <td class="activeTime uncompleted"><div></div></td>
                    <td class="activeTime uncompleted"><div></div></td>
                    <td><div></div></td>
                    <td><div></div></td>
                    <td><div></div></td>
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <td class="activeTime uncompleted"><div></div></td>
                        <td class="activeTime uncompleted"><div></div></td>
                        <td class="activeTime uncompleted"><div></div></td>
                        <td class="activeTime uncompleted"><div></div></td>
                        <td class="activeTime uncompleted"><div></div></td>
                        <td><div></div></td>
                        <td class="activeTime uncompleted"><div></div></td>
                        <td class="activeTime uncompleted"><div></div></td>
                        <td class="activeTime uncompleted"><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
                        <td><div></div></td>
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
