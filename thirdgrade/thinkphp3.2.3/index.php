<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
</head>
<body>
    <div>
        <table border="1px">
            <tr>
                <td>序号</td>
                <td>标题</td>
                <td>发表时间</td>
                <td>操作</td>
            </tr>
            <volist name="msgs" id="msg">
                <tr>
                    <td>{$msg['id']}</td>
                    <td>{$msg['title']}</td>
                    <td>{$msg['add_time']}</td>
                    <td>编辑 删除</td>
                </tr>
            </volist>
        </table>
    </div>
</body>
</html>
