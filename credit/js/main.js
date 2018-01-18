
jQuery(function($){

    $(".accordion-header").click(function(){
        $('.accordion-panel').toggle("slow",function(d){
            if($(this).css('display') == "none"){
                $(".accordion-header").attr("data-state","closed");
            }else{
                $(".accordion-header").removeAttr("data-state");
            }
        });
    });

    $("#docked-nav-wrapper").on("click","a", function (event) {
        //�������� ����������� ��������� ������� �� ������
        event.preventDefault();

        //�������� ������������� ���� � �������� href
        var id  = $(this).attr('href'),


        //������ ������ �� ������ �������� �� ����� �� ������� ��������� �����
            top = $(id).offset().top - 200;

        //��������� ������� �� ���������� - top �� 1500 ��
        $('body,html').animate({scrollTop: top}, 1500);
    });


    var avatarElem = document.getElementById('docked-nav-wrapper');
    var avatarSourceBottom = avatarElem.getBoundingClientRect().bottom + window.pageYOffset;


    var menuArr = ['#about','#standard','#special','#credit','#safety','#benefits','#lightcasco','#supercasco'];



    window.onscroll = function() {

        $.each(menuArr, function(index, value){
            if($(value).length > 0){
                if(window.pageYOffset > $(value).offset().top - 300){
                    $("#docked-nav-wrapper a").removeClass('active');
                    $('#docked-nav-wrapper a[href="'+value+'"]').addClass('active');
                }
            }
        });




        if (avatarElem.classList.contains('nav-fixed') && window.pageYOffset < avatarSourceBottom) {
            avatarElem.classList.remove('nav-fixed');
        } else if (window.pageYOffset > avatarSourceBottom) {
            avatarElem.classList.add('nav-fixed');
            $(avatarElem).closest('.panel').addClass('below-c_046');
            $(avatarElem).closest('.c_023').addClass('is-sticky-nav');
        }
    };

});

