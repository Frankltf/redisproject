<?php echo include_once ROOTPATH.'/view/layout/header.php';?>
    <div id="postform">
            xxx, 有啥感想?
            <br>
            <table>
                <tr>
                    <td><textarea cols="70" id="content" rows="3" name="status"></textarea></td>
                </tr>
                <tr>
                    <td align="right"><input type="button" onclick="denglu()" name="doit" value="Update"></td>
                </tr>
            </table>
        <div id="homeinfobox">
            0 粉丝<br>
            0 关注<br>
        </div>
    </div>
    <div class="post">
        <a class="username" href="profile.php?u=test">test</a> hello<br>
        <i>11 分钟前 通过 web发布</i>
    </div>
    <?php echo include_once ROOTPATH.'/view/layout/footer.php';?>
<script>
    function denglu() {
        var content=$('#content').val();
        $.ajax({
            type:'POST',
            url:'http://47.104.93.205/redisproject/index.php',
            data:{
                action:'redisdemo',
                method:'faweibo',
                content:content,
            },
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
