<?php
	require "./inc/config_pdo.inc.php";
?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link href="./css/style.css" rel="stylesheet" type="text/css" />
		<title>Liste de mes séries TV</title>
	</head>
	<body>
    <div id="total">
        <div id="header">
			<h1>Séries TV</h1>
		</div>
		<section id="main">
			<br />
			<table>
				<tr>
					<th class="title">Titres</th>
					<th class="">S01</th>
					<th class="">S02</th>
					<th class="">S03</th>
					<th class="">S04</th>
					<th class="">S05</th>
                    <th class="">S06</th>
                    <th class="">S07</th>
                    <th class="">S08</th>
                    <th class="">S09</th>
                    <th class="">S10</th>
                    <th class="">S11</th>
                    <th class="">S12</th>
                    <th class="">S13</th>
                    <th class="">S14</th>
                    <th class="">S15</th>
                    <th class="">S16</th>
                    <th class="">S17</th>
                    <th class="">S18</th>
                    <th class="">S19</th>
                    <th class="">S20</th>
                    <th class="">Allociné</th>
				</tr>
				<?php
				//création de la requéte SQL
        $recipesStatement = $conn->prepare('SELECT * FROM tb_serie ORDER BY title ASC');

        // on envoie la requête
        $recipesStatement->execute();
        $recipes = $recipesStatement->fetchAll();

          foreach ($recipes as $serie)
					{
						echo "<tr class='open'>";
							echo "<td class=".$serie['title_state'].">".$serie['title']."</td>";
							echo "<td class=".$serie['s01_state'].">".$serie['s01_ep']."</td>";
							echo "<td class=".$serie['s02_state'].">".$serie['s02_ep']."</td>";
							echo "<td class=".$serie['s03_state'].">".$serie['s03_ep']."</td>";
							echo "<td class=".$serie['s04_state'].">".$serie['s04_ep']."</td>";
							echo "<td class=".$serie['s05_state'].">".$serie['s05_ep']."</td>";
                            echo "<td class=".$serie['s06_state'].">".$serie['s06_ep']."</td>";
                            echo "<td class=".$serie['s07_state'].">".$serie['s07_ep']."</td>";
                            echo "<td class=".$serie['s08_state'].">".$serie['s08_ep']."</td>";
                            echo "<td class=".$serie['s09_state'].">".$serie['s09_ep']."</td>";
                            echo "<td class=".$serie['s10_state'].">".$serie['s10_ep']."</td>";
                            echo "<td class=".$serie['s11_state'].">".$serie['s11_ep']."</td>";
                            echo "<td class=".$serie['s12_state'].">".$serie['s12_ep']."</td>";
                            echo "<td class=".$serie['s13_state'].">".$serie['s13_ep']."</td>";
                            echo "<td class=".$serie['s14_state'].">".$serie['s14_ep']."</td>";
                            echo "<td class=".$serie['s15_state'].">".$serie['s15_ep']."</td>";
                            echo "<td class=".$serie['s16_state'].">".$serie['s16_ep']."</td>";
                            echo "<td class=".$serie['s17_state'].">".$serie['s17_ep']."</td>";
                            echo "<td class=".$serie['s18_state'].">".$serie['s18_ep']."</td>";
                            echo "<td class=".$serie['s19_state'].">".$serie['s19_ep']."</td>";
                            echo "<td class=".$serie['s20_state'].">".$serie['s20_ep']."</td>";
                            echo "<td class='fiche'><a href=".$serie['Allocine']." target='_blank'>Fiche</a></td>";
						echo '</tr>';
                    }
				?>
			</table>
			<br />
			<?php	 
				//fermeture de la connection SQL
                $conn = null;
			?>
		</section>
			<?php
				require './inc/footer.php';
			?>
	</div>
    </body>
</html>
