<?php $article2 = $pdo->query('SELECT titre FROM article WHERE id = "2"');
        $title2 = $article2->fetch(); ?>
        <h1><?php echo $title2['titre']  ?></h1>
      </tbody>
    </table>