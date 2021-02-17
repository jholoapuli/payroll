<div class="o-page__sidebar js-page-sidebar">
    <div class="c-sidebar">
        <a class="c-sidebar__brand"> 
            <img class="c-sidebar__brand-img" src="..." alt="Logo" style="width: 30%; margin-left: 15%;"> 
        </a>
        
        <h4 class="c-sidebar__title">Dashboard</h4>
        <ul class="c-sidebar__list">  
            <li class="c-sidebar__item active">
                <a class="c-sidebar__link" href="...">
                    <i class="fa fa-home u-mr-xsmall"></i>
                    Dashboard
                </a>
                <a class="c-sidebar__link" href="...">
                    <i class="fa fa-home u-mr-xsmall"></i>
                    Audit Trail
                </a>
            </li>  
                
            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_2" aria-expanded="false" aria-controls="sidebar-submenu_2">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Departments
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_2">
                    <li><a class="c-sidebar__link" href="{{URL::route('indexpage')}}">All Departments</a></li> 
                    <li><a class="c-sidebar__link" href="{{URL::route('deptform')}}">Add Department</a></li>                                         
                </ul>
            </li>           
            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_2" aria-expanded="false" aria-controls="sidebar-submenu_2">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Employees
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_2">
                    <li><a class="c-sidebar__link" href="...">Records</a></li> 
                    <li><a class="c-sidebar__link" href="...">Add New</a></li>                                         
                </ul>
            </li>  
            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_2" aria-expanded="false" aria-controls="sidebar-submenu_2">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Loans
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_2">
                    <li><a class="c-sidebar__link" href="...">All Loans</a></li> 
                    <li><a class="c-sidebar__link" href="...">Loan Types</a></li>        
                    <li><a class="c-sidebar__link" href="...">Add Loan Types</a></li>                                    
                </ul>
            </li>  
            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_2" aria-expanded="false" aria-controls="sidebar-submenu_2">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Leaves
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_2">
                    <li><a class="c-sidebar__link" href="...">All Leaves</a></li> 
                    <li><a class="c-sidebar__link" href="...">Leaves Types</a></li>        
                    <li><a class="c-sidebar__link" href="...">Add Leaves Types</a></li>                                         
                </ul>
            </li>        
            <li class="c-sidebar__item has-submenu">
                <a class="c-sidebar__link" data-toggle="collapse" href="#sidebar-submenu_2" aria-expanded="false" aria-controls="sidebar-submenu_2">
                    <i class="fa fa-flag-checkered u-mr-xsmall"></i> Mandatory Deductions
                </a>
                <ul class="c-sidebar__submenu collapse" id="sidebar-submenu_2">
                    <li><a class="c-sidebar__link" href="...">Add New</a></li> 
                    <li><a class="c-sidebar__link" href="...">Tax Table</a></li>        
                    <li><a class="c-sidebar__link" href="...">SSS Table</a></li>      
                    <li><a class="c-sidebar__link" href="...">Philhealth Table</a></li> 
                    <li><a class="c-sidebar__link" href="...">Pagibig Table</a></li>        

                </ul>
            </li>                
        </ul>  
    </div> 
</div>