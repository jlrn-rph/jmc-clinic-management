<!DOCTYPE html>
  <html>
    <head>
    <meta charset='utf-8' />
      <link href='{{asset('assets/fullcalendar/packages/core/main.css')}}' rel='stylesheet' />
      <link href='{{asset('assets/fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet' />
      <script src='{{asset('assets/fullcalendar/packages/core/main.js')}}'></script>
      <script src='{{asset('assets/fullcalendar/packages/interaction/main.js')}}'></script>
      <script src='{{asset('assets/fullcalendar/packages/daygrid/main.js')}}'></script>
      <script>
      document.addEventListener('DOMContentLoaded', function() {
        var srcCalendarEl = document.getElementById('source-calendar');
        var destCalendarEl = document.getElementById('destination-calendar');

        var srcCalendar = new FullCalendar.Calendar(srcCalendarEl, {
          plugins: [ 'interaction', 'dayGrid' ],
          editable: true,

          eventLeave: function(info) {
            console.log('event left!', info.event);
          }
        });

        // var destCalendar = new FullCalendar.Calendar(destCalendarEl, {
        //   plugins: [ 'interaction', 'dayGrid' ],
        //   defaultDate: '2019-08-12',
        //   editable: true,
        //   droppable: true, // will let it receive events!
        //   eventReceive: function(info) {
        //     console.log('event received!', info.event);
        //   }
        // });

        srcCalendar.render();
        //destCalendar.render();
      });

    </script>
    <style>
      /* body {
        margin: 20px 0 0 20px;
        font-size: 14px;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      } */

      #source-calendar,
      #destination-calendar {
        width: 600px;
        margin: 0 auto;
      }

    </style>
    </head>

    <body>
      <div id='source-calendar'></div>
    </body>
    </html>
