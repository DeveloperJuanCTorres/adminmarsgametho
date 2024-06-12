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
                    <p class="card-title">Lista de Juegos</p>
                    <div>
                        <button class="btn btn-primary" style="float: right;margin-top: -50px;">Añadir</button>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Juego</th>
                                    <th>Descripcion</th>
                                    <th>Imagen</th>
                                    <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($juegos->count()==0)
                                    <tr>
                                        <td colspan="5" class="text-center">No hay datos registrados</td>
                                    </tr>
                                    @endif
                                    @foreach($juegos as $key => $item)                                    
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->imagen}}</td>
                                        <td style="width: 250px;">
                                            <button class="btn btn-info py-2">Ver</button>  
                                            <button class="btn btn-primary py-2">Editar</button>              
                                            <button class="btn btn-secondary py-2">Eliminar</button>                               
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
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                        <div class="card-body">
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                    <div class="ml-xl-4 mt-3">
                                    <p class="card-title">Informe Detallado</p>
                                    <h1 class="text-primary">{{$juegos->count()}}</h1>
                                    <h3 class="font-weight-500 mb-xl-4 text-primary">Juegos</h3>
                                    <p class="mb-2 mb-xl-0">
                                        El número total de sesiones dentro del rango de fechas. Es el período en el que un usuario participa activamente en su sitio web, página o aplicación, etc.</p>
                                    </div>  
                                    </div>
                                <div class="col-md-12 col-xl-9">
                                    <div class="row">
                                    <div class="col-md-6 border-right">
                                        <div class="table-responsive mb-3 mb-md-0 mt-3">
                                        <table class="table table-borderless report-table">
                                            <tr>
                                            <td class="text-muted">Ajedrez</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 713</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Damas</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 583</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Bingo</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 924</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Serpiente</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 664</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Ludo</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 560</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Ocho Loco</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 793</h5></td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <canvas id="north-america-chart"></canvas>
                                        <div id="north-america-legend"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
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