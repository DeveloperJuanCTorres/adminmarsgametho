<x-app-layout>
    <div class="container-fluid page-body-wrapper">        
        <x-menu/>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <p class="card-title">Lista de Ventas</p>                    
                    <div class="row">
                        <div class="col-12">
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Usuario</th>
                                    <th>Email</th>
                                    <th>Monto</th>
                                    <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- if($juegos->count()==0) -->
                                    <tr>
                                        <td colspan="5" class="text-center">No hay datos registrados</td>
                                    </tr>
                                    <!-- endif -->
                                    <!-- foreach($juegos as $key => $item)                                    
                                    <tr>
                                        <td>$item->id</td>
                                        <td>$item->name</td>
                                        <td>$item->description</td>
                                        <td>$item->imagen</td>
                                        <td style="width: 250px;">
                                            <button class="btn btn-info py-2">Ver</button>  
                                            <button class="btn btn-primary py-2">Editar</button>              
                                            <button class="btn btn-secondary py-2">Eliminar</button>                               
                                        </td>
                                    </tr>
                                    endforeach -->
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
                                    <h1 class="text-primary">S/. 2,000</h1>
                                    <h3 class="font-weight-500 mb-xl-4 text-primary">en Total</h3>
                                    <p class="mb-2 mb-xl-0">
                                        El total de ventas hasta la fecha.</p>
                                    </div>  
                                    </div>
                                <div class="col-md-12 col-xl-9">
                                    <div class="row">
                                    <div class="col-md-6 border-right">
                                        <div class="table-responsive mb-3 mb-md-0 mt-3">
                                        <table class="table table-borderless report-table">
                                            <tr>
                                            <td class="text-muted">Lima</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 713</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">La Livertad</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 583</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Lambayeque</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 924</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Callao</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 664</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Piura</td>
                                            <td class="w-100 px-0">
                                                <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0">S/. 560</h5></td>
                                            </tr>
                                            <tr>
                                            <td class="text-muted">Cajamarca</td>
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
                                        <canvas id="ventas-tipo-plan"></canvas>
                                        <div id="ventas-tipo-plan-legend"></div>
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