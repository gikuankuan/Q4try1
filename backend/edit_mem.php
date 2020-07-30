<?php
$admin=$Menber->find($_GET['id']);
?>
<h2 class="ct">修改管理員權限</h2>
<!-- table.all>tr*3>td.tt.ct+td.pp -->
<form action="api/save_mem.php" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp"><?=$admin['acc'];?></td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp"><input type="password" name="pw" value="<?=$admin['pw'];?>"></td>
        </tr>
        <tr>
            <td class="tt ct">電子信箱</td>
            <td class="pp"><input type="text" name="email" value="<?=$admin['email'];?>"></td>
        </tr>
        <tr>
            <td class="tt ct">電話</td>
            <td class="pp"><input type="text" name="phone" value="<?=$admin['phone'];?>"></td>
        </tr>
        <tr>
            <td class="tt ct">地址</td>
            <td class="pp"><input type="text" name="addr" value="<?=$admin['addr'];?>"></td>
        </tr>
    </table>
    <div class="ct">
        <input type="hidden" name="id" value="<?=$admin['id'];?>">
        <input type="reset" value="重置">
        <input type="submit" value="修改"><input type="reset" value="取消" onclick="location.href='?do=mem'">
    
    </div>
</form>