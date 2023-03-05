<x-admin-layout>
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Orders
                                <small>Bigdeal Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Sales</li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Manage Order</h5>
                        </div>
                        <div class="card-body order-datatable">
                            <table class="display" id="basic-1">
                                <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Product</th>
                                    <th>Payment Status</th>
                                    <th>Payment Method</th>
                                    <th>Order Status</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#51240</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/1.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/2.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/3.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Dec 10,18</td>
                                    <td>$54671</td>
                                </tr>
                                <tr>
                                    <td>#51241</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/4.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/5.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Feb 15,18</td>
                                    <td>$2136</td>
                                </tr>
                                <tr>
                                    <td>#51242</td>
                                    <td><img src="{{ asset('assets/images/layout-1/product/6.jpg')}}" alt="" class="img-fluid img-30 me-2 "></td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Debit Card</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td>Mar 27,18</td>
                                    <td>$8791</td>
                                </tr>
                                <tr>
                                    <td>#51243</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/7.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/8.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Sep 1,18</td>
                                    <td>$139</td>
                                </tr>
                                <tr>
                                    <td>#51244</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/cosmetic/product/1.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/cosmetic/product/2.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>May 18,18</td>
                                    <td>$4678</td>
                                </tr>
                                <tr>
                                    <td>#51245</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/cosmetic/product/3.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/cosmetic/product/4.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/cosmetic/product/5.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Visa</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Jan 14,18</td>
                                    <td>$6791</td>
                                </tr>
                                <tr>
                                    <td>#51246</td>
                                    <td><img src="{{ asset('assets/images/cosmetic/product/6.jpg')}}" alt="" class="img-fluid img-30 me-2 "></td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td>Apr 22,18</td>
                                    <td>$976</td>
                                </tr>
                                <tr>
                                    <td>#51247</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/cosmetic/product/7.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/cosmetic/product/8.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Mar 26,18</td>
                                    <td>$3212</td>
                                </tr>
                                <tr>
                                    <td>#51248</td>
                                    <td><img src="{{ asset('assets/images/cosmetic/product/9.jpg')}}" alt="" class="img-fluid img-30 me-2 "></td>
                                    <td><img src="{{ asset('assets/images/cosmetic/product/10.jpg')}}" alt="" class="img-fluid img-30 me-2 "></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Feb 29,18</td>
                                    <td>$6719</td>
                                </tr>
                                <tr>
                                    <td>#51249</td>
                                    <td><img src="{{ asset('assets/images/cosmetic/product/11.jpg')}}" alt="" class="img-fluid img-30 me-2 "></td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-secondary">Processing</span></td>
                                    <td>Sep 2,18</td>
                                    <td>$9765</td>
                                </tr>
                                <tr>
                                    <td>#51250</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/cosmetic/product/12.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/cosmetic/product/13.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Dec 10,18</td>
                                    <td>$9706</td>
                                </tr>
                                <tr>
                                    <td>#51251</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/kids/product/1.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/kids/product/2.jpg')}}" alt="" class="img-fluid img-30 me-2 "> ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-secondary">Cash On Delivered</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Feb 15,18</td>
                                    <td>$1500</td>
                                </tr>
                                <tr>
                                    <td>#51252</td>
                                    <td>
                                        <img src="{{ asset('assets/images/kids/product/3.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Mar 27,18</td>
                                    <td>$18.97</td>
                                </tr>
                                <tr>
                                    <td>#51253</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/kids/product/4.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/kids/product/5.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/kids/product/6.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Visa</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Mar 30,18</td>
                                    <td>$3478</td>
                                </tr>
                                <tr>
                                    <td>#51254</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/kids/product/8.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/kids/product/9.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>0.80 %</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td>Apr 5,18</td>
                                    <td>$9672</td>
                                </tr>
                                <tr>
                                    <td>#51255</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/kids/product/10.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/kids/product/5.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-secondary">Cash On Delivered</span></td>
                                    <td>0.70 %</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Apr 8,18</td>
                                    <td>$59.76</td>
                                </tr>
                                <tr>
                                    <td>#51256</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/1.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/2.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/3.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Apr 12,18</td>
                                    <td>$37.60</td>
                                </tr>
                                <tr>
                                    <td>#51257</td>
                                    <td>
                                        <img src="{{ asset('assets/images/furniture1/product/1.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Apr 15,18</td>
                                    <td>$86.53</td>
                                </tr>
                                <tr>
                                    <td>#51258</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/4.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/5.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Apr 20,18</td>
                                    <td>$97.06</td>
                                </tr>
                                <tr>
                                    <td>#51259</td>
                                    <td><img src="{{ asset('assets/images/furniture1/product/6.jpg')}}" alt="" class="img-fluid img-30 me-2 "></td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-warning">processing</span></td>
                                    <td>Apr 24,18</td>
                                    <td>$16.78</td>
                                </tr>
                                <tr>
                                    <td>#51260</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/7.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/8.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Apr 27,18</td>
                                    <td>$86.00</td>
                                </tr>
                                <tr>
                                    <td>#51261</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/9.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/10.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/1.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>May 1,18</td>
                                    <td>$17.84</td>
                                </tr>
                                <tr>
                                    <td>#51262</td>
                                    <td><img src="{{ asset('assets/images/grocery/product/1.jpg')}}" alt="" class="img-fluid img-30 "></td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>May 8,18</td>
                                    <td>$35.07</td>
                                </tr>
                                <tr>
                                    <td>#51263</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/3.jpg')}}" alt="" class="img-fluid img-30 me-2">
                                            <img src="{{ asset('assets/images/layout-1/product/4.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Jun 4,18</td>
                                    <td>$5.67</td>
                                </tr>
                                <tr>
                                    <td>#51264</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/6.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/7.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-warning">processing</span></td>
                                    <td>Apr 30,18</td>
                                    <td>$6.134</td>
                                </tr>
                                <tr>
                                    <td>#51265</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/7.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/8.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/a1.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Jul 16,18</td>
                                    <td>$74.12</td>
                                </tr>
                                <tr>
                                    <td>#51266</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/a2.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/a3.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-secondary">Cash On Delivery</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Aug 25,18</td>
                                    <td>$16.70</td>
                                </tr>
                                <tr>
                                    <td>#51267</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/a4.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/a5.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/a6.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">paid</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Sep 7,18</td>
                                    <td>$9.706</td>
                                </tr>
                                <tr>
                                    <td>#51268</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/a7.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/a8.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Oct 19,18</td>
                                    <td>$67.04</td>
                                </tr>
                                <tr>
                                    <td>#51269</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/3.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/4.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/5.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Apr 12,18</td>
                                    <td>$867</td>
                                </tr>
                                <tr>
                                    <td>#51270</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/6.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 "><img src="{{ asset('assets/images/fashion/product/19.jpg')}}" alt="" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/7.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Sep 13,18</td>
                                    <td>$70.8</td>
                                </tr>
                                <tr>
                                    <td>#51271</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/8.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/9.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/furniture1/product/10.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td>Aug 24,18</td>
                                    <td>$70.41</td>
                                </tr>
                                <tr>
                                    <td>#51272</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-3/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-3/product/2.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Nov, 6,18</td>
                                    <td>$86.7</td>
                                </tr>
                                <tr>
                                    <td>#51273</td>
                                    <td><img src="{{ asset('assets/images/layout-1/product/8.jpg')}}" alt="" class="img-fluid img-30 me-2 "></td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Dec 17,18</td>
                                    <td>$19.47</td>
                                </tr>
                                <tr>
                                    <td>#51274</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-3/product/4.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-3/product/5.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-3/product/6.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Nov 29,18</td>
                                    <td>$7.48</td>
                                </tr>
                                <tr>
                                    <td>#51275</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-3/product/7.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-3/product/8.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-2/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Jan 11,18</td>
                                    <td>$8.67</td>
                                </tr>
                                <tr>
                                    <td>#51276</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-2/product/2.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-2/product/3.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td>Feb 12,18</td>
                                    <td>$8.607</td>
                                </tr>
                                <tr>
                                    <td>#51277</td>
                                    <td>
                                        <img src="{{ asset('assets/images/layout-2/product/4.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Apr 2,18</td>
                                    <td>$347</td>
                                </tr>
                                <tr>
                                    <td>#51278</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-2/product/5.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-2/product/6.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>May 5,18</td>
                                    <td>$100</td>
                                </tr>
                                <tr>
                                    <td>#51279</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-2/product/7.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-2/product/8.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-warning">processing</span></td>
                                    <td>Jun 8,18</td>
                                    <td>$546.01</td>
                                </tr>
                                <tr>
                                    <td>#51280</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/2.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/3.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Jan 19,18</td>
                                    <td>$7.154</td>
                                </tr>
                                <tr>
                                    <td>#51281</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/4.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/5.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/6.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Apr 30,18</td>
                                    <td>$58.47</td>
                                </tr>
                                <tr>
                                    <td>#51282</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/7.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/8.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Jun 6,18</td>
                                    <td>$370.0</td>
                                </tr>
                                <tr>
                                    <td>#51283</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-2/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-3/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-4/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td>Aug 10,18</td>
                                    <td>$9.76</td>
                                </tr>
                                <tr>
                                    <td>#51284</td>
                                    <td><img src="{{ asset('assets/images/layout-5/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 "></td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Sep 16,18</td>
                                    <td>$79.14</td>
                                </tr>
                                <tr>
                                    <td>#51285</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/cosmetic/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Jun 7,18</td>
                                    <td>$15.00</td>
                                </tr>
                                <tr>
                                    <td>#51286</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-1/product/3.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-2/product/4.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-3/product/5.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Apr 11,18</td>
                                    <td>$94.26</td>
                                </tr>
                                <tr>
                                    <td>#51287</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/layout-6/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/1.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Mar 26,18</td>
                                    <td>$78.86</td>
                                </tr>
                                <tr>
                                    <td>#51288</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/5.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                            <img src="{{ asset('assets/images/layout-1/product/4.jpg')}}" alt="pro-img" class="img-fluid img-30 me-2 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Jun 24,18</td>
                                    <td>$67.18</td>
                                </tr>
                                <tr>
                                    <td>#51289</td>
                                    <td>
                                        <img src="{{ asset('assets/images/furniture1/product/1.jpg')}}" alt="" class="img-fluid img-30 ">
                                    </td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td>Apr 12,18</td>
                                    <td>$96.71</td>
                                </tr>
                                <tr>
                                    <td>#51290</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/1.jpg')}}" alt="" class="img-fluid img-30 ">
                                            <img src="{{ asset('assets/images/furniture1/product/3.jpg')}}" alt="" class="img-fluid img-30 ">
                                            <img src="{{ asset('assets/images/furniture1/product/8.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Awaiting Authentication</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-warning">Processing</span></td>
                                    <td>Jul 20,18</td>
                                    <td>$86.7</td>
                                </tr>
                                <tr>
                                    <td>#51291</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/1.jpg')}}" alt="" class="img-fluid img-30 ">
                                            <img src="{{ asset('assets/images/furniture1/product/2.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Aug 9,18</td>
                                    <td>$867</td>
                                </tr>
                                <tr>
                                    <td>#51292</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/3.jpg')}}" alt="" class="img-fluid img-30 ">
                                            <img src="{{ asset('assets/images/furniture1/product/4.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Jan 10,18</td>
                                    <td>$16.78</td>
                                </tr>
                                <tr>
                                    <td>#51293</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/6.jpg')}}" alt="" class="img-fluid img-30 ">
                                            <img src="{{ asset('assets/images/furniture1/product/7.jpg')}}" alt="" class="img-fluid img-30 ">
                                            <img src="{{ asset('assets/images/furniture1/product/8.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Paypal</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Sep 5,18</td>
                                    <td>$57.14</td>
                                </tr>
                                <tr>
                                    <td>#51294</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/furniture1/product/9.jpg')}}" alt="" class="img-fluid img-30 ">
                                            <img src="{{ asset('assets/images/furniture1/product/10.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>Nov 16,18</td>
                                    <td>$74.45</td>
                                </tr>
                                <tr>
                                    <td>#51294</td>
                                    <td>
                                        <img src="{{ asset('assets/images/furniture1/product/2.jpg')}}" alt="" class="img-fluid img-30 ">
                                    </td>
                                    <td><span class="badge badge-danger">Payment Failed</span></td>
                                    <td>Master Card</td>
                                    <td><span class="badge badge-danger">Cancelled</span></td>
                                    <td>Apr 12,18</td>
                                    <td>$864</td>
                                </tr>
                                <tr>
                                    <td>#51295</td>
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('assets/images/cosmetic/product/2.jpg')}}" alt="" class="img-fluid img-30 ">
                                            <img src="{{ asset('assets/images/cosmetic/product/4.jpg')}}" alt="" class="img-fluid img-30 ">
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Paid</span></td>
                                    <td>Credit Card</td>
                                    <td><span class="badge badge-primary">Shipped</span></td>
                                    <td>Dec 19,18</td>
                                    <td>$19.78</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
</x-admin-layout>
