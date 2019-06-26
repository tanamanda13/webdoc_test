<?php $article1 = $pdo->query('SELECT titre FROM article WHERE id = "1"');
        $title = $article1->fetch(); ?>
        <h1><?php echo $title['titre']  ?></h1>
      </tbody>
    </table>

<h1>LE RÔLE DU CHAMPIGNON DANS l’ÉVOLUTION DE LA VIE   TERRESTRE</h1>
<h2>01</h2>