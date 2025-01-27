<?php
define("S1","MID(simso,-1,1)");
define("S2","MID(simso,-2,1)");
define("S3","MID(simso,-3,1)");
define("S4","MID(simso,-4,1)");
define("S5","MID(simso,-5,1)");
define("S6","MID(simso,-6,1)");
define("S7","MID(simso,-7,1)");
define("S8","MID(simso,-8,1)");
define("S9","MID(simso,-9,1)");

define("S22","MID(simso,-2,2)");
define("S32","MID(simso,-3,2)");
define("S42","MID(simso,-4,2)");
define("S52","MID(simso,-5,2)");
define("S62","MID(simso,-6,2)");
define("S72","MID(simso,-7,2)");
define("S82","MID(simso,-8,2)");
define("S92","MID(simso,-9,2)");

define("S33","MID(simso,-3,3)");
define("S43","MID(simso,-4,3)");
define("S53","MID(simso,-5,3)");
define("S63","MID(simso,-6,3)");
define("S73","MID(simso,-7,3)");
define("S83","MID(simso,-8,3)");
define("S93","MID(simso,-9,3)");

define("S44","MID(simso,-4,4)");
define("S54","MID(simso,-5,4)");
define("S64","MID(simso,-6,4)");
define("S74","MID(simso,-7,4)");
define("S84","MID(simso,-8,4)");
define("S94","MID(simso,-9,4)");

define("R1","RIGHT(simso,1)");
define("R2","RIGHT(simso,2)");
define("R3","RIGHT(simso,3)");
define("R4","RIGHT(simso,4)");
define("R5","RIGHT(simso,5)");
define("R6","RIGHT(simso,6)");
define("R7","RIGHT(simso,7)");
define("R8","RIGHT(simso,8)");
define("R9","RIGHT(simso,9)");
define("R10","RIGHT(simso,10)");
define("L1","LEFT(simso,1)");
define("L2","LEFT(simso,2)");
define("L3","LEFT(simso,3)");
define("L4","LEFT(simso,4)");
define("L5","LEFT(simso,5)");
define("L6","LEFT(simso,6)");
define("L7","LEFT(simso,7)");
define("L8","LEFT(simso,8)");
define("L9","LEFT(simso,9)");

define("VIETTEL","viettel");
define("MOBI","mobifone");
define("VINA","vinaphone");
define("VIETNAM","vietnamobile");
define("GMOBILE","gmobile");
define("ITELECOM","itelecom");

define("SIM_DAC_BIET","sim-dac-biet");
define("SIM_LUC_QUY","sim-luc-quy");
define("SIM_TU_QUY","sim-tu-quy");
define("SIM_NGU_QUY","sim-ngu-quy");
define("SIM_TAM_HOA_DON","tam-hoa-don");
define("SIM_TAM_HOA_KEP","tam-hoa-kep");
define("SIM_TAXI","sim-taxi");
define("SIM_TAXI_HAI","sim-taxi-hai");
define("SIM_TAXI_BA","sim-taxi-ba");
define("SIM_TAXI_BON","sim-taxi-bon");
define("SIM_KEP","sim-kep");
define("SIM_LAP","sim-lap");
define("SIM_DAO","sim-dao");
define("SIM_DOI","sim-doi");
define("SIM_TIEN_DON","sim-tien-don");
define("SIM_TIEN_DOI","sim-tien-doi");
define("SIM_LOC_PHAT","sim-loc-phat");
define("SIM_THAN_TAI","sim-than-tai");
define("SIM_ONG_DIA","sim-ong-dia");
define("SIM_GANH","sim-ganh");
define("SIM_NAM_SINH","sim-nam-sinh");
define("DAU_SO_CO","dau-so-co");
define("SIM_KHUYEN_MAI","sim-khuyen-mai");

$sub="MID(simso";

//------------------------------------------------------------//
$loaiSim = array();

// 1. Đặc biệt
$loaiSim['sim-dac-biet']=R4." IN('1102','1368','4078','8910','8386','8683') || ".R6." IN('049053','151618')";

// 2. Lục Quý
$loaiSim['sim-luc-quy']=array($sub.",-1,1) = ".$sub.",-2,1)", $sub.",-3,1) =".$sub.",-4,1)", $sub.",-2,1) = ".$sub.",-3,1)", $sub.",-4,1) = ".$sub.",-5,1)", $sub.",-5,1) = ".$sub.",-6,1)");

// 3. Ngũ Quý
$loaiSim['sim-ngu-quy']=array($sub.",-1,1) = ".$sub.",-2,1)", $sub.",-3,1) =".$sub.",-4,1)", $sub.",-2,1) = ".$sub.",-3,1)", $sub.",-4,1) = ".$sub.",-5,1)", $sub.",-5,1) != ".$sub.",-6,1)");

// 4. Tứ Quý
$loaiSim['sim-tu-quy']=array($sub.",-1,1) = ".$sub.",-2,1)", $sub.",-3,1) =".$sub.",-4,1)", $sub.",-2,1) = ".$sub.",-3,1)", $sub.",-4,1) != ".$sub.",-5,1)");

// 5. Tam Hoa Đơn
$loaiSim['tam-hoa-don']=S1."=".S2." and ".S2."=".S3." AND ".S3."!=".S4." AND (".S6."!=".S5." || ".S6."!=".S4.")";

// 6. Tam Hoa kép
$loaiSim['tam-hoa-kep']=array($sub.",-4,1)!=".$sub.",-3,1)",$sub.",-6,2)=".$sub.",-5,2)",$sub.",-3,2)=".$sub.",-2,2)");

// 7. Taxi lặp 2
$loaiSim['sim-taxi-hai']=S62."=".S42." AND ".S62."=".S22." AND ".S6."!=".S5;

// 8. Taxi lap 3 No Sup
$loaiSim['sim-taxi-ba']="(".S6."!=".S5." || ".S6."!=".S4.") AND ".S63."=".S33;

// 9. Taxi lap 4 No Sup
$loaiSim['sim-taxi-bon']=array($sub.",-4,4)=".$sub.",-8,4)","(".$sub.",-1,1)!=".$sub.",-2,1) || ".$sub.",-1,1)!=".$sub.",-3,1) || ".$sub.",-1,1)!=".$sub.",-4,1))",$sub.",-2,2)!=".$sub.",-4,2)");

// 10. Số kép
$loaiSim['sim-kep']=S4."=".S3." AND ".S4."!=".S2." AND ".S2."=".S1;

// 11. Số lặp
$loaiSim['sim-lap']=array($sub.",-1,1) = ".$sub.",-3,1)",$sub.",-2,1) = ".$sub.",-4,1)",$sub.",-1,1)!=".$sub.",-2,1)",$sub.",-4,2) != ".$sub.",-6,2)");

// 12.Sim dao
$loaiSim['sim-dao']=array($sub.",-1,1)!=".$sub.",-2,1)",$sub.",-4,1)=".$sub.",-1,1)",$sub.",-2,1)=".$sub.",-3,1)");

//13. Sim doi
$loaiSim['sim-doi']="(".S6."!=".S5." AND ".S6."!=".S4." AND ".S5."!=".S4." AND ".S6."=".S1." AND ".S5."=".S2." AND ".S4."=".S3.")";

 // 14 .sim tien don
$loaiSim['sim-tien-don']="(".S1."-1 =".S2." AND ".S2." -1 =".S3." AND ".S3." -1 != ".S4.") || (".S1." -1 =".S2." AND ".S2." -1 =".S3." AND ".S3." -1 =".S4." AND ".S4." -1 !=".S5.") || (".S1." -1 =".S2." AND ".S2." -1 =".S3." AND ".S3." -1 =".S4." AND ".S4." -1 =".S5.")";

// 15 .Tien doi
$loaiSim['sim-tien-doi']="((".S5."=".S3." AND ".S3."=".S1.") || (".S6."=".S4." AND ".S4."=".S2.")) AND (".S22." > ".S42." AND ".S42." > ".S62." AND ".S1."!=".S2.")";

// 16. Sim lộc phát
$loaiSim['sim-loc-phat']=array($sub.",-2,2) = 68 OR ".$sub.",-2,2 = 86)");

// 17. Sim Thần tài
$loaiSim['sim-than-tai']=array($sub.",-2,2) = 39 OR ".$sub.",-2,2) = 79");

// 18 Sim ông địa
$loaiSim['sim-ong-dia']=$sub.",-2,2) IN('78','38')";

// 19. Số gánh
$loaiSim['sim-ganh']="(".S1."=".S3." AND ".S1."!=".S2." AND ".S33."!=".S63." AND ".S73."!=".S33." AND ".S22."!=".S42." AND ".S5."!=".S3.")";

// 20. Sim năm sinh
$loaiSim['sim-nam-sinh']=array($sub.",-4,4) > ".(date('Y')-50),$sub.",-4,4) < ".date('Y'));

// 21. Sim đầu số cổ
$loaiSim['dau-so-co']="(left(simso,3) IN(091,090,098,097))";

// 22. Sim khuyến mãi
$loaiSim['sim-khuyen-mai']="(goicuoc IS NOT NULL)";

// 23. Sim taxi
$loaiSim['sim-taxi'] = $loaiSim['sim-taxi-hai']." OR ".$loaiSim['sim-taxi-ba']." OR ".$loaiSim['sim-taxi-bon'][0];

// Menu con các loại sim
$menuLoaiSim = array();

// 1. Đặc biệt
$menuLoaiSim['sim-dac-biet']= array(115);

// 2. Lục Quý
$menuLoaiSim['sim-luc-quy']= array(106);

// 3. Ngũ Quý
$menuLoaiSim['sim-ngu-quy']= array(114);

// 4. Tứ Quý
$menuLoaiSim['sim-tu-quy']= array(109);

// 5. Tam Hoa Đơn
$menuLoaiSim['tam-hoa-don']= array(111);

// 6. Tam Hoa kép
$menuLoaiSim['tam-hoa-kep']= array(29);

// 7. Taxi
$menuLoaiSim['sim-taxi']= array(123);

// 8. Taxi lap 3 No Sup
$menuLoaiSim['sim-taxi-hai']= array(123);

// 8. Taxi lap 3 No Sup
$menuLoaiSim['sim-taxi-ba']= array(123);

// 9. Taxi lap 4 No Sup
$menuLoaiSim['sim-taxi-bon']= array(123);

// 10. Số kép
$menuLoaiSim['sim-kep']= array(29);

// 11. Số lặp
$menuLoaiSim['sim-lap']= array(29);

// 12.Sim dao
$menuLoaiSim['sim-dao']= array(29);

 //13. Sim doi
$menuLoaiSim['sim-doi']= array(29);

 // 14 .sim tien don
$menuLoaiSim['sim-tien-don']= array(112);

// 15 .Tien doi
$menuLoaiSim['sim-tien-doi']= array(29);

// 16. Sim lộc phát
$menuLoaiSim['sim-loc-phat']= array(108);

// 17. Sim Thần tài
$menuLoaiSim['sim-than-tai']= array(107);

// 18 Sim ông địa
$menuLoaiSim['sim-ong-dia']= array(110);

// 19. Số gánh
$menuLoaiSim['sim-ganh']= array(29);

// 20. Sim năm sinh
$menuLoaiSim['sim-nam-sinh']= array(113);

// 21. Sim đầu số cổ
$menuLoaiSim['dau-so-co']= array(106);

// 21. Sim đầu số cổ
$menuLoaiSim['sim-khuyen-mai']= array(122);

// Nhà mạng
$nhaMang = array();

$nhaMang['viettel'] = "(LEFT(`simso`,3) IN ('086', '096', '097', '098', '032', '033', '034', '035', '036', '037', '038', '039'))";

$nhaMang['mobifone'] = "(LEFT(`simso`,3) IN ('089', '090', '093', '070', '079', '077', '076', '078'))";

$nhaMang['vinaphone'] = "(LEFT(`simso`,3) IN ('091', '094', '083', '084', '085', '081', '082', '088'))";

$nhaMang['vietnamobile'] = "(LEFT(`simso`,3) IN ('092', '056', '058', '052'))";

$nhaMang['gmobile'] = "(LEFT(`simso`,3) IN ('099', '059'))";

$nhaMang['itelecom'] = "(LEFT(`simso`,3) = '087')";


function remove_character($so) {
    return preg_replace('/\D/', '', $so);
}

function getTenNhaMang($so = '', $lowercase = false) {
    $mang = array(
        '086' => 'Viettel',
        '096' => 'Viettel',
        '097' => 'Viettel',
        '098' => 'Viettel',
        '032' => 'Viettel',
        '033' => 'Viettel',
        '034' => 'Viettel',
        '035' => 'Viettel',
        '036' => 'Viettel',
        '037' => 'Viettel',
        '038' => 'Viettel',
        '039' => 'Viettel',
		'089' => 'Mobifone',
        '090' => 'Mobifone',
        '093' => 'Mobifone',
        '070' => 'Mobifone',
        '079' => 'Mobifone',
        '077' => 'Mobifone',
        '076' => 'Mobifone',
        '078' => 'Mobifone',
        '091' => 'Vinaphone',
        '094' => 'Vinaphone',
        '083' => 'Vinaphone',
        '084' => 'Vinaphone',
        '085' => 'Vinaphone',
        '081' => 'Vinaphone',
        '082' => 'Vinaphone',
        '088' => 'Vinaphone',
        '092' => 'Vietnamobile',
        '056' => 'Vietnamobile',
        '058' => 'Vietnamobile',
        '052' => 'Vietnamobile',
        '099' => 'Gmobile',
        '059' => 'Gmobile',
        '087' => 'iTelecom'
    );
    $so = remove_character($so);
    $dauSo = substr($so, 0, 3);
    $dauSo = (string)$dauSo;
    $tenMang = 'Không xác định';
    if (isset($mang[$dauSo])) {
        $tenMang = $mang[$dauSo];
    }
    return $lowercase ? strtolower($tenMang) : $tenMang;
}

function getLoaiSim($so = '', $goicuoc = '') {
    $sosim = str_replace(' ', '', str_replace('.', '', $so));

    $r1 = substr($sosim, -1, 1);
    $r2 = substr($sosim, -2, 1);
    $r3 = substr($sosim, -3, 1);
    $r4 = substr($sosim, -4, 1);
    $r5 = substr($sosim, -5, 1);
    $r6 = substr($sosim, -6, 1);
    $r7 = substr($sosim, -7, 1);
    $r8 = substr($sosim, -8, 1);
    $r22 = substr($sosim, -2, 2);
    $r33 = substr($sosim, -3, 3);
    $r63 = substr($sosim, -6, 3);
    $r22 = substr($sosim, -2, 2);
    $r42 = substr($sosim, -4, 2);
    $r62 = substr($sosim, -6, 2);

    if ($r1 == $r2 and $r2 == $r3 and $r3 == $r4 and $r4 == $r5 and $r5 == $r6 and $r6 ==
        $r7 and $r7 == $r8) {
        return "Sim bát quý";
    }

    if ($r1 == $r2 and $r2 == $r3 and $r3 == $r4 and $r4 == $r5 and $r5 == $r6 and $r6 ==
        $r7) {
        return "Sim thất quý";
    }


    if (($r1 == $r2 and $r2 == $r3 and $r3 == $r4 and $r4 == $r5 and $r5 == $r6)
        || ($r2 == $r3 and $r3 == $r4 and $r4 == $r5 and $r5 == $r6 and $r6 == $r7)) {
        return "Sim lục quý";
    }

    if (($r1 == $r2 and $r2 == $r3 and $r3 == $r4 and $r4 == $r5)
        || ($r2 == $r3 and $r3 == $r4 and $r4 == $r5 and $r5 == $r6)
        || ($r3 == $r4 and $r4 == $r5 and $r5 == $r6 and $r6 == $r7)) {
        return "Sim ngũ quý";
    }

    if (($r1 == $r2 and $r2 == $r3 and $r3 == $r4)
        || ($r2 == $r3 and $r3 == $r4 and $r5 == $r6)) {
        return "Sim tứ quý";
    }

    if ($r1 == $r2 and $r2 == $r3) {
        return "Sim tam hoa";
    }

    if ($r22 == 86 || $r22 == 68) {
        return "Sim lộc phát";
    }

    if ($r22 == 39 || $r22 == 79) {
        return "Sim thần tài";
    }


    if ($r22 == 38 || $r22 == 78) {
        return "Sim ông địa";
    }

    if ($r33 == $r63 and $r3 != $r4) {
        return "Sim taxi";
    }

    if ($r22 == $r42 and $r42 == $r63 and $r1 != $r2) {
        return "Sim taxi";
    }

    if (in_array(substr($sosim, 0, 3), array(
        '091',
        '090',
        '098',
        '097'))) {
        return "Sim đầu cổ";
    }

    if ($r1 == $r2 and $r3 == $r4) {
        return "Sim kép";
    }

    if (substr($sosim, -4, 4) > (date('Y')-50) and substr($sosim, -4, 4) < date('Y')) {
        return "Sim năm sinh";
    }

    if ($r1 == $r6 and $r2 == $r5 and $r3 == $r4) {
        return "Sim đối";
    }

    if ($r1 == $r3 and $r2 == $r3) {
        return "Sim đảo";
    }
    if ($r42 == $r22 and $r1 != $r2) {
        return "Sim lặp";
    }

    if ($r1 == $r3) {
        return "Sim gánh";
    }

    
    if ($r1 > $r2 and $r2 > $r3) {
        return "Sim tiến đơn";
    }

    if (in_array(substr($sosim, -4, 4), ['1102', '4078', '8683', '8910', '1368'])) {
        return "Sim đặt biệt";
    }

    return "Sim số chọn";
}

function rebuild_date( $format, $time = 0 )
{
    if ( ! $time ) $time = time();

	$lang = array();
	$lang['sun'] = 'CN';
	$lang['mon'] = 'T2';
	$lang['tue'] = 'T3';
	$lang['wed'] = 'T4';
	$lang['thu'] = 'T5';
	$lang['fri'] = 'T6';
	$lang['sat'] = 'T7';
	$lang['sunday'] = 'Chủ nhật';
	$lang['monday'] = 'Thứ hai';
	$lang['tuesday'] = 'Thứ ba';
	$lang['wednesday'] = 'Thứ tư';
	$lang['thursday'] = 'Thứ năm';
	$lang['friday'] = 'Thứ sáu';
	$lang['saturday'] = 'Thứ bảy';
	$lang['january'] = 'Tháng Một';
	$lang['february'] = 'Tháng Hai';
	$lang['march'] = 'Tháng Ba';
	$lang['april'] = 'Tháng Tư';
	$lang['may'] = 'Tháng Năm';
	$lang['june'] = 'Tháng Sáu';
	$lang['july'] = 'Tháng Bảy';
	$lang['august'] = 'Tháng Tám';
	$lang['september'] = 'Tháng Chín';
	$lang['october'] = 'Tháng Mười';
	$lang['november'] = 'Tháng M. một';
	$lang['december'] = 'Tháng M. hai';
	$lang['jan'] = 'T01';
	$lang['feb'] = 'T02';
	$lang['mar'] = 'T03';
	$lang['apr'] = 'T04';
	$lang['may2'] = 'T05';
	$lang['jun'] = 'T06';
	$lang['jul'] = 'T07';
	$lang['aug'] = 'T08';
	$lang['sep'] = 'T09';
	$lang['oct'] = 'T10';
	$lang['nov'] = 'T11';
	$lang['dec'] = 'T12';

    $format = str_replace( "r", "D, d M Y H:i:s O", $format );
    $format = str_replace( array( "D", "M" ), array( "[D]", "[M]" ), $format );
    $return = date( $format, $time );

    $replaces = array(
        '/\[Sun\](\W|$)/' => $lang['sun'] . "$1",
        '/\[Mon\](\W|$)/' => $lang['mon'] . "$1",
        '/\[Tue\](\W|$)/' => $lang['tue'] . "$1",
        '/\[Wed\](\W|$)/' => $lang['wed'] . "$1",
        '/\[Thu\](\W|$)/' => $lang['thu'] . "$1",
        '/\[Fri\](\W|$)/' => $lang['fri'] . "$1",
        '/\[Sat\](\W|$)/' => $lang['sat'] . "$1",
        '/\[Jan\](\W|$)/' => $lang['jan'] . "$1",
        '/\[Feb\](\W|$)/' => $lang['feb'] . "$1",
        '/\[Mar\](\W|$)/' => $lang['mar'] . "$1",
        '/\[Apr\](\W|$)/' => $lang['apr'] . "$1",
        '/\[May\](\W|$)/' => $lang['may2'] . "$1",
        '/\[Jun\](\W|$)/' => $lang['jun'] . "$1",
        '/\[Jul\](\W|$)/' => $lang['jul'] . "$1",
        '/\[Aug\](\W|$)/' => $lang['aug'] . "$1",
        '/\[Sep\](\W|$)/' => $lang['sep'] . "$1",
        '/\[Oct\](\W|$)/' => $lang['oct'] . "$1",
        '/\[Nov\](\W|$)/' => $lang['nov'] . "$1",
        '/\[Dec\](\W|$)/' => $lang['dec'] . "$1",
        '/Sunday(\W|$)/' => $lang['sunday'] . "$1",
        '/Monday(\W|$)/' => $lang['monday'] . "$1",
        '/Tuesday(\W|$)/' => $lang['tuesday'] . "$1",
        '/Wednesday(\W|$)/' => $lang['wednesday'] . "$1",
        '/Thursday(\W|$)/' => $lang['thursday'] . "$1",
        '/Friday(\W|$)/' => $lang['friday'] . "$1",
        '/Saturday(\W|$)/' => $lang['saturday'] . "$1",
        '/January(\W|$)/' => $lang['january'] . "$1",
        '/February(\W|$)/' => $lang['february'] . "$1",
        '/March(\W|$)/' => $lang['march'] . "$1",
        '/April(\W|$)/' => $lang['april'] . "$1",
        '/May(\W|$)/' => $lang['may'] . "$1",
        '/June(\W|$)/' => $lang['june'] . "$1",
        '/July(\W|$)/' => $lang['july'] . "$1",
        '/August(\W|$)/' => $lang['august'] . "$1",
        '/September(\W|$)/' => $lang['september'] . "$1",
        '/October(\W|$)/' => $lang['october'] . "$1",
        '/November(\W|$)/' => $lang['november'] . "$1",
        '/December(\W|$)/' => $lang['december'] . "$1" );

    return preg_replace( array_keys( $replaces ), array_values( $replaces ), $return );
}

