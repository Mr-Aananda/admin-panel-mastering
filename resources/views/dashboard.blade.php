@section('title', 'Dashboard')

<x-app-layout>
    <x-alert message="You are successfully logged in!" type="success" dismissable/>

     <div class="row g-3">
        <div class="col-md-3">
          <div class="widget summary">
            <div class="widget-body">
              <div class="icon">
                <i class="bi bi-heart"></i>
              </div>
              <div class="text">
                <h5>$58,947</h5>
                <p>Total Revenue</p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="widget summary-success">
            <div class="widget-body">
              <div class="icon">
                <i class="bi bi-cart2"></i>
              </div>
              <div class="text">
                <h5>127</h5>
                <p>Today's Sales</p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="widget summary-warning">
            <div class="widget-body">
              <div class="icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <div class="text">
                <h5>0.58%</h5>
                <p>Conversion</p>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="widget summary-danger">
            <div class="widget-body">
              <div class="icon">
                <i class="bi bi-eye"></i>
              </div>
              <div class="text">
                <h5>78.41k</h5>
                <p>Today's Visits</p>
              </div>
            </div>
          </div>
        </div>



        <div class="col-md-9">
          <div class="widget">
            <div class="widget-body">

              <h5 class="border-bottom">Line Chart</h5>
              <div id="lineChart"></div>

            </div>
          </div>
        </div>



        <div class="col-md-3">
          <div class="widget">
            <div class="widget-body">

              <h5 class="border-bottom">Donut Chart</h5>
              <div id="donutChart"></div>

            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="widget">
            <div class="widget-body">

              <h5 class="border-bottom mb-4">Calendar</h5>
              <div class="calendar">
                <button id="btnPrev" class="btn custom icon btn-prev" type="button"><i
                    class="bi bi-chevron-left"></i></button>
                <button id="btnNext" class="btn custom icon btn-next" type="button"><i
                    class="bi bi-chevron-right"></i></button>
                <div id="divCal" class="divCal"></div>
              </div>

            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="widget">
            <div class="widget-body">

              <h5 class="border-bottom mb-4">calculator</h5>
              <div class="calculator">
                <form name="form">
                  <input type="text" placeholder="0" class="form-control" name="distpay" autofocus>
                  <div class="button-area">
                    <div class="line">
                      <button type="button" value="%" class="btn" onclick="calculator(this.value)">%</button>
                      <button type="button" value="c" class="btn" onclick="distpay.value = null">c</button>
                      <button type="button" value="back" class="btn"
                        onclick="distpay.value = distpay.value.slice(0, -1)"><i class="bi bi-backspace"></i></button>
                      <button type="button" value="/" class="btn" onclick="calculator(this.value)">÷</button>
                    </div>

                    <div class="line">
                      <button type="button" value="7" class="btn" onclick="calculator(this.value)">7</button>
                      <button type="button" value="8" class="btn" onclick="calculator(this.value)">8</button>
                      <button type="button" value="9" class="btn" onclick="calculator(this.value)">9</button>
                      <button type="button" value="*" class="btn" onclick="calculator(this.value)">×</button>
                    </div>

                    <div class="line">
                      <button type="button" value="4" class="btn" onclick="calculator(this.value)">4</button>
                      <button type="button" value="5" class="btn" onclick="calculator(this.value)">5</button>
                      <button type="button" value="6" class="btn" onclick="calculator(this.value)">6</button>
                      <button type="button" value="-" class="btn" onclick="calculator(this.value)">-</button>
                    </div>

                    <div class="line">
                      <button type="button" value="1" class="btn" onclick="calculator(this.value)">1</button>
                      <button type="button" value="2" class="btn" onclick="calculator(this.value)">2</button>
                      <button type="button" value="3" class="btn" onclick="calculator(this.value)">3</button>
                      <button type="button" value="+" class="btn" onclick="calculator(this.value)">+</button>
                    </div>

                    <div class="line">
                      <button type="button" value="0" class="btn" onclick="calculator(this.value)">0</button>
                      <button type="button" value="00" class="btn" onclick="calculator(this.value)">00</button>
                      <button type="button" value="." class="btn" onclick="calculator(this.value)">.</button>
                      <button type="button" value="=" class="btn"
                        onclick="distpay.value = eval(distpay.value)">=</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>


      </div>

    @push('styles')
        <!-- C3 -->
    <link rel="stylesheet" href="{{vite_asset('resources/template/plugins/c3/c3.css')}}">

    @endpush

    @push('scripts')

        <!-- c3 js CDN -->
        <script src="{{vite_asset("resources/template/plugins/c3/c3.min.js")}}"></script>
        <script src="{{vite_asset("resources/template/plugins/c3/docs/js/d3-5.8.2.min.js")}}" charset="utf-8"></script>


        <script src="{{vite_asset("resources/template/js/calendar.js")}}"></script>
        <script src="{{vite_asset("resources/template/js/calculator.js")}}"></script>


        <script>
            // Start donutChart ======================>
            var chart = c3.generate({
            bindto: '#donutChart',

            data: {
                columns: [
                ['Banana', 44],
                ['Apple', 78],
                ['Orange', 34],
                ['Grape', 53],
                ['Pineapple', 23],
                ['Mango', 35],
                ],
                type: 'donut',
            },
            color: {
                pattern: ['#77BAE5', '#F68685', '#EC5051', '#6586A7', '#96D3C4', '#F4B264', '#F78CB8', '#7B879D', '#B76FD2', '#A2D6B2', '#D6C1C8', '#DF9F17', '#76D2A1']
            },
            donut: {
                title: "Iris Petal Width"
            }
            });
            // End donutChart ======================>


            // Start line chart =======================>
            var chart = c3.generate({
            bindto: '#lineChart',
            data: {
                columns: [
                ['Banana', 20, 15, 20, 35, 10, 100],
                ['Apple', 45, 65, 45, 34, 58, 23, 94],
                ['Orange', 47, 23, 100, 54, 67, 98, 23],
                ['Grape', 35, 23, 92, 67, 32, 100, 10],
                ['Pineapple', 20, 39, 23, 34, 23, 34, 90],
                ['Mango', 100, 70, 52, 78, 98, 67, 100]
                ],
                types: {
                Banana: 'spline',
                Apple: 'spline',
                Orange: 'spline',
                Grape: 'spline',
                Pineapple: 'spline',
                Mango: 'spline',
                }
            },
            color: {
                pattern: ['#77BAE5', '#F68685', '#EC5051', '#6586A7', '#96D3C4', '#F4B264', '#F78CB8', '#7B879D', '#B76FD2', '#A2D6B2', '#D6C1C8', '#DF9F17', '#76D2A1']
            },
            zoom: {
                enabled: true
            }
            });
        // End line chart =======================>
        </script>

    @endpush

    {{-- <div class="mt-5">
        <x-alert message="Shabbaash!! You are logged in!" type="success" dismissable/>

        <div class="row">
            @can('last_login_history')
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            Last login history
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Last Login</th>
                                    <th scope="col">Last Logout</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>TODO_LAST_LOGIN</td>
                                        <td>TODO_LAST_LOGOUT</td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            @endcan
        </div>
    </div> --}}
</x-app-layout>
