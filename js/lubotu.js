/**
 * Created by Administrator on 2016/7/26.
 */
;(function($){
    $.fn.banner=function(options){
        return this.each(function(){
            var _banner=$('.banner');//��ȡ�ֲ�ͼ����
            var _box=$('.banner-box');//��ȡͼƬ����
            var _this=$(this); //
            var luboHei=_box.height();
            var Over='mouseover';
            var Out='mouseout';
            var Click='click';
            var Li="li";
            var _cirBox='.banner-list';
            var cirOn='cur';
            var _cirOn='.cur';
            var cirlen=_box.children(Li).length; //Բ�������  ͼƬ������
            var luboTime=2000; //�ֲ�ʱ��
            var switchTime=200;//ͼƬ�л�ʱ��
            cir();
            Btn();
            //����ͼƬ������������Բ��
            function cir(){
                _banner.append('<ol class="banner-list"></ol>');
                var list_box=jQuery('.banner-list');
                for(var i=0; i<cirlen;i++){
                    list_box.append('<li value="'+i+'"></li>');
                }
                var cir_dss=list_box.width();
                list_box.css({
                    left:'51%',
                    marginLeft:-cir_dss/2,
                    bottom:'10%'

                });
                list_box.children(Li).eq(0).addClass(cirOn);
            }
            //�������Ұ�ť
            function Btn(){
                _banner.append('<div class="banner-btn"></div>');
                var _btn=jQuery('.banner-btn');
                _btn.append('<div class="banner-btn-left"><</div><div class="banner-btn-right">></div>');
                var leftBtn=jQuery('.banner-btn-left');
                var rightBtn=jQuery('.banner-btn-right');
                //������水ť,�õ�ǰͼƬ��ʧ������һ��ͼƬ��ʵ
                leftBtn.bind(Click,function(){
                    var cir_box=jQuery(_cirBox);
                    var onLen=jQuery(_cirOn).val();
                    _box.children(Li).eq(onLen).stop(false,false).removeClass("on");
                    if(onLen==0){
                        onLen=cirlen;
                    }
                    _box.children(Li).eq(onLen-1).stop(false,false).addClass("on");
                    cir_box.children(Li).eq(onLen-1).addClass(cirOn).siblings().removeClass(cirOn);
                })
                //������水ť
                rightBtn.bind(Click,function(){
                    var cir_box=jQuery(_cirBox);
                    var onLen=jQuery(_cirOn).val();
                    _box.children(Li).eq(onLen).stop(false,false).removeClass("on");
                    if(onLen==cirlen-1){
                        onLen=-1;
                    }
                    _box.children(Li).eq(onLen+1).stop(false,false).addClass("on");
                    cir_box.children(Li).eq(onLen+1).addClass(cirOn).siblings().removeClass(cirOn);
                })
            }
            //��ʱ��
            timer=setInterval(clock,luboTime);
            function clock(){
                var cir_box=jQuery(_cirBox);
                var onLen=jQuery(_cirOn).val();
                _box.children(Li).eq(onLen).stop(false,false).removeClass("on");
                if(onLen==cirlen-1){
                    onLen=-1;
                }
                _box.children(Li).eq(onLen+1).stop(false,false).addClass("on");
                cir_box.children(Li).eq(onLen+1).addClass(cirOn).siblings().removeClass(cirOn);
            }

            // �����ͼƬ�� �رն�ʱ��
            _banner.bind(Over,function(){
                _box.children(Li).find("img").stop(false,false).animate({
                    width:930,
                    height:450
                },switchTime);
                clearTimeout(timer);
            });
            _banner.bind(Out,function(){
                _box.children(Li).find("img").stop(false,false).animate({
                    width:890,
                    height:420
                },switchTime);
                timer=setInterval(clock,luboTime);
            });
            //��껮��Բ�� �л�ͼƬ
            jQuery(_cirBox).children(Li).bind(Over,function(){
                var inde = jQuery(this).index();
                jQuery(this).addClass(cirOn).siblings().removeClass(cirOn);
                _box.children(Li).stop(false,false).removeClass("on");
                _box.children(Li).eq(inde).stop(false,false).addClass("on");

            });
        });
    }
})(jQuery);