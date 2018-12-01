<?php

echo '<p> Sneaker ' . htmlspecialchars($s->getNomSneaker()) . ' de marque ' . htmlspecialchars($s->getNomMarque()) . ' de couleur ' . htmlspecialchars($s->getCouleurSneaker()) . ' et de pointure ' . htmlspecialchars($s->getPointureSneaker()) . ' coûtent ' . htmlspecialchars($s->getPrixSneaker()) . '</p>';

echo '<a style="margin-right: 1%" href="index.php?action=delete&idSneaker=' . htmlspecialchars($v->getIdSneaker()) . '">Supprimer ces Sneakers</a>';

echo '<a style="margin-right: 1%" href="index.php?action=update&idSneaker=' . htmlspecialchars($v->getIdSneaker()) . '">Modifier ces Sneakers</a>';

?>
