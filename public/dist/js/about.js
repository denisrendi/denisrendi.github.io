// JavaScript Document
$("#somediv").click(function() {
  opendialog("http://localhost/archiving/about.php");
});

function opendialog(page) {
  var $dialog = $('#somediv')
  .html('<iframe style="border: 0px; " src="' + page + '" width="100%" height="100%"></iframe>')
  .dialog({
    title: "Page",
    autoOpen: false,
    dialogClass: 'dialog_fixed,ui-widget-header',
    modal: true,
    height: 600,
    minWidth: 1000,
    draggable:true,
    /*close: function () { $(this).remove(); },*/
    buttons: { "Ok": function () {         $(this).dialog("close"); } }
  });
  $dialog.dialog('open');
}