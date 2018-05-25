<div class="sidebar-wrapper">
    <div class="logo">
        <a class="simple-text">
            MENU
        </a>
    </div>

    <ul class="nav">
        <li class="active">
            <a href="<?= $this->Url->build(['controller' => 'TimeSchedules', 'action' => 'index']); ?>">
                <i class="ti-agenda"></i>
                <p>Regular Signals</p>
            </a>
        </li>
        <li>
            <a href="<?= $this->Url->build(['controller' => 'TimeSchedules', 'action' => 'index']); ?>">
                <i class="ti-agenda"></i>
                <p>Limited Signals</p>
            </a>
        </li>
        <li>
            <a href="<?= $this->Url->build(['controller' => 'TimeSchedules', 'action' => 'add']); ?>">
                <i class="ti-alarm-clock"></i>
                <p>Add New Signal</p>
            </a>
        </li>
    </ul>
</div>