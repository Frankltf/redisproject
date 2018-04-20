<?php echo include_once ROOTPATH.'/view/layout/header.php'?>
    <h2 class="username">test</h2>
    <span onclick="guanzhu()" class="button">关注ta</span>
    <div class="post">
        <a class="username" href="profile.php?u=test">test</a>
        world<br>
        <i>11 分钟前 通过 web发布</i>
    </div>

    <div class="post">
        <a class="username" href="profile.php?u=test">test</a>
        hello<br>
        <i>22 分钟前 通过 web发布</i>
    </div>

<?php echo include_once ROOTPATH.'/view/layout/footer.php'?>
<script>
    function denglu() {
        $.ajax({
            type:'get',
            url:'http://47.104.93.205/redisproject/index.php?action=redisdemo&method=guanzhu&is_watch=1',
            dataType:'json',
            success:function(data,status){
                if(data.status=='200'){
                    alert('success');
                }else{
                    alert('fail');
                }
            },
            error:function(jqXHR){
                console.log(jqXHR)
            }

        });
    }
</script>
