<?php
$no_visible_elements=true;
include('header.php'); ?>

<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>Welcome to Charisma</h2>
    </div><!--/span-->
</div><!--/row-->

<div class="row-fluid">
    <div class="well span5 center login-box">
        <div class="alert alert-info">
            Please login with your Username and Password.
        </div>
        <form class="form-horizontal" action="registration.php" method="post">
            <fieldset>
                <div class="input-prepend" title="Name" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="name" id="name" type="text" placeholder="Name"/>
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend" title="Username" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username" id="username" type="text" placeholder="Username" />
                </div>
                <div class="clearfix"></div>

                <div class="input-prepend" title="Password" data-rel="tooltip">
                    <span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="Password"/>
                </div>
                <div class="clearfix"></div>
                <p class="center span5">
                    <button type="submit" class="btn btn-primary">Login</button>
                </p>
            </fieldset>
        </form>
    </div><!--/span-->
</div><!--/row-->
<script type="text/javascript">
    $(function(){
//        if($.browser.msie)
//        {
//            $('#toggle-fullscreen').hide();
//            $('.login-box').find('.input-large').removeClass('span10');
//
//        }

        $(document).on('submit','form',function(e){
            e.preventDefault();
            $.ajax({
                type     : "POST",
                cache    : false,
                url      : $(this).attr('action'),
                data     : $(this).serialize(),
                dataType : "json",
                success  : function(data) {
                    $.fancybox.close();
                    noty({
                        text        : data.msg,
                        layout      : "bottom",
                        type        : (data.success)? "success" : "error"
                    });
                    if(data.success)
                        window.location = "/login.php";
                    else
                        return false;
                }
            });
        });
        //other things to do on document ready, seperated for ajax calls
        docReady();
    });

    $(document).ajaxStart(function(){
        $.fancybox.showLoading();
    }).ajaxStop(function(){
            $.fancybox.hideLoading();
        });

    function docReady(){
        $('.noty').click(function(e){
            e.preventDefault();
            var options = $.parseJSON($(this).attr('data-noty-options'));
            noty(options);
        });

        //uniform - styler for checkbox, radio and file input
        $("input:checkbox, input:radio, input:file").not('[data-no-uniform="true"],#uniform-is-ajax').uniform();

        $('[rel="tooltip"],[data-rel="tooltip"]').tooltip({
            "placement":"bottom",
            delay: {
                show: 400,
                hide: 200
            }
        });
    };

</script>
<script src="js/bootstrap-tooltip.js"></script>
<!--<script type="text/javascript" charset="utf-8" src="js/bootstrap.js"></script>-->
<script src="js/jquery.uniform.min.js"></script>

<script src="js/jquery.noty.js"></script>

<!--<script src="js/jquery.validate.js"></script>-->
<!--<script src="js/jquery.mask.js"></script>-->
<!---->
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
<!--<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>-->

</body>
</html>

