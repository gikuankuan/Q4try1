<h2>第一次購物</h2>
<img src="icon/0413.jpg" alt="">
<h2>會員登入</h2>

<table class="all ct">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp"><input type="password" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt">驗證碼</td>
        <td class="pp">
            <?php
            $a=rand(10,99);
            $b=rand(10,99);
            $_SESSION['ans']=$a+$b;
            // echo $a . "+" .
            ?>
            <input type="text" name="acc" id="acc">
        </td>
    </tr>
</table>