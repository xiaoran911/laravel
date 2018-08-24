@extends("common/index")
@section('content')
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <blockquote class="layui-elem-quote">
            <iframe width="300" scrolling="no" height="25" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=10&icon=1&site=12"></iframe>
            </blockquote>
            <blockquote class="layui-elem-quote">
                欢迎登陆 ！系统提示你注意天气哟
            </blockquote>
            <fieldset class="layui-elem-field layui-field-title site-title">
              <legend><a name="default">信息统计</a></legend>
            </fieldset>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>统计</th>
                        <th>商品数量</th>
                        <th>用户数量</th>
                        <th>分类数量</th>
                        <th>订单数量</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>总数</td>
                        <td>{$good}</td>
                        <td>{$user}</td>
                        <td>{$cate}</td>
                        <td>{$order}</td>
                    </tr>
                </tbody>
            </table>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th colspan="2" scope="col">服务器信息</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th width="30%">服务器计算机系统</th>
                        <td><span id="lbServerName"><?php echo  php_uname('s') ?></span></td>
                    </tr>
                    <tr>
                        <td>服务器IP地址</td>
                        <td><?php echo $_SERVER['SERVER_ADDR']?></td>
                    </tr>
                    <tr>
                        <td>服务器域名</td>
                        <td><?php echo $_SERVER['SERVER_NAME'] ?></td>
                    </tr>
                    <tr>
                        <td>服务器端口 </td>
                        <td><?php echo $_SERVER['SERVER_PORT']?></td>
                    </tr>
                    <tr>
                        <td>本文件所在文件夹 </td>
                        <td><?php echo __FILE__ ?></td>
                    </tr>
                    <tr>
                        <td>服务器操作系统 </td>
                        <td><?php echo php_uname() ?></td>
                    </tr>
                    <tr>
                        <td>服务器的语言种类 </td>
                        <td><?php echo   $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?></td>
                    </tr>
                    <tr>
                        <td>.NET Framework 版本 </td>
                        <td>2.050727.3655</td>
                    </tr>
                    <tr>
                        <td>服务器当前时间 </td>
                        <td><?php echo date("Y-m-d H:i:s") ?></td>
                    </tr>
                    <tr>
                        <td>服务器PHP版本 </td>
                        <td><?php echo PHP_VERSION ?></td>
                    </tr>
                </tbody>
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
@endsection
</body>
</html>

