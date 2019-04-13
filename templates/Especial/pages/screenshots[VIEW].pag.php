<div class="box">
<div class="s-header"><span>Ver ScreenShot #{ScreenShot[Id]}</span></div>
  <blockquote>
	<table width="98%" border="0" cellspacing="2" cellpadding="2">
	<tr>
    	<td width="60%" align="center"><blockquote>
		<a href="{ScreenShot[Image]}" class="lightbox"><img src="{ScreenShot[Image]}" width="420" style="border: 0;" /></a>
    </blockquote></td>
    <td width="40%" valign="top"><blockquote>
      <div id="panel">
         <li>&raquo; Enviado por: <strong>{ScreenShot[Autor]}</strong></li>
         <li>&raquo; Enviada em: <strong>{ScreenShot[Date]}</strong></li>
         <li>&raquo; Votos: <strong id="Screen_Votes">{ScreenShot[Votes]}</strong></li>
         <li>&raquo; Link: <input type="text" value="{ScreenShot[Link]}" onClick="this.select();" readonly size="17">
         
         <li>&raquo; Votar: <form name="Send_Vote" id="Send_Vote">
         <select name="Votes" id="Votes">
           <option value="10" selected="selected">10</option>
           <option value="20">20</option>
           <option value="30">30</option>
           <option value="40">40</option>
           <option value="50">50</option>
           <option value="60">60</option>
           <option value="70">70</option>
           <option value="80">80</option>
           <option value="90">90</option>
           <option value="100">100</option>
           <option value="200">200</option>
         </select> <input type="button" value="Votar" onclick="CTM_Load('?pag=screenshots&view={ScreenShot[Id]}&cmd=vote', 'Command', 'POST', BuscaElementosForm('Send_Vote'));" />
         </form>
         </li>
      </div>
    </blockquote></td>
  </tr>
  <tr>
    <td width="60%" align="center"><blockquote>
      {ScreenShot[Description]}</a>
    </blockquote>
    <div id="Command"></div></td>
</table>
{ScreenShot[Comments]}
<?php
global $Check_Logged;
if($Check_Logged == TRUE)
{
?>
<h4 class="heading">Comentar</h4>
<form name="ScreenShot_Comment" id="ScreenShot_Comment">
<table width="500" border="0" align="center">
  <tr>
    <td colspan="2"><strong>Personagem:</strong>
    <select name="Character" id="Character">
    {ScreenShot[Characters]}
    </select></td>
  </tr>
      <tr align="center">
        <td width="146" height="35"><select onchange="selTexto('Text', '['+this.options[this.selectedIndex].value+']', '[/'+this.options[this.selectedIndex].value+']');">
               <option value="0" disabled="disabled" selected="selected">Selecione uma Cor</option>
               <option value="red">Vermelho</option>
               <option value="white">Branco</option>
               <option value="blue">Azul Escuro</option>
               <option value="yellow">Amarelho</option>
               <option value="green">Verde Escuro</option>
               <option value="violet">Violeta</option>
               <option value="gray">Cinza Escuro</option>
               <option value="lime">Verde Lim&atilde;o</option>
               <option value="silver">Cinza Claro</option>
               <option value="pink">Rosa</option>
               <option value="navy">Azul Marinho</option>
               <option value="aqua">Azul &Aacute;gua</option>
            </select></td>
        <td width="296" align="left"><a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[b]', '[/b]');"><img src="images/icons/bbcode/text_bold.png" border="0" /></a>
        <a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[i]', '[/i]');"><img src="images/icons/bbcode/text_italic.png" border="0" /></a>
        <a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[u]', '[/u]');"><img src="images/icons/bbcode/text_underline.png" border="0" /></a>
        <a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[s]', '[/s]');"><img src="images/icons/bbcode/text_strikethrough.png" border="0" /></a>
        <a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[h1]', '[/h1]');"><img src="images/icons/bbcode/text_heading_1.png" border="0" /></a>
        <a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[left]', '[/left]');"><img src="images/icons/bbcode/text_align_left.png" border="0" /></a>
        <a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[center]', '[/center]');"><img src="images/icons/bbcode/text_align_center.png" border="0" /></a>
        <a href="javascript: void(EffectWeb);" onclick="selTexto('Text', '[right]', '[/right]');"><img src="images/icons/bbcode/text_align_right.png" border="0" /></a></td>
      </tr>
      <tr>
        <td align="center" colspan="41"><textarea name="Text" id="Text" cols="60" rows="7"></textarea></td>
      </tr>
      <tr>
        <td align="center" colspan="41"><input type="button" value="Comentar" onclick="CTM_Load('?pag=screenshots&view={ScreenShot[Id]}&cmd=comment','Comment','POST',BuscaElementosForm('ScreenShot_Comment'));" /></td>
      </tr>
</table>
</form>
<div id="Comment"></div>
<?php
}
else
{
?>
<div class="info-box"> Logue-se para comentar esta ScreenShot.</div>
<? } ?>
</blockquote>
        </div>