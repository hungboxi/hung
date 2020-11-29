<!-- load file layout chung -->
<?php 
	$this->layoutPath = "layout.php";
 ?>
            <div id="page-wrapper">
                <div class="graphs">
                    <div class="col_3">
                        <div class="col-md-3 widget widget1">
                            <div class="r3_counter_box">
                                <i class="fa fa-mail-forward"></i>
                                <div class="stats">
                                  <h5>45 <span>%</span></h5>
                                  <div class="grow">
                                    <p>TĂNG</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 widget widget1">
                            <div class="r3_counter_box">
                                <i class="fa fa-users"></i>
                                <div class="stats">
                                  <h5>50 <span>%</span></h5>
                                  <div class="grow grow1">
                                    <p>LƯỢT XEM</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 widget widget1">
                            <div class="r3_counter_box">
                                <i class="fa fa-eye"></i>
                                <div class="stats">
                                  <h5>70 <span>%</span></h5>
                                  <div class="grow grow3">
                                    <p>NGƯỜI DÙNG</p>
                                  </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-3 widget">
                            <div class="r3_counter_box">
                                <i class="fa fa-usd"></i>
                                <div class="stats">
                                  <h5>70 <span>%</span></h5>
                                  <div class="grow grow2">
                                    <p>LỢI NHUẬN</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

            <!-- switches -->
        <div class="switches">
            <div class="col-4">
                <div class="col-md-4 switch-right">
                    <div class="switch-right-grid">
                        <div class="switch-right-grid1">
                            <h3>HÔM NAY</h3>
                            <p>Thực ra là nhiều hơn thế này.</p>
                            <ul>
                                <li>Bán được:10,000,000 đ</li>
                                <li>Mặt hàng: 122 loại</li>
                                <li>Giờ gần nhất: 100,000 đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sparkline">
                        <canvas id="line" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
                            <script>
                                    var lineChartData = {
                                        labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon"],
                                        datasets : [
                                            {
                                                fillColor : "#fff",
                                                strokeColor : "#F44336",
                                                pointColor : "#fbfbfb",
                                                pointStrokeColor : "#F44336",
                                                data : [20,35,45,30,10,65,40]
                                            }
                                        ]
                                        
                                    };
                                    new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
                            </script>
                    </div>
                </div>
                <div class="col-md-4 switch-right">
                    <div class="switch-right-grid">
                        <div class="switch-right-grid1">
                            <h3>HÀNG THÁNG</h3>
                            <p>Thực ra là nhiều hơn thế này.</p>
                            <ul>
                                <li>Bán được:100,000,000 đ</li>
                                <li>Mặt hàng: 1220 loại</li>
                                <li>Giờ gần nhất: 100,000 đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sparkline">
                        <canvas id="bar" height="150" width="480" style="width: 480px; height: 150px;"></canvas>
                            <script>
                                var barChartData = {
                                    labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon","Tue","Wed","Thu"],
                                    datasets : [
                                        {
                                            fillColor : "#8BC34A",
                                            strokeColor : "#8BC34A",
                                            data : [25,40,50,65,55,30,20,10,6,4]
                                        },
                                        {
                                            fillColor : "#8BC34A",
                                            strokeColor : "#8BC34A",
                                            data : [30,45,55,70,40,25,15,8,5,2]
                                        }
                                    ]
                                    
                                };
                                    new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
                            </script>
                    </div>
                </div>
                <div class="col-md-4 switch-right">
                    <div class="switch-right-grid">
                        <div class="switch-right-grid1">
                            <h3>TẤT CẢ</h3>
                            <p>Thực ra là nhiều hơn thế này.</p>
                            <ul>
                                <li>Bán được:1000,000,000 đ</li>
                                <li>Mặt hàng: 12200 loại</li>
                                <li>Giờ gần nhất: 1000,000 đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sparkline">
                        <!--graph-->
                        <link rel="stylesheet" href="css/graph.css">
                        <script src="../assets/backend/layout1/js/jquery.flot.min.js"></script>
                    <!--//graph-->
                            <script>
                                $(document).ready(function () {
                                
                                    // Graph Data ##############################################
                                    var graphData = [{
                                            // Returning Visits
                                            data: [ [4, 4500], [5,3500], [6, 6550], [7, 7600],[8, 4500], [9,3500], [10, 6550], ],
                                            color: '#FFCA28',
                                            points: { radius: 7, fillColor: '#fff' }
                                        }
                                    ];
                                
                                    // Lines Graph #############################################
                                    $.plot($('#graph-lines'), graphData, {
                                        series: {
                                            points: {
                                                show: true,
                                                radius: 1
                                            },
                                            lines: {
                                                show: true
                                            },
                                            shadowSize: 0
                                        },
                                        grid: {
                                            color: '#fff',
                                            borderColor: 'transparent',
                                            borderWidth: 10,
                                            hoverable: true
                                        },
                                        xaxis: {
                                            tickColor: 'transparent',
                                            tickDecimals: false
                                        },
                                        yaxis: {
                                            tickSize: 1200
                                        }
                                    });
                                
                                    // Graph Toggle ############################################
                                    $('#graph-bars').hide();
                                
                                    $('#lines').on('click', function (e) {
                                        $('#bars').removeClass('active');
                                        $('#graph-bars').fadeOut();
                                        $(this).addClass('active');
                                        $('#graph-lines').fadeIn();
                                        e.preventDefault();
                                    });
                                
                                    $('#bars').on('click', function (e) {
                                        $('#lines').removeClass('active');
                                        $('#graph-lines').fadeOut();
                                        $(this).addClass('active');
                                        $('#graph-bars').fadeIn().removeClass('hidden');
                                        e.preventDefault();
                                    });
                                
                                });
                            </script>
                            <div id="graph-wrapper">
                                <div class="graph-container">
                                    <div id="graph-lines"> </div>
                                    <div id="graph-bars"> </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //switches -->
        <div class="col_1">
            <div class="col-md-4 span_8">
                <div class="activity_box">
                    <h3>Hộp thư</h3>
                    <div class="scrollbar scrollbar1" id="style-2">
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Hoàng Duy</a></h5>
                                <p>Mày có bán không thế thằng ngu.</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Hoàng Duy</a></h5>
                                <p>Mày có bán không thế thằng ngu.</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Hoàng Duy</a></h5>
                                <p>Mày có bán không thế thằng ngu.</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Hoàng Duy</a></h5>
                                <p>Mày có bán không thế thằng ngu.</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/></div>
                            <div class="col-xs-7 activity-desc">
                                <h5><a href="#">Hoàng Duy</a></h5>
                                <p>Mày có bán không thế thằng ngu.</p>
                            </div>
                            <div class="col-xs-2 activity-desc1"><h6>13:40 PM</h6></div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 span_8">
                <div class="activity_box activity_box1">
                    <h3>Tin nhắn</h3>
                    <div class="scrollbar" id="style-2">
                        <div class="activity-row activity-row1">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/><span>10:00 PM</span></div>
                            <div class="col-xs-5 activity-img1">
                                <div class="activity-desc-sub">
                                    <h5>Hoàng Duy</h5>
                                    <p>Alo bán cho mình gói bim bim.</p>
                                </div>
                            </div>
                            <div class="col-xs-4 activity-desc1"></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row activity-row1">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/><span>11:00 PM</span></div>
                            <div class="col-xs-5 activity-img1">
                                <div class="activity-desc-sub">
                                    <h5>Hoàng Duy</h5>
                                    <p>alo không bán à. inbox không thấy trả lời.</p>
                                </div>
                            </div>
                            <div class="col-xs-4 activity-desc1"></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row activity-row1">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/><span>12:00 PM</span></div>
                            <div class="col-xs-5 activity-img1">
                                <div class="activity-desc-sub">
                                    <h5>Hoàng Duy</h5>
                                    <p>Mày có bán không thàng ngu.</p>
                                </div>
                            </div>
                            <div class="col-xs-4 activity-desc1"></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row activity-row1">
                            <div class="col-xs-2 activity-desc1"></div>
                            <div class="col-xs-7 activity-img2">
                                <div class="activity-desc-sub1">
                                    <h5>Hung Hic</h5>
                                    <p>Bán thằng cha mày. T có thông báo trên fanpage là sáng nay bận r thằng ngu này.</p>
                                </div>
                            </div>
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.jpg' class="img-responsive" alt=""/><span>10:02 PM</span></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row activity-row1">
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.png' class="img-responsive" alt=""/><span>10:00 PM</span></div>
                            <div class="col-xs-5 activity-img1">
                                <div class="activity-desc-sub">
                                    <h5>Hoàng Duy</h5>
                                    <p>Yeah fine!</p>
                                </div>
                            </div>
                            <div class="col-xs-4 activity-desc1"></div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="activity-row activity-row1">
                            <div class="col-xs-2 activity-desc1"></div>
                            <div class="col-xs-7 activity-img2">
                                <div class="activity-desc-sub1">
                                    <h5>Hung Hic</h5>
                                    <p>fine cmm. Không bán cho loại khách ngu l như m. Cút!</p>
                                </div>
                            </div>
                            <div class="col-xs-3 activity-img"><img src='../assets/backend/layout1/images/1.jpg' class="img-responsive" alt=""/><span>10:02 PM</span></div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <form>
                        <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                        <input type="submit" value="Send" required=""/>     
                    </form>
                </div>
            </div>
            <div class="col-md-4 span_8">
                <div class="activity_box activity_box2">
                    <h3>Nhiều hơn</h3>
                    <div class="scrollbar" id="style-2">
                        <div class="activity-row activity-row1">
                            <div class="single-bottom">
                                <ul>
                                    <li>
                                        <input type="checkbox"  id="brand" value="">
                                        <label for="brand"><span></span>Có lỗi và dịch vụ.</label>
                                    </li>
                                    <li>
                                        <input type="checkbox"  id="brand1" value="">
                                        <label for="brand1"><span></span> Không bán cho thằng Hoàng Duy</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <form>
                        <input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
                        <input type="submit" value="Submit" required=""/>       
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
            
        </div>
                </div>
            <!--body wrapper start-->
            </div>
             <!--body wrapper end-->
        </div>
