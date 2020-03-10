<?php

if(!$_SESSION["nick"]){

  echo '<script> window.location="login";</script>';

  exit();

  }
  else{
  
  }                 
  
?> 
<script type="text/javascript">

function showTableData() {
        document.getElementById('info').value = ""
        var myTab = document.getElementById('myTable');

        // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
        for (i = 1; i < myTab.rows.length; i++) {

            // GET THE CELLS COLLECTION OF THE CURRENT ROW.
            var objCells = myTab.rows.item(i).cells;

            // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
            for (var j = 0; j < objCells.length-1; j++) {
                info.value = info.value + objCells.item(j).innerHTML + '-';
            }
            info.value = info.value + '+';     // ADD A BREAK (TAG).
			
        }
    }


function addRow() {
  const newTr = `
<tr class="hide">
  <td class="pt-3-half" contenteditable="true">-</td>
  <td class="pt-3-half" contenteditable="true">-</td>
  <td class="pt-3-half" contenteditable="true">-</td>
  <td>
    <span class="table-remove"><button type="button" onclick='deleteRow(this)' class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">Remove</button></span>
  </td>
</tr>`;
  $(table).find('tbody').append(newTr);
}
function deleteRow(r) {
  $(r).parents('tr').detach();           
 }

</script>

<section class="content">
  <div class="container-fluid">
    <!-- Editable table -->
    <form method="post">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2" onclick='addRow()'><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center" id="myTable" >
        <thead>
          <tr>
            <th class="text-center">Producto</th>
            <th class="text-center" >Descripcion de uso</th>
            <th class="text-center">Nota</th>
           </tr>
        </thead>
        <tbody>
          <tr id="data">
            <td class="pt-3-half" contenteditable="true">.</td>
            <td class="pt-3-half" contenteditable="true">.</td>
            <td class="pt-3-half" contenteditable="true">.</td>
            </td>
            <td>
              <span class="table-remove"><button type="button" onclick='deleteRow(this)'
                  class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- <p><input type="button" id="bt" value="Show Table Data" onclick="showTableData()" /></p>-->
    <input type="hidden" name="info" id='info' value=""/>
    <input type="submit" name="enviar" value="Enviar datos" class="btn btn-success" onclick="showTableData()" />
</form>
  </section>

  <?php 
$ingreso = new DentalAdmin();
$ingreso -> agregareceta();