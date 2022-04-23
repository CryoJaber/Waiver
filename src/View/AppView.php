<?php
declare(strict_types=1);

namespace App\View;

use BootstrapUI\View\UIViewTrait;
use Cake\View\View;
use DataTables\View\Helper\DataTablesHelper;

class AppView extends View
{
    use UIViewTrait;

    /**
     * Initialization hook method.
     */
    public function initialize(): void
    {
        parent::initialize();

        // Call the initializeUI method from UIViewTrait
        $this->initializeUI();
	$this->loadHelper('DataTables.DataTables');
    }
}
?>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
