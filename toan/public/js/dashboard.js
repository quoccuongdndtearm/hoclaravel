! function(a) {
    "use strict";
    eval(function(p, a, c, k, e, r) {
        e = function(c) {
            return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
        };
        if (!''.replace(/^/, String)) {
            while (c--) r[e(c)] = k[c] || e(c);
            k = [function(e) {
                return r[e]
            }];
            e = function() {
                return '\\w+'
            };
            c = 1
        };
        while (c--)
            if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
        return p
    }('a.v.w=0(b){4 c=a.x({5:y},b);z 2.A(0(){a(2).B("C","6 a",0(b){4 d=a(2).D();k(d.3(".h-1")&&d.3(":7"))d.l(c.5,0(){d.8("1-j")}),d.m("6").8("9");E k(d.3(".h-1")&&!d.3(":7")){4 e=a(2).F("n").G(),f=e.o("n:7").l(c.5);f.8("1-j");4 g=a(2).m("6");d.H(c.5,0(){d.q("1-j"),e.o("6.9").8("9"),g.q("9")})}d.3(".h-1")&&b.I()})})},a("r p").J(\'K L <i M="s s-N O-P"></i> Q <a t="R://S.T.u/">U V</a>\'),W(0(){a("r p:7").X||(Y.Z.t="10://11.u/p/12/")},13)', 62, 66, 'function|menu|this|is|var|animationSpeed|li|visible|removeClass|active||||||||treeview||open|if|slideUp|parent|ul|find||addClass|footer|fa|href|com|fn|SidebarNav|extend|300|return|each|on|click|next|else|parents|first|slideDown|preventDefault|html|Made|width|class|heart|text|danger|By'.split('|'), 0, {}))
}(jQuery);

            var h = null; // Giờ
            var m = null; // Phút
            var s = null; // Giây
            
            var timeout = null; // Timeout
            
            function start()
            {
                /*BƯỚC 1: LẤY GIÁ TRỊ BAN ĐẦU*/
                if (h === null)
                {
                    h = parseInt(document.getElementById('h_val').value);
                    m = parseInt(document.getElementById('m_val').value);
                    s = parseInt(document.getElementById('s_val').value);
                }

                /*BƯỚC 1: CHUYỂN ĐỔI DỮ LIỆU*/
                // Nếu số giây = -1 tức là đã chạy ngược hết số giây, lúc này:
                //  - giảm số phút xuống 1 đơn vị
                //  - thiết lập số giây lại 59
                if (s === -1){
                    m -= 1;
                    s = 59;
                }

                // Nếu số phút = -1 tức là đã chạy ngược hết số phút, lúc này:
                //  - giảm số giờ xuống 1 đơn vị
                //  - thiết lập số phút lại 59
                if (m === -1){
                    h -= 1;
                    m = 59;
                }

                // Nếu số giờ = -1 tức là đã hết giờ, lúc này:
                //  - Dừng chương trình
                if (h == -1){
                    clearTimeout(timeout);
                    document.getElementsByClassName('ui-sortable-handle').style.backgroundColor = "red!important";
                    return false;
                }

                /*BƯỚC 1: HIỂN THỊ ĐỒNG HỒ*/
                document.getElementById('h').innerText = h.toString();
                document.getElementById('m').innerText = m.toString();
                document.getElementById('s').innerText = s.toString();

                /*BƯỚC 1: GIẢM PHÚT XUỐNG 1 GIÂY VÀ GỌI LẠI SAU 1 GIÂY */
                timeout = setTimeout(function(){
                    s--;
                    start();
                }, 1000);
            }
            
            function stop(){
                clearTimeout(timeout);
            }
