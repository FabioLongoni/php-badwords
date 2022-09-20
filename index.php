<?php 
$title = 'Paradiso';
$text = "Il Paradiso è composto da nove cieli concentrici, al cui centro sta la Terra; in ognuno di questi cieli, dove risiede un pianeta diverso, stanno i beati, più vicini a Dio a seconda del loro grado di beatitudine. In verità, Dante capirà in seguito che le anime del Paradiso si trovano tutte nell'Empireo, a contemplare Dio, e vengono incontro a lui nei vari cieli secondo il loro grado di beatitudine, per l'amore che nutrono per lui e spiegare i vari misteri sacri. Inoltre, nessun'anima desidera una condizione migliore di quella che già ha, poiché la carità non permette di desiderare altro se non quello che si ha, e non possono far altro che volere ciò che Dio vuole ('in sua volontade è nostra pace', dice Piccarda); Dio, al momento della nascita, ha donato secondo criteri inconoscibili ad ogni anima una certa quantità di grazia, ed è in proporzione a questa che esse godono diversi livelli di beatitudine. Prima di raggiungere il primo cielo i due attraversano la Sfera di Fuoco.";
$length = strlen($text);

$word = $_GET['word'];
$newText = str_replace($word,'***',$text,$count);
$newTitle = 'Paradiso 2.0';
$newLength = strlen($newText);
?>


<h1><?= $title ?></h1>
<p><?= $text ?></p>
<p>Il<strong> paragrafo </strong>ha una lunghezza di <?= $length ?> parole</p>

<h1> <?= $newTitle ?></h1>
<p><?= $newText ?></p>
<p>La parola sostituita era presente <?= $count ?> volte</p>
<p>Il<strong> nuovo paragrafo </strong>ha una lunghezza di <?= $newLength ?> parole</p>