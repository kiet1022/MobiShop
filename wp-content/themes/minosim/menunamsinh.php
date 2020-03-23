
<?php
    if (strlen($namsinh) > 4) {
        $namsinh = substr($namsinh,-4);
    }
?>
<div class="card mb-3" style="border: 1px solid #ededed;">
    <div class="card-header text-white sim-type">
        <?php
            echo "Chọn tháng sinh của bạn trong năm $namsinh";
        ?>
    </div>
    <ul class="bg-dark filter-month">
        <?php
            for ($month = 1 ; $month <= 12; $month++) {
                if ($month == 1) {
                    echo "<li class=\"tablinks active\" onclick=\"openCity(event, 'month-$month')\"><a href=\"javascript:void(0)\">Tháng $month</a></li>";
                } else {
                    echo "<li class=\"tablinks\" onclick=\"openCity(event, 'month-$month')\"><a href=\"javascript:void(0)\">Tháng $month</a></li>";
                }
            }
        ?>
    </ul>
    <?php
        for($i = 1; $i <= 12; $i++) { ?>
        <ul class="tabcontent-month" style="<?php if($i == 1) {echo '';} else {echo 'display: none';} ?>" id="<?php echo 'month-'.$i; ?>">
            <?php 
                // Set timezone
                date_default_timezone_set('UTC');
                // Start date
                $date = "$namsinh-$i-01";
                // End date
                $lastDateOfMonth = date("Y-m-t", strtotime("$namsinh-$i-01"));
                $end_date = $lastDateOfMonth;
                global $wp;
                while (strtotime($date) <= strtotime($end_date)) { 
                    $dateDisplay = date_format(date_create($date), "d/m/Y");
                    $dateArr = (explode("/",$dateDisplay));
                    $dateUrl = join([$dateArr[0], $dateArr[1], substr($dateArr[2], -2)]);
                ?>
                <li class="sim-list"><a class="locduoiso" href="#" data-value="<?php echo $dateUrl; ?>">
                <?php echo "Ngày $dateDisplay";?>
                </a>
                </li>
                <?php
                    $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));     
                }
            ?>
            
        </ul>
    <?php
        }
    ?>

</div>
