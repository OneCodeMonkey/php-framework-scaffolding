<?php
// 抓取所有地区的80后90后数据
$str = '{"所有":{"所有":[""]},"安徽":{"所有":["34:1000"],"合肥":["34:1"],"芜湖":["34:2"],"蚌埠":["34:3"],"淮南":["34:4"],"马鞍山":["34:5"],"淮北":["34:6"],"铜陵":["34:7"],"安庆":["34:8"],"黄山":["34:10"],"滁州":["34:11"],"阜阳":["34:12"],"宿州":["34:13"],"巢湖":["34:14"],"六安":["34:15"],"亳州":["34:16"],"池州":["34:17"],"宣城":["34:18"]},"北京":{"所有":["11:1000"],"东城区":["11:1"],"西城区":["11:2"],"崇文区":["11:3"],"宣武区":["11:4"],"朝阳区":["11:5"],"丰台区":["11:6"],"石景山区":["11:7"],"海淀区":["11:8"],"门头沟区":["11:9"],"房山区":["11:11"],"通州区":["11:12"],"顺义区":["11:13"],"昌平区":["11:14"],"大兴区":["11:15"],"怀柔区":["11:16"],"平谷区":["11:17"],"密云县":["11:28"],"延庆县":["11:29"]},"重庆":{"所有":["50:1000"],"万州区":["50:1"],"涪陵区":["50:2"],"渝中区":["50:3"],"大渡口区":["50:4"],"江北区":["50:5"],"沙坪坝区":["50:6"],"九龙坡区":["50:7"],"南岸区":["50:8"],"北碚区":["50:9"],"万盛区":["50:10"],"双桥区":["50:11"],"渝北区":["50:12"],"巴南区":["50:13"],"黔江区":["50:14"],"长寿区":["50:15"],"綦江县":["50:22"],"潼南县":["50:23"],"铜梁县":["50:24"],"大足县":["50:25"],"荣昌县":["50:26"],"璧山县":["50:27"],"梁平县":["50:28"],"城口县":["50:29"],"丰都县":["50:30"],"垫江县":["50:31"],"武隆县":["50:32"],"忠县":["50:33"],"开县":["50:34"],"云阳县":["50:35"],"奉节县":["50:36"],"巫山县":["50:37"],"巫溪县":["50:38"],"石柱土家族自治县":["50:40"],"秀山土家族苗族自治县":["50:41"],"酉阳土家族苗族自治县":["50:42"],"彭水苗族土家族自治县":["50:43"],"江津区":["50:81"],"合川市":["50:82"],"永川区":["50:83"],"南川市":["50:84"]},"福建":{"所有":["35:1000"],"福州":["35:1"],"厦门":["35:2"],"莆田":["35:3"],"三明":["35:4"],"泉州":["35:5"],"漳州":["35:6"],"南平":["35:7"],"龙岩":["35:8"],"宁德":["35:9"]},"甘肃":{"所有":["62:1000"],"兰州":["62:1"],"嘉峪关":["62:2"],"金昌":["62:3"],"白银":["62:4"],"天水":["62:5"],"武威":["62:6"],"张掖":["62:7"],"平凉":["62:8"],"酒泉":["62:9"],"庆阳":["62:10"],"定西":["62:24"],"陇南":["62:26"],"临夏":["62:29"],"甘南":["62:30"]},"广东":{"所有":["44:1000"],"广州":["44:1"],"韶关":["44:2"],"深圳":["44:3"],"珠海":["44:4"],"汕头":["44:5"],"佛山":["44:6"],"江门":["44:7"],"湛江":["44:8"],"茂名":["44:9"],"肇庆":["44:12"],"惠州":["44:13"],"梅州":["44:14"],"汕尾":["44:15"],"河源":["44:16"],"阳江":["44:17"],"清远":["44:18"],"东莞":["44:19"],"中山":["44:20"],"潮州":["44:51"],"揭阳":["44:52"],"云浮":["44:53"]},"广西":{"所有":["45:1000"],"南宁":["45:1"],"柳州":["45:2"],"桂林":["45:3"],"梧州":["45:4"],"北海":["45:5"],"防城港":["45:6"],"钦州":["45:7"],"贵港":["45:8"],"玉林":["45:9"],"百色":["45:10"],"贺州":["45:11"],"河池":["45:12"],"来宾":["45:13"],"崇左":["45:14"]},"贵州":{"所有":["52:1000"],"贵阳":["52:1"],"六盘水":["52:2"],"遵义":["52:3"],"安顺":["52:4"],"铜仁":["52:22"],"黔西南":["52:23"],"毕节":["52:24"],"黔东南":["52:26"],"黔南":["52:27"]},"海南":{"所有":["46:1000"],"海口":["46:1"],"三亚":["46:2"],"其他":["46:90"]},"河北":{"所有":["13:1000"],"石家庄":["13:1"],"唐山":["13:2"],"秦皇岛":["13:3"],"邯郸":["13:4"],"邢台":["13:5"],"保定":["13:6"],"张家口":["13:7"],"承德":["13:8"],"沧州":["13:9"],"廊坊":["13:10"],"衡水":["13:11"]},"黑龙江":{"所有":["23:1000"],"哈尔滨":["23:1"],"齐齐哈尔":["23:2"],"鸡西":["23:3"],"鹤岗":["23:4"],"双鸭山":["23:5"],"大庆":["23:6"],"伊春":["23:7"],"佳木斯":["23:8"],"七台河":["23:9"],"牡丹江":["23:10"],"黑河":["23:11"],"绥化":["23:12"],"大兴安岭":["23:27"]},"河南":{"所有":["41:1000"],"郑州":["41:1"],"开封":["41:2"],"洛阳":["41:3"],"平顶山":["41:4"],"安阳":["41:5"],"鹤壁":["41:6"],"新乡":["41:7"],"焦作":["41:8"],"濮阳":["41:9"],"许昌":["41:10"],"漯河":["41:11"],"三门峡":["41:12"],"南阳":["41:13"],"商丘":["41:14"],"信阳":["41:15"],"周口":["41:16"],"驻马店":["41:17"]},"湖北":{"所有":["42:1000"],"武汉":["42:1"],"黄石":["42:2"],"十堰":["42:3"],"宜昌":["42:5"],"襄阳":["42:6"],"鄂州":["42:7"],"荆门":["42:8"],"孝感":["42:9"],"荆州":["42:10"],"黄冈":["42:11"],"咸宁":["42:12"],"随州":["42:13"],"恩施土家族苗族自治州":["42:28"]},"湖南":{"所有":["43:1000"],"长沙":["43:1"],"株洲":["43:2"],"湘潭":["43:3"],"衡阳":["43:4"],"邵阳":["43:5"],"岳阳":["43:6"],"常德":["43:7"],"张家界":["43:8"],"益阳":["43:9"],"郴州":["43:10"],"永州":["43:11"],"怀化":["43:12"],"娄底":["43:13"],"湘西土家族苗族自治州":["43:31"]},"内蒙古":{"所有":["15:1000"],"呼和浩特":["15:1"],"包头":["15:2"],"乌海":["15:3"],"赤峰":["15:4"],"通辽":["15:5"],"鄂尔多斯":["15:6"],"呼伦贝尔":["15:7"],"兴安盟":["15:22"],"锡林郭勒盟":["15:25"],"乌兰察布盟":["15:26"],"巴彦淖尔盟":["15:28"],"阿拉善盟":["15:29"]},"江苏":{"所有":["32:1000"],"南京":["32:1"],"无锡":["32:2"],"徐州":["32:3"],"常州":["32:4"],"苏州":["32:5"],"南通":["32:6"],"连云港":["32:7"],"淮安":["32:8"],"盐城":["32:9"],"扬州":["32:10"],"镇江":["32:11"],"泰州":["32:12"],"宿迁":["32:13"]},"江西":{"所有":["36:1000"],"南昌":["36:1"],"景德镇":["36:2"],"萍乡":["36:3"],"九江":["36:4"],"新余":["36:5"],"鹰潭":["36:6"],"赣州":["36:7"],"吉安":["36:8"],"宜春":["36:9"],"抚州":["36:10"],"上饶":["36:11"]},"吉林":{"所有":["22:1000"],"长春":["22:1"],"吉林":["22:2"],"四平":["22:3"],"辽源":["22:4"],"通化":["22:5"],"白山":["22:6"],"松原":["22:7"],"白城":["22:8"],"延边朝鲜族自治州":["22:24"]},"辽宁":{"所有":["21:1000"],"沈阳":["21:1"],"大连":["21:2"],"鞍山":["21:3"],"抚顺":["21:4"],"本溪":["21:5"],"丹东":["21:6"],"锦州":["21:7"],"营口":["21:8"],"阜新":["21:9"],"辽阳":["21:10"],"盘锦":["21:11"],"铁岭":["21:12"],"朝阳":["21:13"],"葫芦岛":["21:14"]},"宁夏":{"所有":["64:1000"],"银川":["64:1"],"石嘴山":["64:2"],"吴忠":["64:3"],"固原":["64:4"],"中卫":["64:5"]},"青海":{"所有":["63:1000"],"西宁":["63:1"],"海东":["63:21"],"海北":["63:22"],"黄南":["63:23"],"海南":["63:25"],"果洛":["63:26"],"玉树":["63:27"],"海西":["63:28"]},"山西":{"所有":["14:1000"],"太原":["14:1"],"大同":["14:2"],"阳泉":["14:3"],"长治":["14:4"],"晋城":["14:5"],"朔州":["14:6"],"晋中":["14:7"],"运城":["14:8"],"忻州":["14:9"],"临汾":["14:10"],"吕梁":["14:23"]},"山东":{"所有":["37:1000"],"济南":["37:1"],"青岛":["37:2"],"淄博":["37:3"],"枣庄":["37:4"],"东营":["37:5"],"烟台":["37:6"],"潍坊":["37:7"],"济宁":["37:8"],"泰安":["37:9"],"威海":["37:10"],"日照":["37:11"],"莱芜":["37:12"],"临沂":["37:13"],"德州":["37:14"],"聊城":["37:15"],"滨州":["37:16"],"菏泽":["37:17"]},"上海":{"所有":["31:1000"],"黄浦区":["31:1"],"卢湾区":["31:3"],"徐汇区":["31:4"],"长宁区":["31:5"],"静安区":["31:6"],"普陀区":["31:7"],"闸北区":["31:8"],"虹口区":["31:9"],"杨浦区":["31:10"],"闵行区":["31:12"],"宝山区":["31:13"],"嘉定区":["31:14"],"浦东新区":["31:15"],"金山区":["31:16"],"松江区":["31:17"],"青浦区":["31:18"],"南汇区":["31:19"],"奉贤区":["31:20"],"崇明县":["31:30"]},"四川":{"所有":["51:1000"],"成都":["51:1"],"自贡":["51:3"],"攀枝花":["51:4"],"泸州":["51:5"],"德阳":["51:6"],"绵阳":["51:7"],"广元":["51:8"],"遂宁":["51:9"],"内江":["51:10"],"乐山":["51:11"],"南充":["51:13"],"眉山":["51:14"],"宜宾":["51:15"],"广安":["51:16"],"达州":["51:17"],"雅安":["51:18"],"巴中":["51:19"],"资阳":["51:20"],"阿坝":["51:32"],"甘孜":["51:33"],"凉山":["51:34"]},"天津":{"所有":["12:1000"],"和平区":["12:1"],"河东区":["12:2"],"河西区":["12:3"],"南开区":["12:4"],"河北区":["12:5"],"红桥区":["12:6"],"塘沽区":["12:7"],"汉沽区":["12:8"],"大港区":["12:9"],"东丽区":["12:10"],"西青区":["12:11"],"津南区":["12:12"],"北辰区":["12:13"],"武清区":["12:14"],"宝坻区":["12:15"],"宁河县":["12:21"],"静海县":["12:23"],"蓟县":["12:25"]},"西藏":{"所有":["54:1000"],"拉萨":["54:1"],"昌都":["54:21"],"山南":["54:22"],"日喀则":["54:23"],"那曲":["54:24"],"阿里":["54:25"],"林芝":["54:26"]},"新疆":{"所有":["65:1000"],"乌鲁木齐":["65:1"],"克拉玛依":["65:2"],"吐鲁番":["65:21"],"哈密":["65:22"],"昌吉":["65:23"],"博尔塔拉":["65:27"],"巴音郭楞":["65:28"],"阿克苏":["65:29"],"克孜勒苏":["65:30"],"喀什":["65:31"],"和田":["65:32"],"伊犁":["65:40"],"塔城":["65:42"],"阿勒泰":["65:43"],"石河子":["65:44"]},"云南":{"所有":["53:1000"],"昆明":["53:1"],"曲靖":["53:3"],"玉溪":["53:4"],"保山":["53:5"],"昭通":["53:6"],"楚雄":["53:23"],"红河":["53:25"],"文山":["53:26"],"思茅":["53:27"],"西双版纳":["53:28"],"大理":["53:29"],"德宏":["53:31"],"丽江":["53:32"],"怒江":["53:33"],"迪庆":["53:34"],"临沧":["53:35"]},"浙江":{"所有":["33:1000"],"杭州":["33:1"],"宁波":["33:2"],"温州":["33:3"],"嘉兴":["33:4"],"湖州":["33:5"],"绍兴":["33:6"],"金华":["33:7"],"衢州":["33:8"],"舟山":["33:9"],"台州":["33:10"],"丽水":["33:11"]},"陕西":{"所有":["61:1000"],"西安":["61:1"],"铜川":["61:2"],"宝鸡":["61:3"],"咸阳":["61:4"],"渭南":["61:5"],"延安":["61:6"],"汉中":["61:7"],"榆林":["61:8"],"安康":["61:9"],"商洛":["61:10"]},"台湾":{"所有":["71:1000"],"台北":["71:1"],"高雄":["71:2"],"基隆":["71:3"],"台中":["71:4"],"台南":["71:5"],"新竹":["71:6"],"嘉义":["71:7"],"其他":["71:90"]},"香港":{"所有":["1:1000"],"香港":["1:1"]},"澳门":{"所有":["82:1000"],"澳门":["82:1"]},"海外":{"所有":["400:1000"],"美国":["400:1"],"英国":["400:2"],"法国":["400:3"],"俄罗斯":["400:4"],"加拿大":["400:5"],"巴西":["400:6"],"澳大利亚":["400:7"],"印尼":["400:8"],"泰国":["400:9"],"马来西亚":["400:10"],"新加坡":["400:11"],"菲律宾":["400:12"],"越南":["400:13"],"印度":["400:14"],"日本":["400:15"],"其他":["400:16"]},"其他":{"所有":["100:1000"]}}';
$arr = json_decode($str, true);
echo "<br/>";
$urlTemplate = 'https://s.weibo.com/user/&tag=90%E5%90%8E&auth=ord&region=custom:{}';
fopen("/root/simhash/mixed_regions_90hou_uids.txt", "w");
$fin = fopen("/root/simhash/mixed_regions_90hou_uids.txt", "a");
$count = 0;
foreach($arr as $k1 => $v1) {   // 省份
    $provinceCount = 0;
    foreach($v1 as $k2 => $v2) {    // 地区
        if($provinceCount >= 2000)
            break;
        $url = str_replace('{}', $v2[0], $urlTemplate);
        print_r("crawling url:" . $url . "<br/>");
        for($i = 1; $i <= 50; $i++) {
            if($provinceCount >= 2000)
                break;
            $urltemp = $url . "&page=" . strval($i);
            $html = file_get_contents($urltemp);
            $arr = explode("uid=", $html);
            foreach ($arr as $item) {
                if($provinceCount >= 2000)
                    break;
                $fansText = substr(explode("</a>", explode("user_fans\"", $item)[1])[0], 1);
//                print_r("fansNum:" . $fansText . PHP_EOL);
                if(is_numeric($fansText) && intval($fansText) < 2001) {
                    if (is_numeric(substr($item, 0, 10))) {
                        $count++;
                        $provinceCount++;
                        print_r("count:" . $count . "--");
                        fwrite($fin, strval(substr($item, 0, 10)));
                        fwrite($fin, "\r\n");
                    }
                }
//                if($count % 100 == 0) {
//                    for($i = $writePos; $i < $writePos + 100; $i++) {
//                        print_r(json_encode($uidResult) . PHP_EOL);
//
//                    }
//                    $writePos += 100;
//                }
            }
            sleep(rand(1,2));
        }
    }
}
fclose($fin);
echo "<br/>";
$urlTemplate2 = 'https://s.weibo.com/user/&tag=80%E5%90%8E&auth=ord&region=custom:{}';
fopen("/root/simhash/mixed_regions_80hou_uids.txt", "w");
$fin2 = fopen("/root/simhash/mixed_regions_80hou_uids.txt", "a");
$count2 = 0;
foreach($arr as $k1 => $v1) {
    $provinceCount = 0;
    foreach($v1 as $k2 => $v2) {
        if($provinceCount >= 2000)
            break;
        $url = str_replace('{}', $v2[0], $urlTemplate2);
        print_r("crawling url:" . $url . "<br/>");
        for($i = 1; $i <= 50; $i++) {
            if($provinceCount >= 2000)
                break;
            $urltemp = $url . "&page=" . strval($i);
            $html = file_get_contents($urltemp);
            $arr = explode("uid=", $html);
            foreach ($arr as $item) {
                if($provinceCount >= 2000)
                    break;
                $fansText = substr(explode("</a>", explode("user_fans\"", $item)[1])[0], 1);
                if(is_numeric($fansText) && intval($fansText) < 2001) {
                    if (is_numeric(substr($item, 0, 10))) {
                        $count++;
                        print_r("count:" . $count . "--");
                        fwrite($fin, strval(substr($item, 0, 10)));
                        fwrite($fin, "\r\n");
                    }
                }
//                if($count % 100 == 0) {
//                    for($i = $writePos; $i < $writePos + 100; $i++) {
//                        print_r(json_encode($uidResult) . PHP_EOL);
//
//                    }
//                    $writePos += 100;
//                }
            }
            sleep(rand(1,2));
        }
    }
}
fclose($fin2);
// 抓取所有地区的80后90后数据