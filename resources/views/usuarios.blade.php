<x-app-layout>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
            </ul>
            <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                    <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                    </div>
                </form>
                </div>
                <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                    <li>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Team review meeting at 3.00 PM
                        </label>
                    </div>
                    <i class="remove ti-close"></i>
                    </li>
                    <li>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Prepare for presentation
                        </label>
                    </div>
                    <i class="remove ti-close"></i>
                    </li>
                    <li>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Resolve all the low priority tickets due today
                        </label>
                    </div>
                    <i class="remove ti-close"></i>
                    </li>
                    <li class="completed">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Schedule meeting for next week
                        </label>
                    </div>
                    <i class="remove ti-close"></i>
                    </li>
                    <li class="completed">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Project review
                        </label>
                    </div>
                    <i class="remove ti-close"></i>
                    </li>
                </ul>
                </div>
                <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                <p class="text-gray mb-0">The total number of sessions</p>
                </div>
                <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
                </div>
            </div>
            <!-- To do section tab ends -->
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                </div>
                <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                    <div class="wrapper d-flex">
                        <p>Catherine</p>
                    </div>
                    <p>Away</p>
                    </div>
                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                    <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                    </div>
                    <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                    <p>Sarah Graves</p>
                    <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">47 min</small>
                </li>
                </ul>
            </div>
            <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <x-menu/>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <p class="card-title">Gestión de Usuarios</p>
                    <div class="row">
                        <div class="col-12">
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Codigo</th>
                                    <th>UserName</th>
                                    <th>Nombre</th>
                                    <th>Edad</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $key => $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->username}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->edad}}</td>
                                        <td>{{$item->telefono}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            <a class="btn btn-primary py-2" data-toggle="collapse" href="#collapse{{$key}}" role="button" aria-expanded="false" aria-controls="collapse{{$key}}">
                                                Detalle
                                            </a>                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="collapse" id="collapse{{$key}}" cellpadding="5" colspan="7">
                                            <table cellspacing="0" border="0" style="width:100%;">
                                                <tr class="expanded-row">
                                                    <td colspan="8" class="row-bg">
                                                        <div>
                                                            <div class="d-flex justify-content-between">
                                                                <div class="cell-hilighted">
                                                                    <div class="d-flex mb-2">
                                                                        <div class="mr-2 min-width-cell">
                                                                            <p>Policy start date</p>
                                                                            <h6>25/04/2020</h6>
                                                                        </div>
                                                                        <div class="min-width-cell">
                                                                            <p>Policy end date</p>
                                                                            <h6>24/04/2021</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex">
                                                                        <div class="mr-2 min-width-cell">
                                                                            <p>Sum insured</p>
                                                                            <h5>$26,000</h5>
                                                                        </div>
                                                                        <div class="min-width-cell">
                                                                            <p>Premium</p>
                                                                            <h5>$1200</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="expanded-table-normal-cell">
                                                                    <div class="mr-2 mb-4">
                                                                        <p>Quote no.</p>
                                                                        <h6>Incs234</h6>
                                                                    </div>
                                                                    <div class="mr-2">
                                                                        <p>Vehicle Reg. No.</p>
                                                                        <h6>KL-65-A-7004</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="expanded-table-normal-cell">
                                                                    <div class="mr-2 mb-4">
                                                                        <p>Policy number</p>
                                                                        <h6>Incsq123456</h6>
                                                                    </div>
                                                                    <div class="mr-2">
                                                                        <p>Policy number</p>
                                                                        <h6>Incsq123456</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="expanded-table-normal-cell">
                                                                    <div class="mr-2 mb-3 d-flex">
                                                                        <div class="highlighted-alpha"> A</div>
                                                                        <div>
                                                                            <p>Agent / Broker</p>
                                                                            <h6>Abcd Enterprices</h6>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-2 d-flex"> 
                                                                        <img src="../../images/faces/face5.jpg" alt="profile"/>
                                                                        <div>
                                                                            <p>Policy holder Name & ID Number</p>
                                                                            <h6>Phillip Harris / 1234567</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="expanded-table-normal-cell">
                                                                    <div class="mr-2 mb-4">
                                                                        <p>Branch</p>
                                                                        <h6>Koramangala, Bangalore</h6>
                                                                    </div>
                                                                </div>
                                                                <div class="expanded-table-normal-cell">
                                                                    <div class="mr-2 mb-4">
                                                                        <p>Channel</p>
                                                                        <h6>Online</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>                
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Registros</h4>
                        <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Pie chart</h4>
                        <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>   
            
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. Todos los derechos reservados.</span>
                </div>
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Hecho por <a href="https://grupotyg.pe/" target="_blank">Grupo TyG Ingenieros</a></span> 
                </div>
            </footer> 
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
</x-app-layout>