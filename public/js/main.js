$(function() {
  $('.pasteform').submit(function(event) {
    event.preventDefault();
    var $this = $(this);
    var url = $this.attr('action');
    $.ajax({
      type: "POST",
      url: url,
      data: $this.serialize()
    }).done(function(data) {
      $('<li><a href="' + data.url + '">' + data.title + '</a></li>').prependTo('.paste-list ul').children('a').animate({'font-size': '96px'},200).animate({'font-size': '14px'},200);
      displayAlert('success',(data.status === 'new' ? "New" : "Updated") + ' paste saved!');

      $this.find('input[name=id]').attr('value', data.id);
    });
  });
  return false;
});

var displayAlert = function(alertType, message) {
  var $alert = $('<div class="alert alert-' + alertType + ' alert-dismissable" role="alert"><button data-dismiss="alert">Dismiss</button>' + message + '</div>').appendTo('.alert-container');
}