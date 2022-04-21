<?php
declare(strict_types=1);

namespace App\View;

use BootstrapUI\View\UIViewTrait;
use Cake\View\View;

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
    }
}
?>
