<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>

<div class="container-fluid">
  <div class="row-fluid">
<form enctype="multipart/form-data" class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post" action="redirect.php"><div class="title"><h2>Avaliação</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="codigo" placeholder="Código da Compra"/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"></label><div class="item-cont"><div class="large"><span><select name="select" >

		<option value="option 1">Visa</option>
		<option value="option 2">Hiper</option>
		<option value="option 3">Master</option></select><i></i><span class="icon-place"></span></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"></label><div class="item-cont"><textarea class="medium" name="opiniao" cols="20" rows="5" placeholder="Opinião"></textarea><span class="icon-place"></span></div></div>
	<div class="element-rating<?php frmd_add_class("rating"); ?>"><label class="title">Meio de Pagamento</label><div class="rating"><input type="radio" class="rating-input" id="rating-5" name="meio_pagamento" value="5" /><label for="rating-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating-4" name="meio_pagamento" value="4" /><label for="rating-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating-3" name="meio_pagamento" value="3" /><label for="rating-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating-2" name="meio_pagamento" value="2" /><label for="rating-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating-1" name="meio_pagamento" value="1" /><label for="rating-1" class="rating-star"></label></div></div>
	<div class="element-rating<?php frmd_add_class("rating1"); ?>"><label class="title">Atendimento</label><div class="rating"><input type="radio" class="rating-input" id="rating1-5" name="atendimento" value="5" /><label for="rating1-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-4" name="atendimento" value="4" /><label for="rating1-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-3" name="atendimento" value="3" /><label for="rating1-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-2" name="atendimento" value="2" /><label for="rating1-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating1-1" name="atendimento" value="1" /><label for="rating1-1" class="rating-star"></label></div></div>
	<div class="element-rating<?php frmd_add_class("rating1"); ?>"><label class="title">Satisfação</label><div class="rating"><input type="radio" class="rating-input" id="rating2-5" name="satisfacao" value="5" /><label for="rating2-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating2-4" name="satisfacao" value="4" /><label for="rating2-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating2-3" name="satisfacao" value="3" /><label for="rating2-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating2-2" name="satisfacao" value="2" /><label for="rating2-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating2-1" name="satisfacao" value="1" /><label for="rating2-1" class="rating-star"></label></div></div>	
	
<div class="submit"><input type="image" src="facebook.png"/></div></form>
</div>
</div>

<script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>