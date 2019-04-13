<form name="form-login" id="form-login">
	<input type="text" name="Log_Account" id="Log_Account" value="Usu&aacute;rio" onClick="if(this.value=='Usu&aacute;rio')this.value=''" onBlur="if(this.value=='')this.value='Usu&aacute;rio'"  onKeyUp="this.value = this.value.toLowerCase();" size="30">
	<input type="password" name="Log_Password" id="Log_Password" value="*********" onClick="if(this.value=='*********')this.value=''" onBlur="if(this.value=='')this.value='*********'" size="30">
	<input type="button" name="btlogin" id="btlogin" class="btn" onClick="CTM_Load('?ajax=panel&cmd=login','Panel','POST',BuscaElementosForm('form-login'));" value="Logar">
	<a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=recovery','conteudo','GET');" class="margin">Recuperar Senha</a>
</form>
<p class="margin">{Message}</p>
