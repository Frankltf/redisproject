    <?php echo include_once ROOTPATH.'/view/layout/header.php'?>
    <div id="welcomebox">
        <div id="registerbox">
            <h2>注册!</h2>
            <b>想试试Retwis? 请注册账号!</b>
                <table>
                    <tr>
                        <td>用户名</td>
                        <td><input type="text" id="username" name="username"></td>
                    </tr>
                    <tr>
                        <td>密码</td>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>密码(again)</td>
                        <td><input type="password" id="password2" name="password2"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input type="button" onclick="zhuce()" name="doit" value="注册"></td>
                    </tr>
                </table>
            <h2>已经注册了? 请直接登陆</h2>
                <table>
                    <tr>
                        <td>用户名</td>
                        <td><input type="text" id="dengluname" name="username"></td>
                    </tr>
                    <tr>
                        <td>密码:</td>
                        <td><input type="password" id="denglupass" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input type="button" onclick="denglu()" name="doit" value="Login"></td>
                    </tr>
                </table>
        </div>
        介绍! Retwis 是一个简单的<a href="http://twitter.com">Twitter</a>克隆, 也是<a
            href="http://code.google.com/p/redis/">Redis</a> key-value 数据库的一个使用安全. 关键点:
        <ul>
            <li>Redis 是一种key-value 数据库, 而且是本项目中 <b>唯一</b>使用的数据库, 没有用mysql等.</li>
            <li>应用程序可以通过一致性哈希轻易的部署多台服务器</li>
            <li>PHP与redis服务器的连接用pecl的官方扩展<a href="pecl.php.net/package/redis">php-redis</a>
        </ul>
    </div>
    <?php echo include_once ROOTPATH.'/view/layout/footer.php'?>

    <script>

        function zhuce() {
            var username=$('#username').val();
            var password=$("#password").val();
            $.ajax({
                type:'POST',
                url:'http://47.104.93.205/redisproject/index.php',
                data:{
                    action:'redisdemo',
                    method:'register',
                    username:username,
                    password:password
                },
                dataType:'json',
                success:function(data,status){
                    alert('success');
                    console.log(data);
                    console.log(status);
                },
                error:function(jqXHR){
                    console.log(jqXHR)
                }

            });        
        }

        function denglu() {
            var username=$('#dengluname').val();
            var password=$("#denglupass").val();
            $.ajax({
                type:'POST',
                url:'http://47.104.93.205/redisproject/index.php',
                data:{
                    action:'redisdemo',
                    method:'loginin',
                    username:username,
                    password:password
                },
                dataType:'json',
                success:function(data,status){
                    alert('success');
                    console.log(data);
                    console.log(status);
                },
                error:function(jqXHR){
                    console.log(jqXHR)
                }

            });
        }
    </script>

