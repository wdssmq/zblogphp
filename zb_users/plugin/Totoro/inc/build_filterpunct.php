<?php
return function(&$content){
	$regex = "/\~|\!|\@|\#|\\$|\%|\^|\&|\*|\(|\)|_|\\\|\\+|\||\-|\=|\||\{|\}|\[|\]|\;|\'|\:|\"|\<|\>|\?|\/|\.|\,|\！|\＃|\￥|\…|\（|\）|\—|\、|\【|\】|\｛|\｝|\；|\：|\‘|\’|\“|\”|\《|\》|\＼|\，|\。|\、|\？/si";
	$content = preg_replace($regex, '', $content);
};