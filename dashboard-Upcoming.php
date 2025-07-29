<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Upcoming</title>



  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


<!-- css links -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

     <link rel="stylesheet" href="css/style.css">

<style>
  
/*      .action-btn {
      margin: 2px;
      padding: 4px 8px;
      font-size: 0.9em;
    }
*/
    /* Change font color of the ColVis button */
    .dt-button.buttons-colvis {
/*        color: red; */
        /* Change to your desired color */
    }


    /* Change font color of the dropdown items */
    div.dt-button-collection {
      background: #000;
        /* Change to your desired color */
    }


    /* Change font color of the dropdown items */
    div.dt-button-collection .dt-button {
        color: white; /* Change to your desired color */
    }

    .action-buttons-container {
  display: flex;
  gap: 6px; /* space between buttons */
  justify-content: center; /* center align horizontally */
  align-items: center; /* vertically center inside cell */
}


/* Target the pagination dropdown itself */
.dataTables_length select {
  background-color: #000;   /* Background color */
  color: #fff;              /* Font color */
  border: 1px solid #ccc;   /* Optional: border */
  padding: 4px 8px;         /* Optional: spacing */
  border-radius: 4px;       /* Optional: rounded corners */
}

/* Style pagination dropdown options (not widely supported in all browsers) */
.dataTables_length select option {
  background-color: #000;
  color: #fff;
}


.dataTables_length label {
/*  color: #333;*/
   /* Label text color */
/*  font-weight: bold;*/
}


</style>

</head>
<body>
    
    <?php include "dashboard-Aside.php"; ?>

    <div class="main">
        <h2 class="text-center"><i class="fa-solid fa-calendar"></i><div class="d-inline bangers-regular">&nbsp Upcoming events list</div></h2>


        <center>
        <a href="dashboard-Upcoming-Add.php" class="btn text-white text-center border-white p-2 m-3  text-decoration-none">Add new event</a>
        </center>

        <!-- Table -->
        <div class="table-responsive">
            <table id="userTable" class="table table-bordered "   >

                <thead>
                        <th class="text-center">Id</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Event date</th>
                        <th class="text-center">Event time</th>
                        <th class="text-center">Upload time</th>
                        <th class="text-center">Actions</th>
                </thead>


                <tfoot>
                    <th><input type="text" placeholder="Search ID" /></th>
                    <th><input type="text" placeholder="Search Address" /></th>
                    <th><input type="text" placeholder="Search Event date" /></th>
                    <th><input type="text" placeholder="Search Event time" /></th>
                    <th><input type="text" placeholder="Search Upload time" /></th>
                    <th class="text-center">Actions</th>
                </tfoot>

         </table>   

        </div>      
    </div>


    <?php include "preloader.php"; ?>



<!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <!-- jQuery & DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
  <script src="js/script.js"></script>


  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

  <script>
    $(document).ready(function () {
      const table = $('#userTable').DataTable({
        ajax: "dashboard-Upcoming-Fetch.php",
        columns: [
          { data: "id" },
          { data: "address" },
          { data: "eventDate" },
          { data: "eventTime" },
          { data: "timeOfUpload" },
          {
            data: null,
            orderable: false,
            searchable: false,
              render: function (data, type, row) {

                return `
                  <div class="action-buttons-container">

                    <div class="action-btn text-danger deleteBtn" data-id="${row.id}">
                      <i class="fa-solid fa-trash"></i>
                    </div>

                    <a class="text-success d-inline" title="Edit"  href="dashboard-Upcoming-Edit.php?id=${row.id}"><i class="fa-solid fa-pen-to-square"></i>
                    </a>


                  </div>
                `;
              }
          }
        ],
        dom: 'Blfrtip',
        buttons: ['csvHtml5', 'excelHtml5', 'pdfHtml5', 'print', 'colvis'],
         paging: true,                  // Enable pagination
          pageLength: 10,                // Show 10 entries per page
          lengthMenu: [1, 5, 10, 25, 50],   // Dropdown options for number of entries per page

      initComplete: function () {
          this.api().columns().every(function () {
            const that = this;
            $('input', this.footer()).on('keyup change clear', function () {
              if (that.search() !== this.value) {
                that.search(this.value).draw();
              }
            });
          });
        }

      });


      // Delete
      $('#userTable').on('click', '.deleteBtn', function () {
        const id = $(this).data('id');
        if (confirm("Delete this Event ?")) {
          $.post('dashboard-Upcoming-Fetch-Delete.php', { id }, function (res) {
            alert(res.message);
            table.ajax.reload(null, false);
          }, 'json');
        }
      });

      
    });
  </script>



</body>
</html>