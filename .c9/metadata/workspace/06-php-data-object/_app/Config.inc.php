{"filter":false,"title":"Config.inc.php","tooltip":"/06-php-data-object/_app/Config.inc.php","undoManager":{"mark":60,"position":60,"stack":[[{"start":{"row":26,"column":16},"end":{"row":26,"column":17},"action":"insert","lines":["a"],"id":3}],[{"start":{"row":26,"column":17},"end":{"row":26,"column":18},"action":"insert","lines":["r"],"id":4}],[{"start":{"row":26,"column":18},"end":{"row":26,"column":19},"action":"insert","lines":["r"],"id":5}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":20},"action":"insert","lines":["a"],"id":6}],[{"start":{"row":26,"column":20},"end":{"row":26,"column":21},"action":"insert","lines":["y"],"id":7}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":[")"],"id":8}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"remove","lines":[")"],"id":9}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["("],"id":10}],[{"start":{"row":26,"column":22},"end":{"row":26,"column":23},"action":"remove","lines":["["],"id":11}],[{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"remove","lines":["]"],"id":12}],[{"start":{"row":26,"column":28},"end":{"row":26,"column":29},"action":"insert","lines":[")"],"id":13}],[{"start":{"row":40,"column":5},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":41,"column":0},"end":{"row":41,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":41,"column":4},"end":{"row":42,"column":0},"action":"insert","lines":["",""],"id":21},{"start":{"row":42,"column":0},"end":{"row":42,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":4},"end":{"row":59,"column":1},"action":"insert","lines":["// AUTO LOAD DE CLASSES ####################","function __autoload($Class) {","","    $cDir = ['Conn'];","    $iDir = null;","","    foreach ($cDir as $dirName):","        if (!$iDir && file_exists(__DIR__ . \"\\\\{$dirName}\\\\{$Class}.class.php\") && !is_dir(__DIR__ . \"\\\\{$dirName}\\\\{$Class}.class.php\")):","            include_once (__DIR__ . \"\\\\{$dirName}\\\\{$Class}.class.php\");","            $iDir = true;","        endif;","    endforeach;","","    if (!$iDir):","        trigger_error(\"Não foi possível incluir {$Class}.class.php\", E_USER_ERROR);","        die;","    endif;","}"],"id":22}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "],"id":23},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":7},"action":"insert","lines":["// "],"id":24},{"start":{"row":26,"column":4},"end":{"row":26,"column":7},"action":"insert","lines":["// "]},{"start":{"row":27,"column":4},"end":{"row":27,"column":7},"action":"insert","lines":["// "]},{"start":{"row":29,"column":4},"end":{"row":29,"column":7},"action":"insert","lines":["// "]},{"start":{"row":30,"column":4},"end":{"row":30,"column":7},"action":"insert","lines":["// "]},{"start":{"row":31,"column":4},"end":{"row":31,"column":7},"action":"insert","lines":["// "]},{"start":{"row":32,"column":4},"end":{"row":32,"column":7},"action":"insert","lines":["// "]},{"start":{"row":33,"column":4},"end":{"row":33,"column":7},"action":"insert","lines":["// "]},{"start":{"row":34,"column":4},"end":{"row":34,"column":7},"action":"insert","lines":["// "]},{"start":{"row":36,"column":4},"end":{"row":36,"column":7},"action":"insert","lines":["// "]},{"start":{"row":37,"column":4},"end":{"row":37,"column":7},"action":"insert","lines":["// "]},{"start":{"row":38,"column":4},"end":{"row":38,"column":7},"action":"insert","lines":["// "]},{"start":{"row":39,"column":4},"end":{"row":39,"column":7},"action":"insert","lines":["// "]},{"start":{"row":40,"column":4},"end":{"row":40,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":45,"column":16},"end":{"row":45,"column":17},"action":"remove","lines":["["],"id":25}],[{"start":{"row":45,"column":16},"end":{"row":45,"column":17},"action":"insert","lines":["a"],"id":26}],[{"start":{"row":45,"column":17},"end":{"row":45,"column":18},"action":"insert","lines":["r"],"id":27}],[{"start":{"row":45,"column":18},"end":{"row":45,"column":19},"action":"insert","lines":["r"],"id":28}],[{"start":{"row":45,"column":19},"end":{"row":45,"column":20},"action":"insert","lines":["a"],"id":29}],[{"start":{"row":45,"column":20},"end":{"row":45,"column":21},"action":"insert","lines":["y"],"id":30}],[{"start":{"row":45,"column":21},"end":{"row":45,"column":22},"action":"insert","lines":["("],"id":31}],[{"start":{"row":45,"column":28},"end":{"row":45,"column":29},"action":"remove","lines":["]"],"id":32}],[{"start":{"row":45,"column":28},"end":{"row":45,"column":29},"action":"insert","lines":[")"],"id":33}],[{"start":{"row":42,"column":4},"end":{"row":59,"column":5},"action":"remove","lines":["// AUTO LOAD DE CLASSES ####################","    function __autoload($Class) {","    ","        $cDir = array('Conn');","        $iDir = null;","    ","        foreach ($cDir as $dirName):","            if (!$iDir && file_exists(__DIR__ . \"\\\\{$dirName}\\\\{$Class}.class.php\") && !is_dir(__DIR__ . \"\\\\{$dirName}\\\\{$Class}.class.php\")):","                include_once (__DIR__ . \"\\\\{$dirName}\\\\{$Class}.class.php\");","                $iDir = true;","            endif;","        endforeach;","    ","        if (!$iDir):","            trigger_error(\"Não foi possível incluir {$Class}.class.php\", E_USER_ERROR);","            die;","        endif;","    }"],"id":34}],[{"start":{"row":42,"column":4},"end":{"row":43,"column":4},"action":"remove","lines":["","    "],"id":35}],[{"start":{"row":42,"column":4},"end":{"row":43,"column":0},"action":"remove","lines":["",""],"id":36}],[{"start":{"row":42,"column":4},"end":{"row":42,"column":8},"action":"remove","lines":["    "],"id":37}],[{"start":{"row":42,"column":4},"end":{"row":42,"column":5},"action":"remove","lines":["/"],"id":38}],[{"start":{"row":42,"column":4},"end":{"row":42,"column":5},"action":"insert","lines":["/"],"id":39}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":7},"action":"remove","lines":["// "],"id":40},{"start":{"row":26,"column":4},"end":{"row":26,"column":7},"action":"remove","lines":["// "]},{"start":{"row":27,"column":4},"end":{"row":27,"column":7},"action":"remove","lines":["// "]},{"start":{"row":29,"column":4},"end":{"row":29,"column":7},"action":"remove","lines":["// "]},{"start":{"row":30,"column":4},"end":{"row":30,"column":7},"action":"remove","lines":["// "]},{"start":{"row":31,"column":4},"end":{"row":31,"column":7},"action":"remove","lines":["// "]},{"start":{"row":32,"column":4},"end":{"row":32,"column":7},"action":"remove","lines":["// "]},{"start":{"row":33,"column":4},"end":{"row":33,"column":7},"action":"remove","lines":["// "]},{"start":{"row":34,"column":4},"end":{"row":34,"column":7},"action":"remove","lines":["// "]},{"start":{"row":36,"column":4},"end":{"row":36,"column":7},"action":"remove","lines":["// "]},{"start":{"row":37,"column":4},"end":{"row":37,"column":7},"action":"remove","lines":["// "]},{"start":{"row":38,"column":4},"end":{"row":38,"column":7},"action":"remove","lines":["// "]},{"start":{"row":39,"column":4},"end":{"row":39,"column":7},"action":"remove","lines":["// "]},{"start":{"row":40,"column":4},"end":{"row":40,"column":7},"action":"remove","lines":["// "]}],[{"start":{"row":33,"column":18},"end":{"row":34,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":34,"column":0},"end":{"row":34,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":34,"column":12},"end":{"row":34,"column":25},"action":"insert","lines":["$iDir = true;"],"id":42}],[{"start":{"row":34,"column":20},"end":{"row":34,"column":24},"action":"remove","lines":["true"],"id":43},{"start":{"row":34,"column":20},"end":{"row":34,"column":21},"action":"insert","lines":["f"]}],[{"start":{"row":34,"column":21},"end":{"row":34,"column":22},"action":"insert","lines":["a"],"id":44}],[{"start":{"row":34,"column":22},"end":{"row":34,"column":23},"action":"insert","lines":["l"],"id":45}],[{"start":{"row":34,"column":23},"end":{"row":34,"column":24},"action":"insert","lines":["s"],"id":46}],[{"start":{"row":34,"column":24},"end":{"row":34,"column":25},"action":"insert","lines":["e"],"id":47}],[{"start":{"row":33,"column":18},"end":{"row":34,"column":26},"action":"remove","lines":["","            $iDir = false;"],"id":48}],[{"start":{"row":81,"column":4},"end":{"row":81,"column":7},"action":"insert","lines":["// "],"id":49}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":7},"action":"insert","lines":["// "],"id":50},{"start":{"row":26,"column":4},"end":{"row":26,"column":7},"action":"insert","lines":["// "]},{"start":{"row":27,"column":4},"end":{"row":27,"column":7},"action":"insert","lines":["// "]},{"start":{"row":29,"column":4},"end":{"row":29,"column":7},"action":"insert","lines":["// "]},{"start":{"row":30,"column":4},"end":{"row":30,"column":7},"action":"insert","lines":["// "]},{"start":{"row":31,"column":4},"end":{"row":31,"column":7},"action":"insert","lines":["// "]},{"start":{"row":32,"column":4},"end":{"row":32,"column":7},"action":"insert","lines":["// "]},{"start":{"row":33,"column":4},"end":{"row":33,"column":7},"action":"insert","lines":["// "]},{"start":{"row":34,"column":4},"end":{"row":34,"column":7},"action":"insert","lines":["// "]},{"start":{"row":36,"column":4},"end":{"row":36,"column":7},"action":"insert","lines":["// "]},{"start":{"row":37,"column":4},"end":{"row":37,"column":7},"action":"insert","lines":["// "]},{"start":{"row":38,"column":4},"end":{"row":38,"column":7},"action":"insert","lines":["// "]},{"start":{"row":39,"column":4},"end":{"row":39,"column":7},"action":"insert","lines":["// "]},{"start":{"row":40,"column":4},"end":{"row":40,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":7},"action":"remove","lines":["// "],"id":51},{"start":{"row":15,"column":4},"end":{"row":15,"column":7},"action":"remove","lines":["// "]},{"start":{"row":17,"column":4},"end":{"row":17,"column":7},"action":"remove","lines":["// "]},{"start":{"row":18,"column":4},"end":{"row":18,"column":7},"action":"remove","lines":["// "]},{"start":{"row":19,"column":4},"end":{"row":19,"column":7},"action":"remove","lines":["// "]},{"start":{"row":20,"column":4},"end":{"row":20,"column":7},"action":"remove","lines":["// "]},{"start":{"row":21,"column":4},"end":{"row":21,"column":7},"action":"remove","lines":["// "]},{"start":{"row":22,"column":4},"end":{"row":22,"column":7},"action":"remove","lines":["// "]},{"start":{"row":23,"column":4},"end":{"row":23,"column":7},"action":"remove","lines":["// "]}],[{"start":{"row":15,"column":20},"end":{"row":15,"column":25},"action":"remove","lines":["class"],"id":52},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"insert","lines":["C"]}],[{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"insert","lines":["o"],"id":53}],[{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"insert","lines":["n"],"id":54}],[{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"insert","lines":["n"],"id":55}],[{"start":{"row":19,"column":14},"end":{"row":19,"column":15},"action":"remove","lines":[" "],"id":57}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"remove","lines":["/"],"id":58}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"remove","lines":["/"],"id":59}],[{"start":{"row":19,"column":69},"end":{"row":19,"column":70},"action":"remove","lines":[" "],"id":60}],[{"start":{"row":19,"column":68},"end":{"row":19,"column":69},"action":"remove","lines":[" "],"id":61}],[{"start":{"row":19,"column":64},"end":{"row":19,"column":68},"action":"remove","lines":["    "],"id":62}],[{"start":{"row":19,"column":60},"end":{"row":19,"column":64},"action":"remove","lines":["    "],"id":63}],[{"start":{"row":19,"column":59},"end":{"row":19,"column":60},"action":"remove","lines":[" "],"id":64}],[{"start":{"row":19,"column":58},"end":{"row":19,"column":59},"action":"remove","lines":[" "],"id":65}],[{"start":{"row":50,"column":4},"end":{"row":50,"column":7},"action":"insert","lines":["// "],"id":69},{"start":{"row":51,"column":4},"end":{"row":51,"column":7},"action":"insert","lines":["// "]},{"start":{"row":52,"column":4},"end":{"row":52,"column":7},"action":"insert","lines":["// "]},{"start":{"row":53,"column":4},"end":{"row":53,"column":7},"action":"insert","lines":["// "]},{"start":{"row":54,"column":4},"end":{"row":54,"column":7},"action":"insert","lines":["// "]},{"start":{"row":55,"column":4},"end":{"row":55,"column":7},"action":"insert","lines":["// "]},{"start":{"row":57,"column":4},"end":{"row":57,"column":7},"action":"insert","lines":["// "]},{"start":{"row":59,"column":4},"end":{"row":59,"column":7},"action":"insert","lines":["// "]},{"start":{"row":60,"column":4},"end":{"row":60,"column":7},"action":"insert","lines":["// "]},{"start":{"row":61,"column":4},"end":{"row":61,"column":7},"action":"insert","lines":["// "]},{"start":{"row":62,"column":4},"end":{"row":62,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":7},"action":"insert","lines":["// "],"id":70},{"start":{"row":15,"column":4},"end":{"row":15,"column":7},"action":"insert","lines":["// "]},{"start":{"row":17,"column":4},"end":{"row":17,"column":7},"action":"insert","lines":["// "]},{"start":{"row":18,"column":4},"end":{"row":18,"column":7},"action":"insert","lines":["// "]},{"start":{"row":19,"column":4},"end":{"row":19,"column":7},"action":"insert","lines":["// "]},{"start":{"row":20,"column":4},"end":{"row":20,"column":7},"action":"insert","lines":["// "]},{"start":{"row":21,"column":4},"end":{"row":21,"column":7},"action":"insert","lines":["// "]},{"start":{"row":22,"column":4},"end":{"row":22,"column":7},"action":"insert","lines":["// "]},{"start":{"row":23,"column":4},"end":{"row":23,"column":7},"action":"insert","lines":["// "]}],[{"start":{"row":25,"column":4},"end":{"row":25,"column":7},"action":"remove","lines":["// "],"id":71},{"start":{"row":26,"column":4},"end":{"row":26,"column":7},"action":"remove","lines":["// "]},{"start":{"row":27,"column":4},"end":{"row":27,"column":7},"action":"remove","lines":["// "]},{"start":{"row":29,"column":4},"end":{"row":29,"column":7},"action":"remove","lines":["// "]},{"start":{"row":30,"column":4},"end":{"row":30,"column":7},"action":"remove","lines":["// "]},{"start":{"row":31,"column":4},"end":{"row":31,"column":7},"action":"remove","lines":["// "]},{"start":{"row":32,"column":4},"end":{"row":32,"column":7},"action":"remove","lines":["// "]},{"start":{"row":33,"column":4},"end":{"row":33,"column":7},"action":"remove","lines":["// "]},{"start":{"row":34,"column":4},"end":{"row":34,"column":7},"action":"remove","lines":["// "]},{"start":{"row":36,"column":4},"end":{"row":36,"column":7},"action":"remove","lines":["// "]},{"start":{"row":37,"column":4},"end":{"row":37,"column":7},"action":"remove","lines":["// "]},{"start":{"row":38,"column":4},"end":{"row":38,"column":7},"action":"remove","lines":["// "]},{"start":{"row":39,"column":4},"end":{"row":39,"column":7},"action":"remove","lines":["// "]},{"start":{"row":40,"column":4},"end":{"row":40,"column":7},"action":"remove","lines":["// "]}],[{"start":{"row":81,"column":4},"end":{"row":81,"column":7},"action":"remove","lines":["// "],"id":72}],[{"start":{"row":81,"column":4},"end":{"row":81,"column":7},"action":"insert","lines":["// "],"id":73}]]},"ace":{"folds":[],"scrolltop":333.05558334162276,"scrollleft":0,"selection":{"start":{"row":33,"column":18},"end":{"row":33,"column":18},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":22,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1471229216421,"hash":"a96f4b886714e85e8dade0849a7b7676e9c077ff"}