<?php
/***********
*
* Módulo Rastreamento Correios
* @version 2.6, Abril/2012
* @author Fernando Soares ( www.fernandosoares.com.br )
* @package Joomla! 1.5 ~ 2.5
* @copyright (C) 2008-2012 Fernando Soares. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
************
*/
 
/** ensure this file is being included by a parent file */
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
?>
<form action="http://websro.correios.com.br/sro_bin/txect01$.QueryList" method="GET" target="_blank">
<INPUT TYPE="hidden" NAME="P_LINGUA" VALUE="001">
<INPUT TYPE="hidden" NAME="P_TIPO" VALUE="001">
<div id="FooterServTitRastr" align="center">											
<div align="left">
Digite o número do SEDEX conforme o exemplo:<br>
<input type="text" class="inputbox" name="P_COD_UNI" size="22" maxlength="23" value="SS987654321BR" onFocus="if(this.value=='SS987654321BR')this.value='';" >
<img src="modules/mod_sedex_tracker/sedex_tracker/correios.gif" width=73 height=15 alt="Correios do Brasil">
<br>
<div align="right">
<input type="submit" class="button" value="Pesquisar">
</div>
</div>
</div> 
</form>