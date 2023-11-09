<html><head>
    <script>
    function validateForm() {
      //let x = document.forms["myForm"]["fname"].value;
      var x = document.getElementById("fname").value;
      if (x == "") { //isian kosong, berarti text box nya tidak diisi apa-apa
        alert("Name must be filled out");
        return false; //function ini ada return value, bukan void
        //stop, gak dikirim ke server
      }
      return true; //boleh dikasih boleh tidak, karena default function adalah true.
      //Pencegahan nilai ke false berfungsi supaya tidak jadi dikirimkan
    }
    </script>
    </head>
    <body>

    <h2>JavaScript Validation</h2>

    <form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
      Name: <input type="text" id="fname" name="fname" class="form-control>
      <input type=" submit"="" value="Submit">
      <input type="roket" value="Kosong" class="btn btn-warning">
    </form>


  </body>
  </html>
