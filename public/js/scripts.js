function userManager(){
  var manager = window.open("/workflow/browser", "manager", "width=800, height=600");
}

function returnCompany(siret) {
    window.opener.$('#company').val(siret);
    window.opener.$('#company-hidden').val(siret);
    window.close();
}

$('#calendar').fullCalendar({
  header: {
      left: 'prev,next today myCustomButton',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
  },

  selectable: true,

  businessHours: {
      start: '9:00', // a start time (10am in this example)
      end: '18:30', // an end time (6pm in this example)
  },

  dayClick: function(date, jsEvent, view) {
    if(view.name == 'agendaDay') {
      $("#date").val(date.format('D-MM-Y HH:mm:ss'));
      $("#date-hidden").val(date.format('Y-MM-D HH:mm:ss'));
    }
    if(view.name == 'agendaWeek') {
      $("#date").val(date.format('D-MM-Y HH:mm:ss'));
      $("#date-hidden").val(date.format('Y-MM-D HH:mm:ss'));
    }
    if(view.name == 'month') {
      // $('#calendar').fullCalendar( 'removeEvents' );
      $('#calendar').fullCalendar('gotoDate', date.format());
      $('#calendar').fullCalendar('changeView', 'agendaDay');
    }
  }

});

// Requete Ajax pour récupérer les évenements

getEvents();

function getEvents() {
  $('#calendar').fullCalendar( 'removeEvents' );
  view = $('#calendar').fullCalendar( 'getView' );
  var day = null; var month = null; var year = null; var date = null; var dateTo = null;
  if(view.name == 'month') {
    view = 'month';
    month = getMonth();
    year = getYear();
  } else if(view.name == 'agendaWeek') {
    view = 'week';
    date = $("#calendar").fullCalendar('getDate').format('YYYY-MM-DD');
    dateTo = moment(date).add(6,'d').format('YYYY-MM-DD');
  } else if(view.name == 'agendaDay') {
    view = 'day';
    day = getDay();
    month = getMonth();
    year = getYear();
  }
  $.ajax({
    method: "POST",
    url: "/workflow/appointment/fetch",
    data: {
      view:view, day:day, month:month, year:year, date:date, dateTo:dateTo,
      adviser: $('#adviser').val(), _token: $('meta[name=csrf-token]').attr('content')
    }
  }).done(function( object ) {
    var events = [];
    $.each( object, function(key, value) {
      var endDate = moment(value.date);
      if(value.status == 0) {
        background = '#3097d1';
        status = "à venir";
      } else if(value.status == 1) {
        background = '#2ab27b';
        status = 'Evenement Effectuer';
      } else if(value.status >= 20 ) {
        background = '#bf5329';
        status = 'Annuler par le client';
        if(value.status == 21 ) {
          status = "Le client ne s'est pas présenter";
        }
      }
      events.push({
        backgroundColor: background,
        id: key ,
        title: value.type+' avec '+value.user.firstname+' '+value.user.lastname+' | Entreprise : '+value.user.company +' | Status : '+status,
        start:  value.date,
        end: endDate.add(30, 'm').format('Y-MM-D HH:mm:ss')});
    });
    $('#calendar').fullCalendar( 'renderEvents', events, true);
  });
}

function getYear() {
  var date = $("#calendar").fullCalendar('getDate');
  var year = moment(date).get('year');
  return year;
}

function getMonth() {
  var date = $("#calendar").fullCalendar('getDate');
  var month = moment(date).get('month');
  return month +=1;
}

function getDay() {
  var date = $("#calendar").fullCalendar('getDate');
  var day = moment(date).get('date');
  return day;
}

$('.fc-prev-button').click( function() {
  getEvents();
});

$('.fc-next-button').click( function() {
  getEvents();
});
