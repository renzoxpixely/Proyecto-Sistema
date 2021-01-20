<template>
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Escritorio</a></li>
    </ol>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="car-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h4>Ingresos</h4>
                            </div>
                            <div class="card-content">
                                <div class="ct-chart">
                                    <canvas id="ingresos">                                                
                                    </canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>Compras de los últimos meses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h4>Ventas</h4>
                            </div>
                            <div class="card-content">
                                <div class="ct-chart">
                                    <canvas id="ventas">                                                
                                    </canvas>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p>Ventas de los últimos meses.</p>
                            </div>
                        </div>
                    </div>



                </div>
        </div>
    </div>
</div>










   
   

    





<div class="container">
<div class="row">


        <div class="col-sm-6 col-lg-6">
                <div class="brand-card">
                  <div class="brand-card-header bg-dark text-white">
                   
                    <h1>Finanzas</h1>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-4" height="90"></canvas>
                    </div>
                  </div>
                          <div class="brand-card-body">
                              <table class="table">
                                 <thead>
                                    <tr>
                                      <th scope="col">FINANZAS</th>
                                      <th scope="col">ESTADO</th>
                                      <th scope="col">META</th>
                                      <th scope="col">SEM. ACTUAL</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">RENTABILIDAD NETA</th>
                                      <td class="bg-success">VERDE</td>
                                      <td>40 000</td>
                                      <td>30 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">FLUJO DE CAJA</th>
                                      <td class="bg-warning">NARANJA</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">CUENTAS X COBRAR</th>
                                      <td class="bg-danger">ROJO</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">GASTOS TOTALES</th>
                                      <td class="bg-success">VERDE</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                </div>
              </div>

              <div class="col-sm-6 col-lg-6">
                <div class="brand-card">
                  <div class="brand-card-header bg-primary text-white">
                   
                    <h1>Clientes</h1>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-4" height="90"></canvas>
                    </div>
                  </div>
                             <div class="brand-card-body">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                            <th scope="col">CLIENTES</th>
                                            <th scope="col">ESTADO</th>
                                            <th scope="col">META</th>
                                            <th scope="col">SEM. ACTUAL</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">VENTAS TOTALES</th>
                                            <td class="bg-success">VERDE</td>
                                            <td>40 000</td>
                                            <td>30 000</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">FIDELIDAD CLIENTE</th>
                                            <td class="bg-warning">NARANJA</td>
                                            <td>20 000</td>
                                            <td>15 000</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">IMAGEN CORPORATIVA</th>
                                            <td class="bg-danger">ROJO</td>
                                            <td>20 000</td>
                                            <td>15 000</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">PERSONAL CALIFICADO</th>
                                            <td class="bg-success">VERDE</td>
                                            <td>20 000</td>
                                            <td>15 000</td>
                                          </tr>
                                    </tbody>
                                      </table>
                              </div>
                </div>
              </div>



             <div class="col-sm-6 col-lg-6 ">
                <div class="brand-card">
                  <div class="brand-card-header bg-success text-white">
                    <h1>Procesos</h1>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-3" height="90"></canvas>
                    </div>
                  </div>
                        <div class="brand-card-body">
                              <table class="table">
                                 <thead>
                                    <tr>
                                      <th scope="col">PROCESOS</th>
                                      <th scope="col">ESTADO</th>
                                      <th scope="col">META</th>
                                      <th scope="col">SEM. ACTUAL</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">LEAD TIME CLIENTE</th>
                                      <td class="bg-success">VERDE</td>
                                      <td>40 000</td>
                                      <td>30 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">"# MEJORAS APLICADA/MES"</th>
                                      <td class="bg-warning">NARANJA</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">PRODUCTO DEFECTUOSO</th>
                                      <td class="bg-danger">ROJO</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">PRODUCTIVIDAD</th>
                                      <td class="bg-success">VERDE</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                </div>
              </div>



              <div class="col-sm-6 col-lg-6">
                <div class="brand-card">
                  <div class="brand-card-header bg-linkedin text-white">
                    <h1>Recursos</h1>
                    <div class="chart-wrapper">
                      <canvas id="social-box-chart-3" height="90"></canvas>
                    </div>
                  </div>
                          <div class="brand-card-body">
                              <table class="table">
                                 <thead>
                                    <tr>
                                      <th scope="col">RECURSOS</th>
                                      <th scope="col">ESTADO</th>
                                      <th scope="col">META</th>
                                      <th scope="col">SEM. ACTUAL</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">ASISTENCIA Y PUNTUALIDAD</th>
                                      <td class="bg-success">VERDE</td>
                                      <td>40 000</td>
                                      <td>30 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">CLIMA LABORAL</th>
                                      <td class="bg-warning">NARANJA</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">TRABAJO EN EQUIPO</th>
                                      <td class="bg-danger">ROJO</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">PERSONAL CALIFICADO</th>
                                      <td class="bg-success">VERDE</td>
                                      <td>20 000</td>
                                      <td>15 000</td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                </div>
              </div>


   










</div>
</div>
</main>




</template>
<script>
    export default {
        data (){
            return {
                varIngreso:null,
                charIngreso:null,
                ingresos:[],
                varTotalIngreso:[],
                varMesIngreso:[], 
                
                varVenta:null,
                charVenta:null,
                ventas:[],
                varTotalVenta:[],
                varMesVenta:[],
            }
        },
        methods : {
            getIngresos(){
                let me=this;
                var url= '/dashboard';
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.ingresos = respuesta.ingresos;
                    //cargamos los datos del chart
                    me.loadIngresos();
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            getVentas(){
                let me=this;
                var url= '/dashboard';
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.ventas = respuesta.ventas;
                    //cargamos los datos del chart
                    me.loadVentas();
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            loadIngresos(){
                let me=this;
                me.ingresos.map(function(x){
                    me.varMesIngreso.push(x.mes);
                    me.varTotalIngreso.push(x.total);
                });
                me.varIngreso=document.getElementById('ingresos').getContext('2d');

                me.charIngreso = new Chart(me.varIngreso, {
                    type: 'bar',
                    data: {
                        labels: me.varMesIngreso,
                        datasets: [{
                            label: 'Ingresos',
                            data: me.varTotalIngreso,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 0.2)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            },
            loadVentas(){
                let me=this;
                me.ventas.map(function(x){
                    me.varMesVenta.push(x.mes);
                    me.varTotalVenta.push(x.total);
                });
                me.varVenta=document.getElementById('ventas').getContext('2d');

                me.charVenta = new Chart(me.varVenta, {
                    type: 'bar',
                    data: {
                        labels: me.varMesVenta,
                        datasets: [{
                            label: 'Ventas',
                            data: me.varTotalVenta,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 0.2)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            }
        },
        mounted() {
            this.getIngresos();
            this.getVentas();
        }
    }
</script>
