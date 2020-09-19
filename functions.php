<?php 
    function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

function check_lot_endtime($in_end_time) {
    $dt_end = date_create($in_end_time);
    $dt_now = date_create("now");
    $dt_diff = date_diff($dt_end, $dt_now);
    $days_temp = date_interval_format($dt_diff, "%a");
    $days_count[] = date_interval_format($dt_diff, "%H");
    $days_count[] = date_interval_format($dt_diff, "%I");
    if($days_temp > 0){
        $days_count[0] += $days_temp * 24;
    }
    return $days_count;
}
 ?>