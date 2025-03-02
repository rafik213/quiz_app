<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title><?= lang('dashboard'); ?> | <?php echo (is_settings('app_name')) ? is_settings('app_name') : "" ?></title>

    <?php base_url() . include 'include.php'; ?>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <?php base_url() . include 'header.php'; ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1" style="border-radius: 10px; overflow: hidden; border: 1px solid #5e72e4;">
                                    <a href="<?= base_url(); ?>main-category" style="text-decoration: none;">
                                        <div style="display: flex; align-items: center; padding: 20px;">
                                            <div style="background-color: #5e72e4; border-radius: 8px; width: 54px; height: 54px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <em class="fas fa-cube" style="font-size: 24px; color: #ffffff;"></em>
                                            </div>
                                            <div class="card-wrap" style="flex: 1;">
                                                <div class="card-header" style="padding: 0; border: none;">
                                                    <h4 style="color: #32325d; font-size: 14px; margin-bottom: 5px;"><?= lang('categories'); ?></h4>
                                                </div>
                                                <div class="card-body" style="padding: 0; font-size: 24px; font-weight: 600; color: #32325d;"><?= $count_category; ?></div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <em class="fas fa-chevron-right" style="color: #8898aa;"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1" style="border-radius: 10px; overflow: hidden; border: 1px solid #fb6340;">
                                    <a href="<?= base_url(); ?>sub-category" style="text-decoration: none;">
                                        <div style="display: flex; align-items: center; padding: 20px;">
                                            <div style="background-color: #fb6340; border-radius: 8px; width: 54px; height: 54px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <em class="fas fa-cubes" style="font-size: 24px; color: #ffffff;"></em>
                                            </div>
                                            <div class="card-wrap" style="flex: 1;">
                                                <div class="card-header" style="padding: 0; border: none;">
                                                    <h4 style="color: #32325d; font-size: 14px; margin-bottom: 5px;"><?= lang('sub_categories'); ?></h4>
                                                </div>
                                                <div class="card-body" style="padding: 0; font-size: 24px; font-weight: 600; color: #32325d;"><?= $count_subcategory; ?></div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <em class="fas fa-chevron-right" style="color: #8898aa;"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1" style="border-radius: 10px; overflow: hidden; border: 1px solid #11cdef;">
                                    <a href="<?= base_url(); ?>manage-questions" style="text-decoration: none;">
                                        <div style="display: flex; align-items: center; padding: 20px;">
                                            <div style="background-color: #11cdef; border-radius: 8px; width: 54px; height: 54px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <em class="far fa-question-circle" style="font-size: 24px; color: #ffffff;"></em>
                                            </div>
                                            <div class="card-wrap" style="flex: 1;">
                                                <div class="card-header" style="padding: 0; border: none;">
                                                    <h4 style="color: #32325d; font-size: 14px; margin-bottom: 5px;"><?= lang('questions'); ?></h4>
                                                </div>
                                                <div class="card-body" style="padding: 0; font-size: 24px; font-weight: 600; color: #32325d;"><?= $count_question; ?></div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <em class="fas fa-chevron-right" style="color: #8898aa;"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1" style="border-radius: 10px; overflow: hidden; border: 1px solid #ffd600;">
                                    <a href="<?= base_url(); ?>contest" style="text-decoration: none;">
                                        <div style="display: flex; align-items: center; padding: 20px;">
                                            <div style="background-color: #ffd600; border-radius: 8px; width: 54px; height: 54px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <em class="fas fa-trophy" style="font-size: 24px; color: #ffffff;"></em>
                                            </div>
                                            <div class="card-wrap" style="flex: 1;">
                                                <div class="card-header" style="padding: 0; border: none;">
                                                    <h4 style="color: #32325d; font-size: 14px; margin-bottom: 5px;"><?= lang('live_contests'); ?></h4>
                                                </div>
                                                <div class="card-body" style="padding: 0; font-size: 24px; font-weight: 600; color: #32325d;"><?= $count_live_contest; ?></div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <em class="fas fa-chevron-right" style="color: #8898aa;"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1" style="border-radius: 10px; overflow: hidden; border: 1px solid #2dce89;">
                                    <a href="<?= base_url(); ?>fun-n-learn" style="text-decoration: none;">
                                        <div style="display: flex; align-items: center; padding: 20px;">
                                            <div style="background-color: #2dce89; border-radius: 8px; width: 54px; height: 54px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <em class="fas fa-graduation-cap" style="font-size: 24px; color: #ffffff;"></em>
                                            </div>
                                            <div class="card-wrap" style="flex: 1;">
                                                <div class="card-header" style="padding: 0; border: none;">
                                                    <h4 style="color: #32325d; font-size: 14px; margin-bottom: 5px;"><?= lang('fun_n_learn'); ?></h4>
                                                </div>
                                                <div class="card-body" style="padding: 0; font-size: 24px; font-weight: 600; color: #32325d;"><?= $count_fun_n_learn; ?></div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <em class="fas fa-chevron-right" style="color: #8898aa;"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1" style="border-radius: 10px; overflow: hidden; border: 1px solid #8965e0;">
                                    <a href="<?= base_url(); ?>guess-the-word" style="text-decoration: none;">
                                        <div style="display: flex; align-items: center; padding: 20px;">
                                            <div style="background-color: #8965e0; border-radius: 8px; width: 54px; height: 54px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                                <em class="far fa-lightbulb" style="font-size: 24px; color: #ffffff;"></em>
                                            </div>
                                            <div class="card-wrap" style="flex: 1;">
                                                <div class="card-header" style="padding: 0; border: none;">
                                                    <h4 style="color: #32325d; font-size: 14px; margin-bottom: 5px;"><?= lang('guess_the_word'); ?></h4>
                                                </div>
                                                <div class="card-body" style="padding: 0; font-size: 24px; font-weight: 600; color: #32325d;"><?= $count_guess_the_word; ?></div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <em class="fas fa-chevron-right" style="color: #8898aa;"></em>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6><?= lang('user_registration'); ?></h6>
                                            <select id="yearDropdown" class="form-control" style="width: auto;">
                                                <?php
                                                if (isset($years) && !empty($years)) {
                                                    foreach ($years as $year) {
                                                        $currentYear = 0;
                                                        if ($year != date('Y')) {
                                                ?> <option value="<?= $year ?>"> <?= $year ?></option>
                                                    <?php }
                                                    }
                                                    ?> <option value="<?= $year ?>" selected> <?= date('Y') ?></option> <?php
                                                                                                                    } else { ?>
                                                    <option value="<?= date('Y') ?>" selected> <?= date('Y') ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <ul class="nav nav-pills" id="myTab3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="day-tab3" data-toggle="tab" href="#day3" role="tab" aria-controls="day" aria-selected="true"><?= lang('day'); ?></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="week-tab3" data-toggle="tab" href="#week3" role="tab" aria-controls="week" aria-selected="false"><?= lang('week'); ?></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="month-tab3" data-toggle="tab" href="#month3" role="tab" aria-controls="month" aria-selected="false"><?= lang('month'); ?></a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent2">
                                            <div class="tab-pane fade  active show" id="day3" role="tabpanel" aria-labelledby="day-tab3">
                                                <canvas id="dayChart" height="100"></canvas>
                                            </div>
                                            <div class="tab-pane fade" id="week3" role="tabpanel" aria-labelledby="week-tab3">
                                                <canvas id="weekChart" height="100"></canvas>
                                            </div>
                                            <div class="tab-pane fade" id="month3" role="tabpanel" aria-labelledby="month-tab3">
                                                <canvas id="monthChart" height="100"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <?php base_url() . include 'footer.php'; ?>

    <script src="<?= base_url(); ?>assets/js/chart.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        <?php
        $mLable = $mData = array();
        foreach ($month_data as $mD) {
            $mLable[] = $mD->month_name;
            $mData[] = ($mD->user_count == NULL) ? 0 : (int) $mD->user_count;
        }
        $mName = json_encode($mLable);
        $mD = json_encode($mData);

        $wLable = $wData = array();
        foreach ($week_data as $wD) {
            $wLable[] = $wD->day_name;
            $wData[] = ($wD->user_count == NULL) ? 0 : (int) $wD->user_count;
        }
        $wName = json_encode($wLable);
        $wD = json_encode($wData);

        $dLable = $dData = array();
        foreach ($day_data as $dD) {
            $dLable[] = $dD->day_name;
            $dData[] = (int) $dD->user_count;
        }
        $dName = json_encode($dLable);
        $dD = json_encode($dData);

        // For day data
        $maxDayData = $dData ? max($dData) : 0;
        $stepSizeDay = $maxDayData > 10 ? round($maxDayData / 10) : 1; // Change 10 to the number of steps you want

        // For week data
        $maxWeekData = $wData ? max($wData) : 0;
        $stepSizeWeek = $maxWeekData > 10 ? round($maxWeekData / 10) : 1; // Change 10 to the number of steps you want

        // For month data
        $maxMonthData = $mData ? max($mData) : 0;
        $stepSizeMonth = $maxMonthData > 10 ? round($maxMonthData / 10) : 1; // Change 10 to the number of steps you want
        ?>

        var daytx = document.getElementById("dayChart").getContext('2d');
        var myChart = new Chart(daytx, {
            type: 'bar',
            data: {
                labels: <?= $dName; ?>,
                datasets: [{
                    label: 'Statistics',
                    data: <?= $dD ?>,
                    borderWidth: 2,
                    backgroundColor: '<?= $theme_color ?? "#f05387" ?>',
                    borderColor: '<?= $theme_color ?? "#f05387" ?>',
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: <?= $stepSizeDay ?>
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            display: true
                        },
                        gridLines: {
                            display: false
                        }
                    }]
                },
            }
        });

        var weektx = document.getElementById("weekChart").getContext('2d');
        var myChart = new Chart(weektx, {
            type: 'bar',
            data: {
                labels: <?= $wName; ?>,
                datasets: [{
                    label: 'Statistics',
                    data: <?= $wD ?>,
                    borderWidth: 2,
                    backgroundColor: '<?= $theme_color ?? "#f05387" ?>',
                    borderColor: '<?= $theme_color ?? "#f05387" ?>',
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: <?= $stepSizeWeek ?>
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            display: true
                        },
                        gridLines: {
                            display: false
                        }
                    }]
                },
            }
        });


        var monthtx = document.getElementById("monthChart").getContext('2d');
        var monthChartVar;
        monthChartVar = new Chart(monthtx, {
            type: 'bar',
            data: {
                labels: <?= $mName; ?>,
                datasets: [{
                    label: 'Statistics',
                    data: <?= $mD ?>,
                    borderWidth: 2,
                    backgroundColor: '<?= $theme_color ?? "#f05387" ?>',
                    borderColor: '<?= $theme_color ?? "#f05387" ?>',
                    pointBackgroundColor: '#ffffff',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: <?= $stepSizeMonth ?>
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            display: true
                        },
                        gridLines: {
                            display: false
                        }
                    }]
                },
            }
        });

        $(document).ready(function() {
            $("#yearDropdown").hide();
            $('#month-tab3').trigger('click');
        });
        $("#month-tab3").on('click', function() {
            $("#yearDropdown").show();
        });
        $("#week-tab3").on('click', function() {
            $("#yearDropdown").hide();
        });
        $("#day-tab3").on('click', function() {
            $("#yearDropdown").hide();
        });

        $("#yearDropdown").on("change", function() {
            var base_url = "<?php echo base_url(); ?>";
            let value = $(this).val();
            $.ajax({
                url: base_url + 'dashboard-year/' + value,
                type: "GET",
                success: function(response) {
                    response = JSON.parse((response));
                    var mName = response.mName;
                    var mD = response.mD;
                    var stepSizeMonth = response.stepSizeMonth

                    var monthtx = document.getElementById("monthChart").getContext('2d');
                    // If the chart exists, destroy it before creating a new one
                    if (monthChartVar) {
                        monthChartVar.destroy();
                    }
                    monthChartVar = new Chart(monthtx, {
                        type: 'bar',
                        data: {
                            labels: mName,
                            datasets: [{
                                label: 'Statistics',
                                data: mD,
                                borderWidth: 2,
                                backgroundColor: '<?= $theme_color ?? "#f05387" ?>',
                                borderColor: '<?= $theme_color ?? "#f05387" ?>',
                                pointBackgroundColor: '#ffffff',
                                pointRadius: 4
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        drawBorder: false,
                                        color: '#f2f2f2',
                                    },
                                    ticks: {
                                        beginAtZero: true,
                                        stepSize: stepSizeMonth
                                    }
                                }],
                                xAxes: [{
                                    ticks: {
                                        display: true
                                    },
                                    gridLines: {
                                        display: false
                                    }
                                }]
                            },
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>