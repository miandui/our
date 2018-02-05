var address=window.location.href;
    //thisDLoc   =   document.location;
    //var hostport=document.location.host;
    var p = address.indexOf('index.php');
    var public_url = address.substring(0,p);//项目路径
//排序
function ksort(inputArr, sort_flags) {
    var tmp_arr = {},
        keys = [],
        sorter, i, k, that = this,
        strictForIn = false,
        populateArr = {};

    switch(sort_flags) {
        case 'SORT_STRING':
            // compare items as strings
            sorter = function(a, b) {
                return that.strnatcmp(a, b);
            };
            break;
        case 'SORT_LOCALE_STRING':
            // compare items as strings, original by the current locale (set with  i18n_loc_set_default() as of PHP6)
            var loc = this.i18n_loc_get_default();
            sorter = this.php_js.i18nLocales[loc].sorting;
            break;
        case 'SORT_NUMERIC':
            // compare items numerically
            sorter = function(a, b) {
                return((a + 0) - (b + 0));
            };
            break;
            // case 'SORT_REGULAR': // compare items normally (don't change types)
        default:
            sorter = function(a, b) {
                var aFloat = parseFloat(a),
                    bFloat = parseFloat(b),
                    aNumeric = aFloat + '' === a,
                    bNumeric = bFloat + '' === b;
                if(aNumeric && bNumeric) {
                    return aFloat > bFloat ? 1 : aFloat < bFloat ? -1 : 0;
                } else if(aNumeric && !bNumeric) {
                    return 1;
                } else if(!aNumeric && bNumeric) {
                    return -1;
                }
                return a > b ? 1 : a < b ? -1 : 0;
            };
            break;
    }

    // Make a list of key names
    for(k in inputArr) {
        if(inputArr.hasOwnProperty(k)) {
            keys.push(k);
        }
    }
    keys.sort(sorter);

    // BEGIN REDUNDANT
    this.php_js = this.php_js || {};
    this.php_js.ini = this.php_js.ini || {};
    // END REDUNDANT
    strictForIn = this.php_js.ini['phpjs.strictForIn'] && this.php_js.ini['phpjs.strictForIn'].local_value && this.php_js
        .ini['phpjs.strictForIn'].local_value !== 'off';
    populateArr = strictForIn ? inputArr : populateArr;

    // Rebuild array with sorted key names
    for(i = 0; i < keys.length; i++) {
        k = keys[i];
        tmp_arr[k] = inputArr[k];
        if(strictForIn) {
            delete inputArr[k];
        }
    }
    for(i in tmp_arr) {
        if(tmp_arr.hasOwnProperty(i)) {
            populateArr[i] = tmp_arr[i];
        }
    }

    return strictForIn || populateArr;
}

key = 'dshiu3hk2j1h4kjksjhf';
//生成签名并请求ajax
function sign_ajax(url, data, is_post, redirect_fun) {
    //将数组转换为数组
    var data_array = [];
    $.each(data, function(key, val) {
        data_array[key] = val;
    });
    var sort_array = ksort(data_array);
    var sign = $.md5(get_query(sort_array) + key);
    sort_array.sign = sign;
    var type = is_post ? is_post : 'get';
    $.ajax({
        type: type,
        url: public_url + 'index.php' + url,
        data: sort_array,
        dataType: 'json',
        success: function(res) {
            redirect_fun(res);
        }
    });
}
//生成查询字符串
function get_query(param) {
    var query = [];
    var i = 0;
    $.each(param, function(key, val) {
        query[i] = key + '=' + val;
        i++;
    });
    return query.join('&');
}