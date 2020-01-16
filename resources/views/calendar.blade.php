<!DOCTYPE html>
<html>
  <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
  <body>
      <?php
      require_once('C:\xampp\htdocs\clinic-management-system\connection.php');
      $client = getClient();
      if(! is_a ($client, "Google_Client")) {
              echo $client;
      }
      else { ?>
          <input type='date' id='available_dates'/>
          <select id='available_times'>
          </select>
          <button id='submit'>Schedule me!</button>
          <p id='dump'></p>

          <script>
              $(document).ready(function() {
                  document.getElementById('available_dates').addEventListener('change', function(){
                      get_times(this);
                  });
                  document.getElementById('submit').addEventListener('click', function(){
                      schedule_me(this);
                  });
              });

              function get_times(date_picker) {
                  var date = date_picker.value;
                  //https://www.w3schools.com/xml/xml_http.asp
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                         // Typical action to be performed when the document is ready:
                         document.getElementById('available_times').innerHTML = xhttp.responseText;
                      }
                  };
                  xhttp.open('GET', '/calendars.php?action=get_times&date='+date+'&t=' + Math.random());
                  xhttp.setRequestHeader('X-Requested-With', 'xmlhttprequest');
                  xhttp.send();
              }

              function schedule_me(btn) {
                  var date = document.getElementById('available_dates').value;
                  var time = document.getElementById('available_times').value;
                  //https://www.w3schools.com/xml/xml_http.asp
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                         // Typical action to be performed when the document is ready:
                         document.getElementById('dump').innerHTML = xhttp.responseText;
                      }
                  };
                  xhttp.open('GET', '/calendars.php?action=schedule_me&date='+date+'&time='+time+'&t=' + Math.random());
                  xhttp.setRequestHeader('X-Requested-With', 'xmlhttprequest');
                  xhttp.send();
              }
          </script>

      <?php }
      ?>
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FManila&amp;src=cjVlcjhwdmc3bzM5MnNqdHRzYnU0bm4xcHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23DD5511&amp;color=%231F753C&amp;title=Clinic%20Management%20System" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </center>
  </body>
</html>
