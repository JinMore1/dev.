
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bot.min.css">
	<style>/* Basic table styling */
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

/* Striped rows */
tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Hover effect */
tr:hover {
  background-color: #blue;
}

	</style>
</head>
<body>	

<div class="p-4">
	<div class=" d-flex justify-content-end mb-4">
		<input class="form-control" type="text" name="" placeholder="Search">
		<button class="btn btn-success">Search</button>
	</div>
	<table class="table table-striped table-hover shadow border ">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">First</th>
	      <th scope="col">Last</th>
	      <th scope="col">Handle</th>
	      <th scope="col">Ger</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>JUANITO</td>
	      <td>ABNO</td>
	      <td>@BOYTUB</td>
	      <td>
	      	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#view">view</button>
	      	<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit">edit</button>
	      	<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete">delete</button>
	      </td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>HARVEY</td>
	      <td>Thornton</td>
	      <td>@AMBOKS</td>
	      <td>
	      	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#view">view</button>
	      	<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit">edit</button>
	      	<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete">delete</button>
	      </td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td >KURT JAN</td>
	      <td>TiTe</td>
	      <td>@SNIPERCHANGEOWEL</td>
	      <td>
	      	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#view">view</button>
	      	<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit">edit</button>
	      	<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete">delete</button>
	      </td>
	    </tr>
	    <tr>
	      <th scope="row">4</th>
	      <td >KERT DENIEL</td>
	      <td>RETIRED</td>
	      <td>@PENBALLPEN</td>
	      <td>
	      	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#view">view</button>
	      	<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit">edit</button>
	      	<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete">delete</button>
	      </td>
	    </tr>
	    <tr>
	      <th scope="row">5</th>
	      <td>CLEMENT DOMINIQUE</td>
	      <td>NGONGO</td>
	      <td>@KLIKBAYNABAY</td>
	      <td>
	      	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#view">view</button>
	      	<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#edit">edit</button>
	      	<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete">delete</button>
	      </td>
	    </tr>
	  </tbody>
	</table>
</div>


<!--ViewModal -->
<div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>WAY KODAK</h3>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>


<!-- Edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>WAY NA ISLAN ANG KODAK</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
        <button type="button" class="btn btn-primary">save</button>
      </div>
    </div>
  </div>
</div>


<!-- delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>DULAON ANG KODAK?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div>

<script src="strap.bundle.min.js"></script>
</body>
</html>
