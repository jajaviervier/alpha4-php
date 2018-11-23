function activarNavbar(modulo,objeto){

console.log(modulo)
console.log(objeto)
$('.treeview').attr('class','treeview');
$('.active').attr('class','');
$('#'+modulo).attr('class','treeview active menu-open');
$('#'+objeto).attr('class','active');



}