
/*Ajax�ϴ��ı�  �汾��20161024
* ʹ�÷���
*
*  �����ļ�
  <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/Ajax.js"></script>
*
function addpage(){    //onclick ִ�к���
 var url="{:U('ads/addpage')}";
 var jsondata = {url:$('#url').val()};
 ajaxGet(url,jsondata,res);
 }

 function res(data){    //���ش���ĺ��� ע������
 alert(data.word);
 }
*
* */
var g=1;
function ajaxGet(url,jsondata,resfun){
 if(g == 1){
  g = 0;
  jQuery.getJSON(url,jsondata,
      function(data){
       if(data){
        resfun(data);
        g=1;
       }else{
        alert('��ҳ���������ԣ�');
       }
      }
  );
 }

}
/*
-- funtion.php --
 function jsonReturn($data){
 $json_str = json_encode($data);
 // ����JSON���ݸ�ʽ���ͻ��� ����״̬��Ϣ
 header('Content-Type:application/json; charset=utf-8');
 //����json�а����ġ�null���������滻�ɿ��ַ���
 $search = 'null';
 $replace = '""';
 $returndata = str_replace($search, $replace, $json_str);
 //  testAddDataIntoTestTable(null,$returndata);
 exit($returndata);
 }
 */
var p=1;
function ajaxPost(url,jsondata,resfun){
 if(p == 1) {
  p = 0;
  jQuery.post(url, jsondata,
      function (data) {
       if (data) {
        resfun(data);
        p=1;
       } else {
        alert('��ҳ���������ԣ�');
       }
      }, "json"
  );
 }
}

/*Ajax �ϴ�ͼƬ
*
* ʹ��˵��
*
* �����ļ�
*
 <script type="text/javascript" src="__PUBLIC__/js/Ajax.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/jquery-1.9.1.min.js"></script>
 <script src="__PUBLIC__/js/jquery.form.js"></script>
 <script src="__PUBLIC__/js/ajaxImg.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/jquery.json.min.js"></script>

 *
 <form tag="img_file_upload" id="file_upload" name="file_upload" method="post" enctype="multipart/form-data">
 <input type="hidden" value="1" name="num">
 <input type="file" id="img" name="file" onchange="ajaxImg('{:U('index/fileUpload')}',test)">
 </form>

 <!--ִ�н����Ҫ-->
 <img tag="show_photo_upload_img" src="" alt=""/>
--js -----------------------------
 function test(data){
 var json_obj = JSON.parse(data);
 var show_img = $("[tag='show_photo_upload_img']");
 show_img.attr('src','/Uploads/'+json_obj.img_path);
 alert(json_obj.word);
 }
*
*
* */
function ajaxImg(url,resimg){
 if ($("#img").val() == "") {
 alert("��ѡ��һ��ͼƬ�ļ����ٵ���ϴ���");
 return;
 }
 var file_form = $("[tag='img_file_upload']");
 var options = {
 type : 'post',
 url : url,
 dataType: 'text',
 contentType: "application/json; charset=utf-8",
 beforeSubmit:function(){
 //alert('�����ϴ�');
 },
 success:function(data) {
 resimg(data);
 },
 error:function(XmlHttpRequest, textStatus, errorThrown){
 alert(textStatus);
 alert(errorThrown);
 }
 };
 file_form.ajaxSubmit(options);
 }