<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1"> Products Report
                    <!--begin::Separator-->
                    <span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <span class="text-muted fs-7 fw-bold mt-2">Home > Products > Report</span>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <!--begin::Primary button-->
                <a href="inventory.php " class="btn btn-sm btn-secondary">
                    <li class="fa fa-home "></li> &nbsp; Main
                </a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row mb-5">
                <div class="col-xl-4">
                    <div class="card card-bordered">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-12">
                                    <h3 class="card-title fw-bolder">
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
                                            </svg>
                                        </span> &nbsp; Products Graph
                                    </h3>
                                </div>
                            </div>
                            <div id="kt_apexcharts_1" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card card-bordered">
                        <div class="card-body">
                            <div class="row mb-5">
                                <div class="col-12">
                                    <h3 class="card-title fw-bolder">
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
                                            </svg>
                                        </span> &nbsp; Products Sold
                                    </h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded" id="product_stats_table">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                            <th>Product Name</th>
                                            <th>Product Code</th>
                                            <th>Category</th>
                                            <th class="min-w-100">Units Sold</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT pos_sales_products.product_id AS pos_sales_products_id , categories.category_name, products.id , products.product_name, products.product_code FROM products INNER JOIN pos_sales_products ON pos_sales_products.product_id = products.id INNER JOIN categories on categories.id = products.category_id GROUP BY pos_sales_products.product_id;";
                                        $result = $db_query_obj->sql_qury("$sql");

                                        if (!$result) {
                                            //error

                                        } else {
                                            //Inserted
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $prod_id = $row['pos_sales_products_id'];
                                                $sql_2 = "SELECT SUM(pos_sales_products.quantity) AS orders FROM pos_sales_products WHERE pos_sales_products.product_id =  $prod_id;";

                                                $result_2 = $db_query_obj->sql_qury("$sql_2");
                                                $orders = 0;

                                                if ($result_2) {
                                                    //Inserted
                                                    $row_2 = mysqli_fetch_assoc($result_2);
                                                    $orders = $row_2['orders'];
                                                }

                                                echo '<tr> 
                                                    <td><a class="fw-bolder" href="inventory.php?action=single_prod_stats&p_id=' . $row['id'] . '">' . $row['product_name'] . '</a></td>
                                                    <td>' . $row['product_code'] . '</td>
                                                    <td>' . $row['category_name'] . '</td>
                                                    <td class="fw-boldest text-danger">' . $orders . '</td>
                                                    </tr>
                                                ';
                                            }
                                        }


                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>



<script>
    // A $( document ).ready() block.
    $(document).ready(function() {
        $("#product_stats_table").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });

        var element = document.getElementById('kt_apexcharts_1');

        var height = parseInt(KTUtil.css(element, 'height'));
        var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
        var baseColor = KTUtil.getCssVariableValue('--bs-primary');
        var secondaryColor = KTUtil.getCssVariableValue('--bs-gray-300');
        var dangerColor = KTUtil.getCssVariableValue('--bs-danger');

        <?php
        $jsonData =  $inventory_obj->fetch_graph_data_products('product_categories');
        ?>





        if (!element) {
            return;
        }

        var options = {
            series: [{
                name: 'Units Sold',
                data: prod_data
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'bar',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['30%'],
                    endingShape: 'rounded'
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: prod_categories,
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px'
                },
                y: {
                    formatter: function(val) {
                        return val
                    }
                }
            },
            colors: [baseColor, dangerColor, secondaryColor],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();

    });
</script>