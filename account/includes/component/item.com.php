<?php

function accountItem($itemname, $itemimage, $itemprice, $itemstatus){

echo '
<div class="profile-item">	
			<div class="profile-item-image"><img src="'. $itemimage .'" height="100%" width="100%"></div>
			<h3>'. $itemname .'</h3>
			<p>Price: '. $itemprice .' Naira</p>
			<p>Status: '. $itemstatus .'</p>	
			<button class="profile-edit-item">Edit Item <i class="fa fa-edit"></i></button>
			<button class="profile-remove-item">Remove Item <i class="fa fa-trash"></i></button>
</div>
';
}
function martItem($itemname, $itemimage, $itemprice, $itemstatus){}