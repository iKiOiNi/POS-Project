@extends('layout')

@section('content')
         <div class="page-wrapper">
            <div class="content">
               <div class="page-header">
                  <div class="page-title">
                  <h2>Dashboard</h4>
                  </div>
               </div>
                <div class="row" >
                    <div class="col-lg-8 col-sm-12 col-12 flex-wrap">
                       <div class="row w-100" >
                          <div  class="col-lg-6 col-sm-6 col-10">
                             <div class="dash-widget ">
                                <div class="dash-widgetcontent col-lg-10 col-sm-6 col-10">
                                   <h6>Total Income</h6>
                                   <h5>₱ <span class="counters" data-count="105380.00">₱105,380.00</span>
                                   </h5>
                                </div>

                             </div>
                          </div>
                          <div class="col-lg-6 col-sm-6 col-10">
                             <div class="dash-widget">
                                <div class="dash-widgetcontent col-lg-10 col-sm-6 col-10">
                                   <h6>Total Sales</h6>
                                   <h5>₱ <span class="counters" data-count="105380.00">₱105,380.00</span>
                                   </h5>
                                </div>

                             </div>
                          </div>
                        <div  class="col-lg-12 col-sm-6 col-10" >
                           <div class="card flex-fill" style="height: 480px;">
                              <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                 <h5 class="card-title mb-0">Revenue</h5>
                                 <div class="graph-sets">
                                    
                                    <div class="dropdown">
                                       <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                       2024 <img src="{{asset('img/icons/dropdown.svg')}}" alt="img" class="ms-2">
                                       </button>
                                       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <li>
                                             <a href="javascript:void(0);" class="dropdown-item">2024</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);" class="dropdown-item">2023</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <div class="h-250" id="flotBar1" style="height: 100%;"></div>
                              </div>
                           </div>
                        </div>
                       </div>
                      
                    </div>
                    <div class="col-lg-4 col-sm-12 col-12 d-flex">
                       <div class="card flex-fill">
                          <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                             <h2 class="card-title mb-0">Most Selling Items</h2>
                          </div>
                          <div>
                              <div style="padding: 25px;">
                                 <div class="row">
                                          <div class="table-responsive">
                                             <table class="table  datanew">
                                                <thead>
                                                   <tr>
                                                      
                                                      <th>Rank</th>
                                                      <th>Item</th>
                                                      <th>Sales</th>

                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>1</td>
                                                      <td class="productimgname">
                                                         <a href="javascript:void(0);" class="product-img">
                                                         <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                         </a>
                                                         <a href="javascript:void(0);">Jasmine Rice</a>
                                                      </td>
                                                      <td>₱ 85,380.00</td>
                                                   </tr>
                                                   <tr>
                                                      <td>2</td>
                                                      <td class="productimgname">
                                                         <a href="javascript:void(0);" class="product-img">
                                                         <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                         </a>
                                                         <a href="javascript:void(0);">Jasmine Rice</a>
                                                      </td>
                                                      <td>₱ 85,380.00</td>
                                                   </tr>
                                                   <tr>
                                                      <td>3</td>
                                                      <td class="productimgname">
                                                         <a href="javascript:void(0);" class="product-img">
                                                         <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                         </a>
                                                         <a href="javascript:void(0);">Jasmine Rice</a>
                                                      </td>
                                                      <td>₱ 85,380.00</td>
                                                   </tr>
                                                   <tr>
                                                      <td>4</td>
                                                      <td class="productimgname">
                                                         <a href="javascript:void(0);" class="product-img">
                                                         <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                         </a>
                                                         <a href="javascript:void(0);">Jasmine Rice</a>
                                                      </td>
                                                      <td>₱ 85,380.00</td>
                                                   </tr>
                                                   <tr>
                                                      <td>5</td>
                                                      <td class="productimgname">
                                                         <a href="javascript:void(0);" class="product-img">
                                                         <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                         </a>
                                                         <a href="javascript:void(0);">Jasmine Rice</a>
                                                      </td>
                                                      <td>₱ 85,380.00</td>
                                                   </tr>
                                                   <tr>
                                                      <td>6 </td>
                                                      <td class="productimgname">
                                                         <a href="javascript:void(0);" class="product-img">
                                                         <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                         </a>
                                                         <a href="javascript:void(0);">Jasmine Rice</a>
                                                      </td>
                                                      <td>₱ 85,380.00</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                 </div>
                              </div>
                          </div>
                       </div>
                    </div>
                </div>
               <div class="row" style="height: 480px;">
                  <div class="col-lg-7 col-sm-12 col-12 d-flex" >
                     <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                           <h5 class="card-title mb-0">Latest Item Sold</h5>
                           <div class="graph-sets">
                           </div>
                        </div>
                        <div>
                           <div style="padding: 25px;">
                              <div class="row">
                                       <div class="table-responsive">
                                          <table class="table  datanew">
                                             <thead>
                                                <tr>
                                                   
                                                   <th>SKU</th>
                                                   <th>Product Name</th>
                                                   <th>QTY</th>
                                                   <th>Amount</th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>1</td>
                                                   <td>₱ 52.00</td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>1</td>
                                                   <td>₱ 52.00</td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>1</td>
                                                   <td>₱ 52.00</td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>1</td>
                                                   <td>₱ 52.00</td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>1</td>
                                                   <td>₱ 52.00</td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>1</td>
                                                   <td>₱ 52.00</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                              </div>
                           </div>
                       </div>
                        <div class="card-body">
                           <div class="h-250" id="flotBar1" style="height: 100%;"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-sm-12 col-12 d-flex">
                     <div class="card flex-fill">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                           <h4 class="card-title mb-0">Critical Level</h4>
                           
                        </div>
                        <div>
                           <div style="padding: 25px;">
                              <div class="row">
                                       <div class="table-responsive">
                                          <table class="table  datanew">
                                             <thead>
                                                <tr>
                                                   
                                                   <th>SKU</th>
                                                   <th>Product Name</th>
                                                   <th>QTY on Hand</th>
                                                   <th>Critical Level</th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>10</td>
                                                   <td><span class="badges bg-lightyellow">2</span></td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>10</td>
                                                   <td><span class="badges bg-lightyellow">2</span></td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>10</td>
                                                   <td><span class="badges bg-lightyellow">2</span></td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>10</td>
                                                   <td><span class="badges bg-lightyellow">2</span></td>
                                                </tr>
                                                <tr>
                                                   <td>JR-1kg</td>
                                                   <td class="productimgname">
                                                      <a href="javascript:void(0);" class="product-img">
                                                      <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                      </a>
                                                      <a href="javascript:void(0);">Jasmine Rice</a>
                                                   </td>
                                                   <td>10</td>
                                                   <td><span class="badges bg-lightyellow">2</span></td>
                                                </tr>
                                                <tr>
                                                      <td>JR-1kg</td>
                                                      <td class="productimgname">
                                                         <a href="javascript:void(0);" class="product-img">
                                                         <img src="{{asset('img/product/noimage.png')}}" alt="product">
                                                         </a>
                                                         <a href="javascript:void(0);">Jasmine Rice</a>
                                                      </td>
                                                      <td>10</td>
                                                      <td><span class="badges bg-lightyellow">2</span></td>
                                                   </tr>
                                             </tbody>
                                          </table>
                                       </div>
                              </div>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>   
            </div>
         </div>
   </body>
</html>
@stop