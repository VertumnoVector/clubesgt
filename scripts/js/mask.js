function inputHandler(masks, max, event) {
	var c = event.target;
	var v = c.value.replace(/\D/g, '');
	var m = c.value.length > max ? 1 : 0;
	VMasker(c).unMask();
	VMasker(c).maskPattern(masks[m]);
	c.value = VMasker.toPattern(v, masks[m]);
}

var telMask = ['(99) 9999-9999', '(99) 99999-9999'];
var dateMask = ['99/99/9999'];
var docMask = ['999.999.999-99','99999-999'];

var tel = document.querySelector('input[name="fixo"]');
var celular = document.querySelector('input[name="celular"]');

var nascimento = document.querySelector('input[name="nascimento"]');
var cpf = document.querySelector('input[name="cpf"]');

VMasker(tel).maskPattern(telMask[0]);
VMasker(celular).maskPattern(telMask[1]);
VMasker(document.querySelector('input[name="whatsapp"]')).maskPattern(telMask[1]);

VMasker(document.querySelector('input[name="cep"]')).maskPattern(docMask[1]);

VMasker(nascimento).maskPattern(dateMask[0]);
VMasker(cpf).maskPattern(docMask[0]);
VMasker(document.querySelector('input[name="rg"]')).maskNumber();
VMasker(document.querySelector('input[name="telComercial"]')).maskPattern(telMask[1]);

VMasker(document.querySelector('input[name="nascimentoDep1"]')).maskPattern(dateMask[0]);
VMasker(document.querySelector('input[name="nascimentoDep2"]')).maskPattern(dateMask[0]);
VMasker(document.querySelector('input[name="nascimentoDep3"]')).maskPattern(dateMask[0]);
VMasker(document.querySelector('input[name="nascimentoDep4"]')).maskPattern(dateMask[0]);
