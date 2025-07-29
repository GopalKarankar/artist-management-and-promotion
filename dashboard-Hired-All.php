<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard - Artist hired</title>



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
		<h2 class="text-center"><i class="fa-solid fa-guitar"></i><div class="d-inline bangers-regular">&nbsp Artist hired</div></h2>

	
		<!-- options -->
		<div class="text-center">
			<ul class="list-unstyled">
				
				<a class="text-decoration-none d-inline px-4 py-2 apd <?php if (!empty($_GET['msg'])) { echo $_GET['msg'];	} ?>" href="dashboard-Hired-All.php?msg=apd2ah">All</a>

				<a class="text-decoration-none d-inline px-4 py-2 apd " href="dashboard-Hired-Approved.php?msg=apd2ah">Approved</a>

				<a class="text-decoration-none d-inline px-4 py-2 apd " href="dashboard-Hired-Disapproved.php?msg=apd2ah">Disapproved</a>

			</ul>			
		</div>



		<!-- Table -->
		<div class="table-responsive">
			<table id="userTable" class="table table-bordered "   >

				<thead>
						<th class="text-center">Id</th>
            <th class="text-center">Artist hired</th>
						<th class="text-center">Full Name</th>
						<th class="text-center">Sender Email</th>
						<th class="text-center">Phone Number</th>
						<th class="text-center">Details</th>
						<th class="text-center">Status</th>
						<th class="text-center">Time Of Sending</th>
            <th class="text-center">Actions</th>
				</thead>


			    <tfoot>
			        <th><input type="text" placeholder="Search ID" /></th>
              <th><input type="text" placeholder="Search Artist hired" /></th>
			        <th><input type="text" placeholder="Search Full name" /></th>
			        <th><input type="text" placeholder="Search Email" /></th>
			        <th><input type="text" placeholder="Search Phone Number" /></th>
			        <th><input type="text" placeholder="Search Details" /></th>
			        <th><input type="text" placeholder="Search Status" /></th>
			        <th><input type="text" placeholder="Search Time of Sending" /></th>
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
        ajax: "dashboard-Hired-All-Fetch.php",
        columns: [
          { data: "id" },
          { data: "artist" },
          { data: "fullName" },
          { data: "senderEmail" },
          { data: "phNumber" },
          {  data: "details",
              render: function (data, type, row) {
                return `
                  <div><a href="dashboard-Hired-All-VD.php?id=${row.id}&status=${row.status}" class="btn btn-link p-0">View Details</a></div>
                `;
              }
           },
          { data: "status" },
          { data: "timeOfUpload" },
          {
            data: null,
            orderable: false,
            searchable: false,
              render: function (data, type, row) {

                let approveBtn = '';
                let disapproveBtn = '';

                if (row.status === 'pending') {

                  approveBtn = `<div class="action-btn d-inline text-success approveBtn" data-id="${row.id}"  data-email="${row.senderEmail} "><i class="fa-solid fa-thumbs-up"></i></div>`;

                  disapproveBtn = `<div class="action-btn d-inline text-success disapproveBtn" data-id="${row.id}" data-email="${row.senderEmail} "><i class="fa-solid fa-thumbs-down"></i></div>`;

                } else if (row.status === 'Approved') {

                  disapproveBtn = `<div class="action-btn d-inline text-success disapproveBtn" data-id="${row.id}" data-email="${row.senderEmail} "><i class="fa-solid fa-thumbs-down"></i></div>`;

                } else if (row.status === 'Disapproved') {

                  approveBtn = `<div class="action-btn d-inline text-success approveBtn" data-id="${row.id}" data-email="${row.senderEmail} "><i class="fa-solid fa-thumbs-up"></i></div>`;

                }

              return `
                <div class="action-btn d-inline text-danger deleteBtn" data-id="${row.id}" data-email="${row.senderEmail} ">
                  <i class="fa-solid fa-trash"></i>
                </div>

                &nbsp
                ${approveBtn}
                
                &nbsp
                ${disapproveBtn}
              
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

      // Edit
      $('#userTable').on('click', '.editBtn', function () {
        const id = $(this).data('id');
        const name = prompt("Enter new name:", $(this).data('name'));
        const email = prompt("Enter new email:", $(this).data('email'));
        if (name && email) {
          $.post('dashboard-Hired-Fetch-Edit.php', { id, name, email }, function (res) {
            alert(res.message);
            table.ajax.reload(null, false);
          }, 'json');
        }
      });

      // Delete
      $('#userTable').on('click', '.deleteBtn', function () {
        const id = $(this).data('id');
        if (confirm("Delete this request ?")) {
          $.post('dashboard-Hired-Fetch-Delete.php', { id }, function (res) {
            alert(res.message);
            table.ajax.reload(null, false);
          }, 'json');
        }
      });

      // Approve
      $('#userTable').on('click', '.approveBtn', function () {
        const id = $(this).data('id');
        const email = $(this).data('email');

        $.post('dashboard-Hired-Fetch-Update.php', { id, email, status: 'Approved' }, function (res) {
          alert(res.message);
          table.ajax.reload(null, false);
        }, 'json');
      });

      // Disapprove
      $('#userTable').on('click', '.disapproveBtn', function () {
        const id = $(this).data('id');
         const email = $(this).data('email');

       $.post('dashboard-Hired-Fetch-Update.php', { id, email, status: 'Disapproved' }, function (res) {
          alert(res.message);
          table.ajax.reload(null, false);
        }, 'json');
      });
    });
  </script>



</body>
</html>