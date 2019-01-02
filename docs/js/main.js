function regUser() {
var name = document.getElementById("name").value;
var mail = document.getElementById("mail").value;
var phone = document.getElementById("phone").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&mail1=' + mail + '&phone1=' + phone;
if (name == '' || mail == '' || phone == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "registeruser.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}

function regAccomodation() {
var date = document.getElementById("datepicker").value;
var time = document.getElementById("timepicker").value;
var hours = document.getElementById("hours").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&date1=' + date + '&time1=' + time + '&hours1=' + hours;
if (date == '' || time == '' || hours == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "registeraccomodation.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}



function regEvent() {
  var name = 'temp';
  var mail = 'temp';
  var phone = 'temp';
  // Returns successful data submission message when the entered information is stored in database.
  var dataString = 'event1=' + "sample";
  if (name == '' || mail == '' || phone == '') {
  alert("Please Fill All Fields");
  } else {
  // AJAX code to submit form.
  jQuery.ajax({
  type: "POST",
  url: "registerevent.php",
  data: dataString,
  cache: false,
  success: function(html) {
  alert(html);
  }
  });
  }
  return false;
}

function regAmbassador() {
var name = document.getElementById("name").value;
var mail = document.getElementById("mail").value;
var phone = document.getElementById("phone").value;
var count = document.getElementById("count").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&mail1=' + mail + '&phone1=' + phone + '&count1=' + count;
if (name == '' || mail == '' || phone == '' || count=='') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "registerambassador.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}
