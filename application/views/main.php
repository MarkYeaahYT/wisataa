<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?php echo base_url("assets/bootstrap/js/jquery.min.js") ?>"></script>
    <title>Document</title>
</head>
<body>

    <form>
        <table id="table">
            <tr>
                <td colspan="6" align="center"><strong>Daftar Menu & Harga</strong></td>
                </tr>
            <tr>
                <td>Makanan</td>
                <td> </td>
                <td align="right"> </td>
                <td align="center"> </td>
            </tr>
            <tr>
                <td width="156" class="makanan">Nasi</td>
                <td width="29">Rp. </td>
                <td width="99" align="right" class="harga_m">5.000</td>
                <td width="33" align="center"><input type=checkbox name="nasi" value="5000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="makanan">Ikan Gurame Bakar</td>
                <td>Rp.</td>
                <td align="right" class="harga_m">60.000</td>
                <td align="center"><input type=checkbox name="ikan" value="60000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="makanan">Cumi Asam Manis</td>
                <td>Rp.</td>
                <td align="right" class="harga_m">45.000</td>
                <td align="center"><input type=checkbox name="cumi" value="45000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="makanan">Tumis Kangkung</td>
                <td>Rp.</td>
                <td align="right" class="harga_m">15.000</td>
                <td align="center"><input type=checkbox name="kangkung" value="15000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="makanan">Tahu Goreng</td>
                <td>Rp.</td>
                <td align="right" class="harga_m">5.000</td>
                <td align="center"><input type=checkbox name="tahu" value="5000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="makanan">Ayam Goreng</td>
                <td>Rp.</td>
                <td align="right" class="harga_m">12.000</td>
                <td align="center"><input type=checkbox name="ayam" value="12000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                  <td colspan="4"> </td>
            </tr>
            <tr>
                  <td colspan="4">Minuman</td>
            </tr>
            <tr>
                <td class="minuman">Teh Manis</td>
                <td>Rp.</td>
                <td align="right" class="harga_mi">4.000</td>
                <td align="center"><input type=checkbox name="tehmanis" value="4000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="minuman">Jus Mangga</td>
                <td>Rp.</td>
                <td align="right" class="harga_mi">8.000</td>
                <td align="center"><input type=checkbox name="jusmangga" value="8000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="minuman">Jus Alpukat</td>
                <td>Rp.</td>
                <td align="right" class="harga_mi">8.000</td>
                <td align="center"><input type=checkbox name="jusalpukat" value="8000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="minuman">Lemon Tea</td>
                <td>Rp.</td>
                <td align="right" class="harga_mi">5.000</td>
                <td align="center"><input type=checkbox name="lemontea" value="5000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td class="minuman">Milk Shake</td>
                <td>Rp.</td>
                <td align="right" class="harga_mi">9.000</td>
                <td align="center"><input type=checkbox name="milkshake" value="9000" onClick="this.form.total.value=checkChoice(this);"></td>
            </tr>
            <tr>
                <td colspan="4" align="right">Total :
                    <input type="text" name="total" value=""  readonly>
                    <input type=hidden name=hiddentotal value=0></td>
            </tr>
            <tr>
                <td><input type="submit" value="send" class="send"></td>
            </tr>
    
        </table>
    </form>
    




    <script language="JavaScript">
        function checkChoice(whichbox){
            with (whichbox.form){
                if (whichbox.checked == false)
                    hiddentotal.value = eval(hiddentotal.value) - eval(whichbox.value);
                else
                    hiddentotal.value = eval(hiddentotal.value) + eval(whichbox.value);
                    return(formatCurrency(hiddentotal.value));
            }
        }

        function formatCurrency(num){
            num = num.toString().replace(/\$|\,/g,'');
            if(isNaN(num)) num = "0";
                cents = Math.floor((num*100+0.5)%100);
                num = Math.floor((num*100+0.5)/100).toString();
            if(cents < 10) cents = "0" + cents;
                for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
                num = num.substring(0,num.length-(4*i+3))+'.'+num.substring(num.length-(4*i+3));
                return ("Rp. " + num + "," + cents);
        }
    </script>
    <script src="<?php echo base_url("assets/js/main.js") ?> "></script>
</body>
</html>